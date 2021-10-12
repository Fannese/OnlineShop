@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card-header">


            <a href="{{ route('Geschirr.create') }}" class="float-right"> Hinzufügen </a>
        </div>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

            <div class="card-body">

                    @foreach($Geschirr as $geschirr)
                    <div class="col-6 col-md-6">

                            <a  href="{{ route('Geschirr-Home', $geschirr->id) }}"><img src="{{ asset('GeschirrBilder/'. $geschirr->bild) }}" class="img-fluid" width="200px" height="150px"  alt="bild" ></a>

                            <dd>{{ $geschirr->name }}</dd>

                            <dd>{{ $geschirr->preis }}</dd>
                            <dd>
                                <form action="{{ route('Geschirr-edit', $geschirr->id) }}" method="GET">
                                    <input type="submit" class="btn btn-success  mt-3"  value="Ändern">

                                </form>


                                <form action="#" method="post" class="float-end">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger mt-3" value="Löschen">

                    @endforeach



    </div>
</div>
</div>
</div>
</div>


@endsection
