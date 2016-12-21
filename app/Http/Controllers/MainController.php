<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class MainController extends Controller{
	public function home(Request $request){

        $products = Product::search($request->title)->total()->simplePaginate(5);
		return view("main.home",["products" => $products]);



	}

}