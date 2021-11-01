@extends('layouts.adminlte')
@section('content')

    <div class="container-fluid">
            @csrf
        <div class="row">
        <div class="col-md-12" >
            <div class="card">

            <div class="card-header bg-primary">

                    <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                <h4 class="text-white">{{ __('Shopping Update') }}
                <a href="{{ route('Bestellungen.index') }}" class="btn btn-warning text-white float-right"><i class="fas fa-arrow-circle-left">Zurück</i></a>
            </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h4>Shopping Details</h4>
<form action="{{ url('/update', $order->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',  $order->name) }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="vorname" class="col-md-4 col-form-label text-md-right">{{ __('Vorname') }}</label>

                <div class="col-md-6">
                    <input id="vorname" type="text" class="form-control @error('vorname') is-invalid @enderror" name="vorname" value="{{ old('vorname',  $order->vorname) }}" required autocomplete="vorname" autofocus>

                    @error('vorname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="straße" class="col-md-4 col-form-label text-md-right">{{ __('straße') }}</label>

                <div class="col-md-6">
                    <input id="straße" type="text" class="form-control @error('straße') is-invalid @enderror" name="straße" value="{{ old('straße',  $order->straße) }}" required autocomplete="straße" autofocus>

                    @error('straße')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="plz" class="col-md-4 col-form-label text-md-right">{{ __('plz') }}</label>

                <div class="col-md-6">
                    <input id="plz" type="text" class="form-control @error('plz') is-invalid @enderror" name="plz" value="{{ old('plz',  $order->plz) }}" required autocomplete="plz" autofocus>

                    @error('plz')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="stadt" class="col-md-4 col-form-label text-md-right">{{ __('stadt') }}</label>

                <div class="col-md-6">
                    <input id="stadt" type="text" class="form-control @error('stadt') is-invalid @enderror" name="stadt" value="{{ old('stadt',  $order->stadt) }}" required autocomplete="stadt" autofocus>

                    @error('stadt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="land" class="col-md-4 col-form-label text-md-right">{{ __('land') }}</label>

                <div class="col-md-6">
                    <input id="land" type="text" class="form-control @error('land') is-invalid @enderror" name="land" value="{{ old('land',  $order->land) }}" required autocomplete="land" autofocus>

                    @error('land')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="telephon_nummer" class="col-md-4 col-form-label text-md-right">{{ __('telephon_nummer') }}</label>

                <div class="col-md-6">
                    <input id="stadt" type="text" class="form-control @error('stadt') is-invalid @enderror" name="telephon_nummer" value="{{ old('telephon_nummer',  $order->telephon_nummer) }}" required autocomplete="telephon_nummer" autofocus>

                    @error('telephon_nummer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

        </div>



    <div class="col-md-5">
        <div class="card">
            <div class="card-body">

                <h4>{{ __('Order Details') }}</h4>
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
                                    <img src="{{ asset('GeschirrBilder/'.$prods->bild) }}" width="300px" height="200px"   alt="bild" >
                                 </figure>
                             </td>
                    @foreach($order->oderitems as $order)


                         <td>{{ $order->menge }}</td>
                         <td>{{ $order->preis }}</td>

                    @endforeach

                </tr>
            </tbody>
                </table>
            </div>

                    <button type="submit" class="btn btn-success  float-leftt mt-3 p-3">
                        {{ __('Save') }}
                    </button>

        </form>

        </div>


    </div>
</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 @endsection
