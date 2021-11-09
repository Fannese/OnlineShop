<?php

namespace App\Http\Controllers;

use App\Models\BewertungsModel;
use App\Models\GeschirrModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class GeschirrController extends Controller

{
    /**
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
        $this->middleware('admin')->except(['index']);
    }
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $Geschirr = GeschirrModel::all();
        return view('ArtikelViews.index', compact('Geschirr'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create', GeschirrModel::class);
        return view('ArtikelViews.create');
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
        $Geschirr = new GeschirrModel();
        $Geschirr->name = $request->input('name');
        $Geschirr->beschreibung = $request->input('beschreibung');
        $Geschirr->kategorie = $request->input('kategorie');
        $Geschirr->preis = $request->input('preis');
        $Geschirr->anzahl = $request->input('anzahl');
        if ($request->hasFile('bild')) {
            $file = $request->file('bild');
            $extention = $file->getClientOriginalName();
            $filename = time() . '.' . $extention;
            $file->move('GeschirrBilder/', $filename);
            $Geschirr->bild = $filename;
        }

        $Geschirr->save();
        return view('ArtikelViews.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeschirrModel  $Geschirr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Geschirr = GeschirrModel::findOrFail($id);
        $users = User::all();
        $bewertung = BewertungsModel::where('geschirr_id', $Geschirr->id)->get();
        $sumk_bewertung =  BewertungsModel::where('geschirr_id', $Geschirr->id)->sum('sterne');

        if ($bewertung->count() > 0) {
            $bewertung_value = $sumk_bewertung / $bewertung->count();
        } else {
            $bewertung_value = 0;
        }
        $renderData = ['users' => $users, 'Geschirr' => $Geschirr];
        return view('ArtikelViews.show', compact('renderData', 'bewertung', 'bewertung_value'));
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
        return view('ArtikelViews.edit', compact('Geschirr'));
    }
    public function update(Request $request, $id)
    {

        $Geschirr = GeschirrModel::find($id);

        // $this->authorize('update', $Geschirr);

        $Geschirr->name = $request->input('name');
        $Geschirr->beschreibung = $request->input('beschreibung');
        $Geschirr->kategorie = $request->input('kategorie');
        $Geschirr->preis = $request->input('preis');
        $Geschirr->anzahl = $request->input('anzahl');
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
        return view('ArtikelViews.index')->with('status', "Artikel upgedatet !");
    }

    public function destroy($id)
    {
        $Geschirr = GeschirrModel::find($id);
        if ($Geschirr->bild) {
            $path = 'GeschirrBilder/' . $Geschirr->bild;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $Geschirr->delete();
        return view('ArtikelViews.index');
    }
}
