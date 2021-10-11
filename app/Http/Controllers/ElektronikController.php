<?php

namespace App\Http\Controllers;

use App\Models\ElektronikModel;
use Illuminate\Http\Request;

class ElektronikController extends ElektronikModel
{
    public function index()
    {
        return view('GeschirrViews.index');
    }
}
