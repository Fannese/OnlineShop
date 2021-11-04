@extends('layouts.adminlte')
@section('content')
    <div class="container-fluid">
        <div class="card shadow" >
            <div class="card-body"  style="background-color: blue">
                @php
                $total=0;
            @endphp
           @foreach($Waren as $waren)
                <div class="row" id="Geschirr_daten">
                     <div class="col-md-3">
                 <img src="{{ asset('GeschirrBilder/'.$waren->geschirrzugriff->bild) }}" width="300px" height="200px" alt="file_path" >
                    </div>
            <div class="col-md-5" >
                <h3  class="mb-0 bg-dark">{{ $waren->geschirrzugriff->name }}</h3>
                <hr>
                <label class="me-3">Preis:{{ $waren->geschirrzugriff->preis }}</label>
            <div class="col-md-3">

                <input type="hidden"  id="geschirr_id" value="{{ $waren->geschirr_id }}">
                  <label for="menge">{{ __('Menge') }}</label>
                <div class="input-group text-center mb-3">

            <button class="input-group-text mengeUpdate" id="decrement-btn">-</button>

            <input type="text" name="menge" class="form-control text-center" id="menge" value="{{ $waren->menge }}">

            <button class="input-group-text mengeUpdate" id="increment-btn" >+</button>

                </div>
                </div>


    <hr>
    <label class="me-3">Beschreibung: </label>
       <br> {{ $waren->geschirrzugriff->beschreibung }}


    <div class="col-md-2">
        <form action="{{ route('loeschen',$waren->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-3"><i class="fas fa-trash-alt"></i> Löschen</button>
            </form>
    </div>
    <hr>
</div>

            </div>
            @php
                $total+=((int)$waren->geschirrzugriff->preis*(int)$waren->menge);
            @endphp

@endforeach
<div class="card-footer bg-warning">

    <h6 >Total Preis: {{ $total }}</h6>
</div>
<div class="col-md-2">
    <form action="{{ route('ueberpruefen') }}" method="GET">

        <button class="btn btn-primary mt-3"><i class="fas fa-check"></i> Überprüfen</button>
        </form>
</div>
    </div>
</div>
    </div>
    @include('WarenkorpViews.warenkrophinzufuegen')
    @include('ArtikelViews.counter')


@endsection

