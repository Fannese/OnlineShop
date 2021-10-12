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
        $Geschirr->preis = $request->input('preis');
        if ($request->hasFile('bild')) {
            $file = $request->file('bild');
            $extention = $file->getClientOriginalName();
            $filename = time() . '.' . $extention;
            $file->move('GeschirrBilder/', $filename);
            $Geschirr->bild = $filename;
        }

        $Geschirr->save();
        return view('GeschirrViews.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeschirrModel  $Geschirr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Geschirr = GeschirrModel::find($id);
        return view('GeschirrViews.edit', compact('Geschirr'));
    }
    public function update(Request $request, $id)
    {

        $Geschirr = GeschirrModel::find($id);
        $Geschirr->name = $request->input('name');
        $Geschirr->beschreibung = $request->input('beschreibung');
        $Geschirr->preis = $request->input('preis');
        if ($request->hasFile('bild')) {
            $destination = 'GeschirrBilder/' . $Geschirr->bild;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('bild');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;

            $file->move('GeschirrBilder/', $filename);
            $Geschirr->bild = $filename;
        }
        $Geschirr->save();
        return view('GeschirrViews.index');
    }

    public function destroy($id)
    {
        $Geschirr = GeschirrModel::find($id);
        $Geschirr->delete();
        return view('GeschirrViews.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeschirrModel  $Geschirr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Geschirr = GeschirrModel::find($id);
        return view('GeschirrViews.show')->with('Geschirr', $Geschirr);
    }
}
