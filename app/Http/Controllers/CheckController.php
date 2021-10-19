<?php

namespace App\Http\Controllers;

use App\Models\GeschirrModel;
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
}
