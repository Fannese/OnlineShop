@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="card shadow" >
        <div class="card-header bg-primary">{{ __('Orders Details') }}</div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                  <tr class="table-primary">
                      <th>Id</th>
                      <th>User_Id</th>
                      <th>Vorname</th>
                      <th>Nachname</th>
                      <th>Email</th>
                      <th>Straße</th>
                      <th>Plz</th>
                      <th>Land</th>
                      <th>Stadt</th>
                      <th>Totalpreis</th>
                      <th>Bezahl_Methode</th>
                    </thead>
                  </tr>
                  @foreach($Orders as $order)
                      <tr  class="table-success">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->vorname }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->straße }}</td>
                        <td>{{ $order->plz }}</td>
                        <td>{{ $order->stadt }}</td>
                        <td>{{ $order->land }}</td>
                        <td>{{ $order->totalpreis }}</td>
                        <td>{{ $order->zahlung_methode }}</td>



                          @endforeach
                      </tr>
                </table>
              </div>

        </div>
    </div>
</div>
@endsection
