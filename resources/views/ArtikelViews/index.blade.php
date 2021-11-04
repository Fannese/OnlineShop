@extends('layouts.adminlte')
@section('content')
<div class="container-fluid" style="background-image:url('{{ asset('assets/images/unnamed.jpg') }}'); background-size:150%">
    <div class="row">
        <div class="col-md-12 mt-3">

            <div class="card-header">

            <a href="{{ route('Geschirr.create') }}" class="float-right"> Hinzufügen </a>

            </div>
            <form action="{{ route('Geschirr-index') }}" method="GET" class="col-9" role="search">
                @csrf
                <div class="form-group">
                  <input type="search" name="search" id="" class="form-control" placeholder="suche bei name">

                </div>
                    <button class="btn btn-primary" type="submit">Search </button>
                </form>
            <div class="card-body">

                    @foreach($Geschirr as $key=> $geschirr)
                    <div class="col-6 col-md-6" {{$key == 0 ? 'active' : ''}}>

                        <figure>
                           <img src="{{ asset('GeschirrBilder/'. $geschirr->bild) }}" width="300px" height="200px"   alt="bild" >
                        </figure>
                        <div class="card-body">
                        <a href="/Geschirr.show/{{ $geschirr->id }}"><dd>{{ $geschirr->name }}</dd></a>

                            <dd>{{ $geschirr->preis }}</dd>
                            <dd>
                                <form action="{{ route('Geschirr-edit', $geschirr->id) }}" method="GET">
                                    <input type="submit" class="btn btn-success  mt-3"  value="Ändern">

                                </form>
                                <form action="{{ route('Geschirr-loeschen', $geschirr->id) }}" method="post" class="float-end">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger mt-3" value="Löschen">
                                    <br>
                                </form>
                    @endforeach
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection
