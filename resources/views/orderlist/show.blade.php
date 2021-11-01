@extends('layouts.adminlte')
@section('content')

    <div class="container-fluid">
            @csrf
        <div class="row">
        <div class="col-md-12" >
            <div class="card">

            <div class="card-body">
                <div class="row">
                <div class="col-md-6 order-details"><h4 class=" card-header bg-primary">{{ __('Shopping Details') }}</h4>
<hr>
                            <label  for="">{{ __('Vorname') }}</label>
                                <div class="border">{{ $orders->vorname }} </div>

                        <label for="">{{ __('Name') }}</label>
                            <div class="border">{{ $orders->name}} </div>

                            <label  for="">{{ __('E-Mail Address') }}</label>
                                <div  class="border">{{ $orders->email }}</div>

                            <label for="">{{ __('Straße') }}</label>
                                <div class="border">{{ $orders->straße }}</div>
                            <label for="">{{ __('PLZ') }}</label>
                                <div class="border">{{ $orders->plz}}</div>
                             <label  for="">{{ __('Stadt') }}</label>
                            <div class="border">{{ $orders->stadt }}</div>
                             <label for="">{{ __('Land') }}</label>
                                <div class="border">{{ $orders->land }} </div>

                            <label for="">{{ __('Telephon') }}</label>
                            <div class="border">{{ $orders->telephon_nummer }}</div>
                        </div>


    <div class="col-md-5">
        <div class="card">
            <div class="card-body">

                <div class="card-header bg-primary">{{ __('Order Details') }}</div>
                <hr>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Bild</th>
                            <th>Menge</th>
                            <th>Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $prods->name }}</td>
                            <td>
                                <figure>
                                    <img src="{{ asset('GeschirrBilder/'. $prods->bild) }}" width="300px" height="200px"   alt="bild" >
                                 </figure>
                             </td>
                    @foreach($orders->oderitems as $order)


                         <td>{{ $order->menge }}</td>
                         <td>{{ $order->preis }}</td>

                    @endforeach

                </tr>
            </tbody>
                </table>
            </div>


            <a href="{{ route('waren') }}" class="btn btn-dark"><i class="fas fa-arrow-circle-left">Zurück</i></a>
        </div>


    </div>
</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 @endsection
