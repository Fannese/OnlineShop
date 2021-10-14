@extends('layouts.adminlte')
@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Geschirr/{{ $renderData['Geschirr']->name }}</h6>
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                         <img src="{{ asset('GeschirrBilder/'. $renderData['Geschirr']->bild) }}" width="300px" height="200px" alt="file_path" >
                </div>
                    <div class="col-md-8">

                        <h2 class="mb-0 bg-dark" > {{ $renderData['Geschirr']->name}}
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
                        <label for="name">{{ __('Menge') }}</label>
                        <div class="input-group text-center mb-3">

                            <span class="input-group-text">-</span>

                            <input type="text" name="name" value="1" class="form-control">
                            <span class="input-group-text">+</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
