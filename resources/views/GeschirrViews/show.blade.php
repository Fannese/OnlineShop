@extends('layouts.adminlte')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">{{ __('Details Anschit') }}</div>

                <div class="card-body">

                         <img src="{{ asset('GeschirrBilder/'. $renderData['Geschirr']->bild) }}" width="200px" height="150px" alt="file_path" >
                        <br>
                        <dd style="color: green"> {{ $renderData['Geschirr']->name}}</dd>
                        <dd class="col-4 " style="color: black">{{ $renderData['Geschirr']->beschreibung }}</dd>
                        <dd style="color: red">{{ $renderData['Geschirr']->preis }}</dd>


                <div class="float-end">
                <select class="form-select" aria-label="Default select example">

                    <option selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
