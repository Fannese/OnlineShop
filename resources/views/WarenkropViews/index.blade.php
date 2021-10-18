@extends('layouts.adminlte')
@section('content')

    <div class="container-fluid">
        <div class="card shadow" >
            <div class="card-body">
           @foreach($Waren as $waren)
                <div class="row" id="Geschirr_daten">
                     <div class="col-md-2 border-right">
                 <img src="{{ asset('GeschirrBilder/'.$waren->geschirrzugriff->bild) }}" width="300px" height="200px" alt="file_path" >
                    </div>
            <div class="col-md-8" >
                <h3  class="mb-0 bg-dark">{{ $waren->geschirrzugriff->name }}</h3>
                <hr>
            <div class="col-md-3">
                <input type="hidden"  id="geschirr_id">
                  <label for="anzahl">{{ __('Menge') }}</label>
                <div class="input-group text-center mb-3">

            <button class="input-group-text" id="decrement-btn">-</button>

            <input type="text" name="anzahl " class="form-control text-center" id="anzahl-input" value="{{ $waren->menge }}">
            <button class="input-group-text" id="increment-btn" >+</button>

        </div>
    </div>
    <hr>
    <p class="mt-3">
        {{ $waren->geschirrzugriff->beschreibung }}
    </p>

    <div class="col-md-2">
        <form action="{{ route('loeschen',$waren->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-3"><i class="fas fa-trash-alt"></i> Löschen</button>
            </form>
    </div>
</div>

            </div>
        </div>
    </div>




@include('GeschirrViews.counter')

@endforeach


@endsection
