<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeschirrModel;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\OrderItem;
use App\Models\User;

class listController extends Controller
{
    public function index()
    {


        $Orders = OrderModel::all();
        // dd($Orders);
        return view('Admin.adminView', compact('Orders'));
    }
    public function show($id)
    {
        $prods = GeschirrModel::where('id', $id)->first();
        $orders = OrderModel::where('id', $id)->first();
        // dd($orders);
        return view('Admin.show', compact('orders', 'prods'));
    }
    public function edit($id)
    {
        $prods = GeschirrModel::where('id', $id)->first();
        $order = OrderModel::find($id);
        return view('Admin.edit', compact('order', 'prods'));
    }
    public function update(Request $request, $id)
    {
        $order = OrderModel::where('id', $id)->first();
        $order->name = $request->input('name');
        $order->vorname = $request->input('vorname');
        $order->straße = $request->input('straße');
        $order->plz = $request->input('plz');
        $order->stadt = $request->input('stadt');
        $order->land = $request->input('land');
        $order->telephon_nummer = $request->input('telephon_nummer');
        $order->save();
        return redirect('Bestellungen')->with('message', 'geändert');
    }
    public function user()
    {
        $users = User::all();
        return view('Admin.userview', compact('users'));
    }
}
