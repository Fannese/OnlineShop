@extends('layouts.adminlte')
@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">

        <h6 class="mb-0">Geschirr/{{ $renderData['Geschirr']->name }}</h6>
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow" id="Geschirr_daten">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                         <img src="{{ asset('GeschirrBilder/'. $renderData['Geschirr']->bild) }}" width="300px" height="200px" alt="file_path" >
                </div>
                    <div class="col-md-8">

                        <h2 class="mb-0 bg-dark"> {{ $renderData['Geschirr']->name}}
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag"> Teller</label>
                        </h2>
                        <hr>
                        <label class="me-3">Preis:{{ $renderData['Geschirr']->preis }}</label>

                        <p class="mt-3"><b> Beschreibung:</b> <br>{{ $renderData['Geschirr']->beschreibung }}</br></p>
                        <hr>
                        @if($renderData['Geschirr']->anzahl>0)
                        <label class="badge bg-success">vorhanden</label>
                        @else<label class="badge bg-danger"> Nicht mehr vorhanden</label>
                        @endif
                <div class="row mt-2">
                    <div class="col-md-2">
                        <input type="hidden" value="{{ $renderData['Geschirr']->id }}" id="geschirr_id">
                        <label for="anzahl">{{ __('Menge') }}</label>
                        <div class="input-group text-center mb-3">

                            <button class="input-group-text" id="decrement-btn">-</button>

                            <input type="text" name="anzahl " class="form-control text-center" id="anzahl-input" value="1">
                            <button class="input-group-text" id="increment-btn" >+</button>

                        </div>
                    </div>
                </div>
                    <div class="col-md-9">
                        <br>
                        <button type="button" class="btn btn-primary me-3 float-start" id="warenkrop">In Warenkrop Hinzufügen<i class="fas fa-shopping-cart"></i></button>
                    </div>

    </div>
</div>
</div>
</div>
@include('WarenkropViews.warenkrophinzufuegen')
@include('GeschirrViews.counter')
@endsection
