@extends('layouts.adminlte')
@section('content')
<div class="container-fluid" style="background-image:url('{{ asset('assets/images/unnamed.jpg') }}'); background-size:150%">
    <div class="row" id="row1">
        <div class="col-md-12 mt-3">

            <div class="card-header">

            <a href="{{ route('Geschirr.create') }}" class="float-right"> Hinzufügen </a>

            </div>
<!--search-->
        <input id="myInput" type="search" class="form-control" placeholder="Search for names..">

            <div class="card-body" id="search1">
                    @foreach($Geschirr as  $geschirr)
                        <div id="Bilder">
                           <img src="{{ asset('GeschirrBilder/'. $geschirr->bild) }}"  alt="bild" >
                        </div>
                        <div class="card-body" id="li">
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

<!--Search-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{{ asset('css/ArtikelIndex.css') }}" rel="stylesheet"></link>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();

    $("#search1 dd").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

  });
});
</script>
@endsection
