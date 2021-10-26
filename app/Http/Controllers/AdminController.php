<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\OrderModel;

class AdminController extends Controller
{
    public function index()
    {

        $Orders = OrderModel::all();
        // dd($Orders);
        return view('adminView', compact('Orders'));
    }
}
