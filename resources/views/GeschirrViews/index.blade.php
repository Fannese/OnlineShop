@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card-header">


            <a href="{{ route('Geschirr.create') }}" class="float-right"> Hinzufügen </a>
        </div>
            <div class="card-body">

                    @foreach($Geschirr as $geschirr)
                    <div class="col-6 col-md-6">
                        <figure>
                           <img src="{{ asset('GeschirrBilder/'. $geschirr->bild) }}" class="img-fluid" width="200px" height="150px"  alt="bild" >
                        </figure>
                        <a href="/Geschirr.show/{{ $geschirr->id }}"><dd>{{ $geschirr->name }}</dd></a>

                            <dd>{{ $geschirr->preis }}</dd>
                            <dd>
                                @can('update', $geschirr)

                                <form action="{{ route('Geschirr-edit', $geschirr->id) }}" method="GET">
                                    <input type="submit" class="btn btn-success  mt-3"  value="Ändern">

                                </form>
                                @endcan
                                @can('delete', $geschirr)


                                <form action="#" method="post" class="float-end">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger mt-3" value="Löschen">
                                </form>
                                @endcan
                    @endforeach



    </div>
</div>
</div>
</div>
</div>


@endsection
