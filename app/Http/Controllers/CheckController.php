<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\OrderModel;
use App\Models\WarenkropModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    public function index()
    {
        $WareItems = WarenkropModel::where('user_id', Auth::id())->get();
        return view('WarenkropViews.check', compact('WareItems'));
    }
    public function store(Request $request)
    {
        $order = new OrderModel();
        $order->user_id = Auth::id();
        $order->vorname = $request->input('vorname');
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->straße = $request->input('straße');
        $order->plz = $request->input('plz');
        $order->stadt = $request->input('stadt');
        $order->land = $request->input('land');
        $order->telephon_nummer = $request->input('telephon_nummer');
        $order->sendung_nr = 'shop' . rand(1111, 9999);

        $order->save();

        $WareItems = WarenkropModel::where('user_id', Auth::id())->get();
        foreach ($WareItems as $Item) {
            OrderItem::create([
                'order_id' => $order->id,
                'geschirr_id' => $Item->geschirr_id,
                'menge' => $Item->menge,
                'preis' => $Item->geschirrzugriff->preis,
            ]);
        }
        $WareItems = WarenkropModel::where('user_id', Auth::id())->get();
        WarenkropModel::destroy($WareItems);

        return redirect('/')->with('message', 'erfolgreich');
    }
}
