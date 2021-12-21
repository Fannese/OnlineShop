@extends('layouts.adminlte')
@section('content')

<div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                <div class="card-title" style="float-lg-left">{{ __('Produkt ändern') }}</div>
                </div>
                <div class="card-body bg-primary">
                    <form method="post" action="{{ route('Geschirr-update', $Geschirr->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class=" row">
                            <div class="col-md-6 mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $Geschirr->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="bild" class="col-md-4 col-form-label text-md-right">{{ __('Bild') }}</label>
                                <input id="bild" type="file" class="form-control @error('bild') is-invalid @enderror" name="bild"><img src="{{ asset('GeschirrBilder/') }}" width="150px" height="150px" alt="">

                                @error('bild')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="col-md-6 mb-3">

                            <label for="beschreibung">{{ __('Beschreibung') }}</label>
                            <textarea class="form-control" @error('beschreibung') is-invalid @enderror" name="beschreibung" value="{{ old('beschreibung', $Geschirr->beschreibung) }}" required autocomplete="beschreibung" autofocus placeholder="Leave a comment here" id="beschreibung" style="height: 100px"></textarea>


                                @error('beschreibung')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="kategorie" class="col-md-4 col-form-label text-md-right">{{ __('Kategorie') }}</label>

                                <div class="col-md-6">
                                    <input id="kategorie" type="text" class="form-control @error('kategorie') is-invalid @enderror" name="kategorie" value="{{ old('kategorie',$Geschirr->kategorie) }}" required autocomplete="kategorie" autofocus>

                                    @error('kategorie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3" >
                                <label for="preis" class="col-md-4 col-form-label text-md-right">{{ __('Preis') }}</label>


                                    <input id="preis" type="text" class="form-control @error('preis') is-invalid @enderror" name="preis" value="{{ old('preis', $Geschirr->preis) }}" required autocomplete="preis" autofocus>

                                    @error('preis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3"">
                                    <label for="anzahl" class="col-md-4 col-form-label text-md-right">{{ __('Anzahl') }}</label>

                                    <div class="col-md-6">
                                        <input id="anzahl" type="text" class="form-control @error('anzahl') is-invalid @enderror" name="anzahl" value="{{ old('anzahl', $Geschirr->anzahl) }}" required autocomplete="anzahl" autofocus>

                                        @error('anzahl')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        <div class="form-group row mb-0">

                                <button type="button" class="btn btn-secondary float-leftt mt-3 p-3">
                                    {{ __('Speichern') }}
                                </button>

                                <a  href="{{ route('Geschirr-index') }}" class="btn btn-warning mt-3 p-3 ml-2" > Zurück</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
