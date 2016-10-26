<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ShoppingCart;

class ShoppingCartsController extends Controller
{
    public fuction index(){
    	$shopping_cart_id = \Session::get('shopping_cart_id');

        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $products = shopping_cart->products()->get();

        $total = $shopping_cart->total();
    }
}
