@extends('layouts.adminlte')
@section('content')

    <div class="container-fluid"  style="background-color: blue">
        <div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <form method="POST" action="{{ route('order') }}">
            @csrf
        <div class="row">
        <div class="col-md-7" >
            <div class="card">
            <div class="card-body"  style="background-color: blue">
                @php
                    $preistotal = 0;

                @endphp
                <div class="card-header bg-primary">{{ __('Angaben') }}</div>

                <div class="card-body bg-dark">

                        <div class="form-group row">
                            <label for="vorname" class="col-md-4 col-form-label text-md-right">{{ __('Vorname') }}</label>

                            <div class="col-md-6">
                                <input id="vorname" type="text" placeholder="Gibt Vorname" class="form-control vorname @error('vorname') is-invalid @enderror" name="vorname" value="{{ old('vorname') }}" required autocomplete="vorname" autofocus>

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
                                <input id="name" type="text" placeholder="Gibt name"  class="form-control name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" placeholder="Gibt Email" class="form-control email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="straße" type="text" placeholder="Gibt Strasse"  class="form-control straße @error('straße') is-invalid @enderror" name="straße" value="{{ old('straße') }}" required autocomplete="straße">

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
                                <input id="plz" type="integer" placeholder="Gibt Postlerzahl"  class="form-control plz @error('plz') is-invalid @enderror" name="plz" value="{{ old('plz') }}" required autocomplete="plz" autofocus>

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
                                <input id="stadt" type="text" placeholder="Gibt Stadt"  class="form-control stadt @error('stadt') is-invalid @enderror" name="stadt" value="{{ old('stadt') }}" required autocomplete="stadt" autofocus>

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
                                <input id="land" type="text" placeholder="Gibt Land"  class="form-control land @error('land') is-invalid @enderror" name="land" value="{{ old('land') }}" required autocomplete="land" autofocus>

                                @error('land')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephon_nummer" class="col-md-4 col-form-label text-md-right">{{ __('Telephon') }}</label>

                            <div class="col-md-6">
                                <input id="telephon_nummer" type="integer" placeholder="Gibt Telephonnummer"  class="form-control telephon_nummer @error('telephon_nummer') is-invalid @enderror" name="telephon_nummer" value="{{ old('telephon_nummer') }}" required autocomplete="telephon_nummer">

                                @error('telephon_nummer')
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

                <div class="card-header bg-primary">{{ __('Order Details') }}</div>
                <hr>
                @if($WareItems->count()>0)
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
                        <td> {{ ((int)$wareItems->geschirrzugriff->preis * (int)$wareItems->menge )}}</td>

                        <h6> Total Summe <span class="float-end">{{ $preistotal+=((int)$wareItems->geschirrzugriff->preis * (int)$wareItems->menge ) }}</span></h6>
                    </tr>
                    @endforeach
                </table>
<hr>
                <input type="hidden" name="zalung_methode" value="COD">
                        <button type="submit" class="btn btn-success w-100 mb-2">
                            Order | COD
                        </button>
                        <button type="button" class="btn btn-primary w-100 mb-2 razorpay_btn"> zahlen mit Razorpay </button>

                        <div id="paypal-button-container"></div>
            </div>
            @else
            <h4 class="text-center">Kein Produkt vorhanden</h4>
            @endif
        </form>
            <a href="{{ route('waren') }}" class="btn btn-dark"><i class="fas fa-arrow-circle-left">Zurück</i></a>
        </div>


    </div>
</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <script src="https://www.paypal.com/sdk/js?client-id=ARt3bJcllFh-eoF63scl6nYiAJLBgmoZkdzIK2qTuDrbNF5mRSBl34Ou9SpSSVylpfW0xu_bIp_BrHbx"></script>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>

paypal.Buttons({
  createOrder: function(data, actions) {
    // This function sets up the details of the transaction, including the amount and line item details.
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '{{  $preistotal }}'

        }
      }]
    });
  },

  onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    return actions.order.capture().then(function(details) {

      // This function shows a transaction success message to your buyer.
      //alert('Transaction completed by ' + details.payer.name.given_name);
      var vorname=$('.vorname').val();
      var name=$('.name').val();
      var email=$('.email').val();
      var straße=$('.straße').val();
      var plz=$('.plz').val();
      var stadt=$('.stadt').val();
      var land=$('.land').val();
      var telephon_nummer=$('.telephon_nummer').val();
      $.ajax({
          method: "post",
          url: "/payment",
          data: {
              'vorname': vorname,
              'name': name,
              'email': email,
              'straße': straße,
              'plz': plz,
              'stadt': stadt,
              'land':land,
              'telephon_nummer':telephon_nummer,
              'zalung_methode': "Paypal",
              'zalung_id':response.details.id,
          },
          success: function (response) {

              swal(response.status);
              windows.location.href="/my-orders";

          }
      });

    });

  }

}).render('#paypal-button-container');


</script>
@include('WarenkorpViews.razorpayement')
                @endsection
