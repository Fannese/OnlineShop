@extends('layouts.adminlte')
@section('content')

<!--Bewertung design-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="{{ url('/Bewertung') }}" method="GET">
            @csrf
            <input type="hidden" name="geschirr_id" value="{{  $renderData['Geschirr']->id }}">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">bewerten Sie bitte das Produkt<div class="bg-dark"> {{ $renderData['Geschirr']->name  }}</div></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>



<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">

        <h6 class="mb-0">{{ $renderData['Geschirr']->kategorie }}/{{ $renderData['Geschirr']->name }}</h6>
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
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag"> {{ $renderData['Geschirr']->kategorie }}</label>
                        </h2>
                        <hr>
                        <label class="me-3">Preis:{{ $renderData['Geschirr']->preis }}</label>

                        <p class="mt-3"><b> Beschreibung:</b> <br>{{ $renderData['Geschirr']->beschreibung }}</br></p>
                        <hr>
                        <div class="rating">
                           @php
                               $sum= number_format($bewertung_value)
                            @endphp
                            @for($i=1; $i<=$sum; $i++)
                            <i class="fas fa-star check"></i>
                            @endfor
                            @for($j= $sum+1; $j<=5; $j++)
                            <i class="fas fa-star"></i>
                            @endfor
                            <span>ingsgesamt haben <b> {{ $bewertung->count() }} </b> Benutzer das Produkt bewertet </span>
                        </div>
                        @if($renderData['Geschirr']->anzahl>0)
                        <label class="badge bg-success">vorhanden</label>
                        @else<label class="badge bg-danger"> Nicht mehr vorhanden</label>
                        @endif
                <div class="row mt-2">
                    <div class="col-md-2">
                        <input type="hidden" value="{{ $renderData['Geschirr']->id }}" id="geschirr_id">
                        <label for="menge">{{ __('Menge') }}</label>
                        <div class="input-group text-center mb-3">

                            <button class="input-group-text" id="decrement-btn">-</button>

                            <input type="text" name="menge " class="form-control text-center" id="menge" value="1">
                            <button class="input-group-text" id="increment-btn" >+</button>

                        </div>
                    </div>
                </div>
                    <div class="col-md-9">
                        <br>
                        <button type="button" class="btn btn-primary me-3 float-start" id="warenkrop">In Warenkorp Hinzufügen<i class="fas fa-shopping-cart"></i></button>
                    </div>

                    <!--Bewertung-->
                    <hr>
                   <!-- Button trigger modal -->
<!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                   Bewertung abgeben!
                </button>
    </div>
</div>
</div>
</div>
@include('WarenkorpViews.warenkrophinzufuegen')
@include('ArtikelViews.counter')
@endsection
