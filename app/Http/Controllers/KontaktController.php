<?php

namespace App\Http\Controllers;

use App\Models\KontaktModel;
use Illuminate\Http\Request;

class KontaktController extends Controller
{
    public function store(Request $request)
    {
        #dd($request->all(), $request);
        $kontakt = new KontaktModel();
        $kontakt->name = $request->input('name');
        $kontakt->email = $request->input('email');
        $kontakt->nachricht = $request->input('nachricht');
        $kontakt->save();
        return redirect('contact');
    }
}
