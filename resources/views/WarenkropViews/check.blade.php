@extends('layouts.adminlte')
@section('content')

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-7" >
            <div class="card">
            <div class="card-body">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="vorname" class="col-md-4 col-form-label text-md-right">{{ __('Vorname') }}</label>

                            <div class="col-md-6">
                                <input id="vorname" type="text" placeholder="Gibt Vorname" class="form-control @error('vorname') is-invalid @enderror" name="vorname" value="{{ old('vorname') }}" required autocomplete="vorname" autofocus>

                                @error('vorname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Gibt name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Gibt Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="straße" class="col-md-4 col-form-label text-md-right">{{ __('Straße') }}</label>

                            <div class="col-md-6">
                                <input id="straße" type="text" placeholder="Gibt Strasse"  class="form-control @error('straße') is-invalid @enderror" name="straße" value="{{ old('straße') }}" required autocomplete="straße">

                                @error('straße')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="plz" class="col-md-4 col-form-label text-md-right">{{ __('PLZ') }}</label>

                            <div class="col-md-6">
                                <input id="plz" type="integer" placeholder="Gibt Postlerzahl"  class="form-control @error('plz') is-invalid @enderror" name="plz" value="{{ old('plz') }}" required autocomplete="plz" autofocus>

                                @error('plz')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stadt" class="col-md-4 col-form-label text-md-right">{{ __('Stadt') }}</label>

                            <div class="col-md-6">
                                <input id="stadt" type="text" placeholder="Gibt Stadt"  class="form-control @error('stadt') is-invalid @enderror" name="stadt" value="{{ old('stadt') }}" required autocomplete="stadt" autofocus>

                                @error('stadt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="land" class="col-md-4 col-form-label text-md-right">{{ __('Land') }}</label>

                            <div class="col-md-6">
                                <input id="land" type="text" placeholder="Gibt Land"  class="form-control @error('land') is-invalid @enderror" name="land" value="{{ old('land') }}" required autocomplete="land" autofocus>

                                @error('land')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephon" class="col-md-4 col-form-label text-md-right">{{ __('Telephon') }}</label>

                            <div class="col-md-6">
                                <input id="telephon" type="integer" placeholder="Gibt Telephonnummer"  class="form-control @error('telephon') is-invalid @enderror" name="telephon" value="{{ old('telephon') }}" required autocomplete="telephon">

                                @error('telephon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h6> Show </h6>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Menge</th>
                            <th>Preis</th>
                        </tr>
                    </thead>

                    @foreach($WareItems as $wareItems)
                    <tr>
                        <td>{{ $wareItems->geschirrzugriff->name }}</td>
                        <td>{{ $wareItems->menge }}</td>
                        <td> {{ $wareItems->geschirrzugriff->preis }}</td>
                    </tr>

                    @endforeach


                </table>
            </div>
        </div>
    </div>
</div>
       </div>
                @endsection
