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

        if (Auth::check()) {
            $produkt_check = GeschirrModel::where('id', $geschirr_id)->first();

            if ($produkt_check) {
                if (WarenkropModel::where('geschirr_id',  $geschirr_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $produkt_check->name . 'melden Sie sich an um vorzufahren!']);
                } else {


                    $PoduktItem = new WarenkropModel();
                    $PoduktItem->geschirr_id = $geschirr_id;
                    $PoduktItem->user_id = Auth::id();
                    $PoduktItem->menge = $menge;
                    $PoduktItem->save();
                    return response()->json(['status' => $produkt_check->name . 'In Warenkrop hinzugeführt!']);
                }
            }
        } else {
            return response()->json(['status', 'melden Sie sich an um vorzufahren!']);
        }
    }
    public function show()
    {
        $Waren = WarenkropModel::where('user_id', Auth::id())->get();
        return view('WarenkropViews.index', compact('Waren'));
    }
    public function destroy($id)
    {
        $Waren = WarenkropModel::findOrFail($id);

        $Waren->delete();
    }
}
