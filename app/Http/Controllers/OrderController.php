<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
        $order=Order::all();
        return view('admin.orders.index',compact('order'));
    }
    public function confirm($id)
    {
        $order=Order::find($id);
        $order->update(['status'=>1]);
        return redirect()->route('orders.index');
        session()->flash('msg','Order has been confirmed');
    }
    public function pending($id)
    {
        $order=Order::find($id);
        $order->update(['status'=>0]);
        return redirect()->route('orders.index');
        session()->flash('msg','Order has been pending');
    }
    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.orders.details',compact('order'));
    }
}
