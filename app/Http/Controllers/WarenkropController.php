<?php

namespace App\Http\Controllers;

use \App\Models\GeschirrModel;
use App\Models\WarenkropModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarenkropController extends Controller
{
    public function hinzufuegen(Request $request)
    {
        $geschirr_id = $request->input('geschirr_id');
        $menge = $request->input('menge');

        $produkt_check = GeschirrModel::where('id', $geschirr_id)->first();

        if ($produkt_check) {
            if (WarenkropModel::where('geschirr_id',  $geschirr_id)->exists()) {
                return response()->json(['status' => $produkt_check->name . 'melden Sie sich an um vorzufahren!']);
            } else {


                $PoduktItem = new WarenkropModel();
                $PoduktItem->geschirr_id = $geschirr_id;
                //$PoduktItem->user_id = Auth::id();
                $PoduktItem->menge = $menge;
                $PoduktItem->save();
                return response()->json(['status' => $produkt_check->name . 'wurde im Warenkrop hinzugeführt!']);
            }
        }
    }

    public function show()
    {
        //$Waren = WarenkropModel::where('user_id', Auth::id())->get();
        $Waren = WarenkropModel::all();
        return view('WarenkorpViews.warenkorp', compact('Waren'));
    }

    public function update(Request $request)
    {
        $geschirr_id = $request->input('geschirr_id');
        $menge = $request->input('menge');

        if (WarenkropModel::where('geschirr_id',  $geschirr_id)->exists()) {
            $produkt = WarenkropModel::where('geschirr_id',  $geschirr_id)->first();
            if ($produkt) {
                $produkt->menge = $menge;
                $produkt->update();
            }
            return response()->json(['status' => 'Menge upgedatet!']);
        }
    }

    public function destroy($id)
    {
        $Waren = WarenkropModel::findOrFail($id);

        $Waren->delete();
        return back()->with('status', 'Produkt erfolgreich gelöscht.');
    }
}
