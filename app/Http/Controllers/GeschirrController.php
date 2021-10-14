<?php

namespace App\Http\Controllers;

use App\Models\GeschirrModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        // $this->authorize('create', GeschirrModel::class);
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
        $Geschirr->anzahl = $request->input('anzahl');
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
     * Display the specified resource.
     *
     * @param  \App\Models\GeschirrModel  $Geschirr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Geschirr = GeschirrModel::findOrFail($id);
        $users = User::all();

        $renderData = ['users' => $users, 'Geschirr' => $Geschirr];
        return view('GeschirrViews.show', compact('renderData'));
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

        // $this->authorize('update', $Geschirr);

        $Geschirr->name = $request->input('name');
        $Geschirr->beschreibung = $request->input('beschreibung');
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
        return view('GeschirrViews.index');
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
        return view('GeschirrViews.index');
    }
}
