<?php

namespace App\Http\Controllers;

use App\Models\GeschirrModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GeschirrController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Geschirr = GeschirrModel::all();
        return view('GeschirrViews.index', compact('Geschirr'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GeschirrViews.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        #dd($request->all(), $request);
        $Geschirr = new GeschirrModel;
        $Geschirr->name = $request->input('name');
        $Geschirr->beschreibung = $request->input('beschreibung');
        $Geschirr->Preis = $request->input('Preis');
        if ($request->hasFile('bild')) {
            $file = $request->file('bild');
            $extention = $file->getClientOriginalName();
            $filename = time() . '.' . $extention;
            $file->move('GeschirrBilder/', $filename);
            $Geschirr->$file = $filename;
        }

        $Geschirr->save();



        return view('GeschirrViews.create')->with('message', 'Produkt.$produkte->name(). Hinzugeführt');
    }
}
