<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GeschirrModel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        //vorschau_produkt=GeschirrModel::where()
        return view('frontend.index');
    }
}
