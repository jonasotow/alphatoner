<?php
	
namespace App;

class PayPal
{
	private $_apiContext;
	private $shopping_cart;
	private $_ClientId = 'Ac-Ktoyv7aqZZrUm_HdbMr6Da6Xfmjcga0rkgIsKWrW7UkX-RaG7-1rE7Y1IoC83HgbNjo3aml8gq5we';
	private $_ClientSecret = 'EKhrwQpgtFzTqGKv6elVRg_4VzPmuPm4_xMfAKHA9TWINStDs873ZtS54qnHm5Aeozvpme18bm85DqPO';

	public function __construct($shopping_cart){

		$this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId, $this->_ClientSecret);

		$config = config("paypal_payment");
		$flatConfig = array_dot($config);

		$this->_apiContext->setConfig($flatConfig);

		$this->shopping_cart = $shopping_cart;
	}

	public function generate(){
		$payment = \PaypalPayment::payment()->setIntent("sale")
										->setPayer($this->payer())
										->setTransactions([$this->transaction()])
										->setRedirectUrls($this->redirectURLs());

		try{
			$payment->create($this->_apiContext);
		} catch(\Exception $ex){
			 dd($ex);
			 exit(1);
		}

		return $payment;

	}

	public function redirectURLs(){
		// returns setRedirectUrls's info
		$baseURL = url('/');
		return \PaypalPayment::redirectURLs()
							->setReturnUrl("$baseURL/payments/store")
							->setCancelUrl("$baseURL/carrito");
	}

	public function payer(){
		// returns payment's info
		return \PaypalPayment::payer()
							->setPaymentMethod("paypal");
	}
	
	public function transaction(){
		// returns transaction's info
		return \PaypalPayment::transaction()
							->setAmount($this->amount())
							->setItemList($this->items())
							->setDescription("Tu compra en AlphaToner.mx")
							->setInvoiceNumber(uniqid());
	}

	public function items(){
		$items = [];
		
		$products = $this->shopping_cart->products()->get();

		foreach ($products as $product) {
            array_push($items, $product->paypalItem());
		}

		return \PaypalPayment::itemList()->setItems($items);
	}


	public function amount(){
		return \PaypalPayment::amount()->setCurrency("MXN")
							->setTotal($this->shopping_cart->total());
	}

	public function execute($paymentId,$payerId){
		$payment = \PaypalPayment::getById($paymentId,$this->_apiContext);

		$execution = \PaypalPayment::PaymentExecution()
							->setPayerId($payerId);

		return $payment->execute($execution,$this->_apiContext);
	}


}