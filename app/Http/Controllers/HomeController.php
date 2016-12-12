<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orders = Order::latest()->get();

        $totalMonth = Order::totalMonth();

        $totalMonthCount = Order::totalMonthCount();

        return view('home',['orders' => $orders, 'totalMonth' => $totalMonth, 'totalMonthCount' => $totalMonthCount]);
        
    }
}
