@extends('layouts.adminlte')
@section('content')

    <div class="container-fluid">
        <div class="card shadow" >
            <div class="card-body">
                @php
                $total=0;
            @endphp
           @foreach($Waren as $waren)
                <div class="row" id="Geschirr_daten">
                     <div class="col-md-2 border-right">
                 <img src="{{ asset('GeschirrBilder/'.$waren->geschirrzugriff->bild) }}" width="300px" height="200px" alt="file_path" >
                    </div>
            <div class="col-md-8" >
                <h3  class="mb-0 bg-dark">{{ $waren->geschirrzugriff->name }}</h3>
                <hr>
                <label class="me-3">Preis:{{ $waren->geschirrzugriff->preis }}</label>
            <div class="col-md-3">

                <input type="hidden"  id="geschirr_id">
                  <label for="anzahl">{{ __('Menge') }}</label>
                <div class="input-group text-center mb-3">
                    <div id="mengeUpdate">
            <button class="input-group-text mengeUpdate" id="decrement-btn">-</button>

            <input type="text" name="anzahl" class="form-control text-center" id="anzahl-input" value="{{ $waren->menge }}">
            <div id="mengeUpdate">
            <button class="input-group-text mengeUpdate" id="increment-btn" >+</button>

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
            @php
                $total+=((int)$waren->geschirrzugriff->preis*(int)$waren->menge);
            @endphp

        </div>
    </div>


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
    @include('WarenkropViews.warenkrophinzufuegen')
    @include('GeschirrViews.counter')
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

     $(document).ready(function() {
    $('#mengeUpdate').click(function (e) {
            e.preventDefault();
            var geschirr_id=  $(this).closest('#Geschirr_daten').find('#geschirr_id').val();
            var menge = $(this).closest('#Geschirr_daten').find('#anzahl-input').val();
            data={
            'geschirr_id': geschirr_id,
            'menge': menge,
        },
            $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            method: "POST",
            url: "update-menge",
            data: data,
            success: function (response) {
               window.location.reload();

            }
        });
        });
    });
</script>
