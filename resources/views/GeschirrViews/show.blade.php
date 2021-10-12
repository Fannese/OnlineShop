@extends('layouts.adminlte')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <img src="{{ asset('GeschirrBilder/'. $Geschirr->bild) }}" width="200px" height="150px" style=" float: left"   alt="bild" ></a>

                        <br>
                        <dd >{{ $Geschirr->name }}</dd>
                        <dd > {{ $Geschirr->preis }}</dd>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
