<?php

namespace App\Http\Controllers;

use App\Models\BewertungsModel;
use App\Models\GeschirrModel;
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
        return view('WarenkorpViews.check', compact('WareItems'));
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
        $order->zalung_methode = $request->input('zalung_methode');
        $order->zalung_id = $request->input('zalung_id');
        $order->telephon_nummer = $request->input('telephon_nummer');

        $preistotal = 0;
        $caritempreis = WarenkropModel::where('user_id', Auth::id())->get();
        foreach ($caritempreis as $prod) {
            $preistotal += ((int)$prod->geschirrzugriff->preis * (int)$prod->menge);
        }
        $order->totalpreis = $preistotal;
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
        if ($request->input('zalung_methode') == 'Paypal') {
            return response()->json(['status' => 'Bestellung erfolgreich']);
        }

        return redirect('/')->with('message', 'Bestellung erfolgreich');
    }
    public function rezorpay(Request $request)
    {
        $WareItems = WarenkropModel::where('user_id', Auth::id())->get();
        $preistotal = 0;
        foreach ($WareItems as $item) {
            $preistotal +=  ((int)$item->geschirrzugriff->preis * (int)$item->menge);
        }
        $vorname = $request->input('vorname');
        $name = $request->input('name');
        $email = $request->input('email');
        $straße = $request->input('straße');
        $plz = $request->input('plz');
        $stadt = $request->input('stadt');
        $land = $request->input('land');
        $telephon_nummer = $request->input('telephon_nummer');

        return response()->json([
            'vorname' => $vorname,
            'name' => $name,
            'email' => $email,
            'straße' => $straße,
            'plz' => $plz,
            'stadt' => $stadt,
            'land' => $land,
            'telephon_nummer' => $telephon_nummer,
            'preistotal' => $preistotal,
        ]);
    }

    public function bewertung(Request $request)
    {
        $sterne = $request->input('product_rating');
        $geschirr_id = $request->input('geschirr_id');
        $prod_check = GeschirrModel::where('id', $geschirr_id)->first();
        if ($prod_check) {
            $verified_purchase = OrderModel::where('order_models.user_id', Auth::id())
                ->join('order_items', 'order_models.id', 'order_items.order_id')
                ->where('order_items.geschirr_id', $geschirr_id)->get();
            if ($verified_purchase) {

                $existierende_bewertung = BewertungsModel::where('user_id', Auth::id())->where('geschirr_id', $geschirr_id)->first();
                if ($existierende_bewertung) {
                    $existierende_bewertung->sterne = $sterne;
                    $existierende_bewertung->update();
                } else {
                    BewertungsModel::create([
                        'user_id' => Auth::id(),
                        'geschirr_id' => $geschirr_id,
                        'sterne' => $sterne,

                    ]);
                }
                return redirect()->back()->with('status', "Vielen dank für ihre Bewertung");
            } else {
                return redirect()->back()->with('status', "Sie können keine Bewertung abgeben");
            }
        } else {
            return redirect()->back()->with('status', "der Link ist ungültig");
        }
    }
}
