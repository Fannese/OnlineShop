<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\OrderItem;

class OrderlistController extends Controller
{
    public function index()
    {


        $Orders = OrderModel::all();
        // dd($Orders);
        return view('orderlist.adminView', compact('Orders'));
    }
    public function show($id)
    {

        $orders = OrderModel::where('id', $id)->first();
        // dd($orders);
        return view('orderlist.show', compact('orders'));
    }
}
