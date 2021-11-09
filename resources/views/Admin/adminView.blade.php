@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="card shadow" >
        <div class="card-header bg-primary">{{ __('Orders List') }}</div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                  <tr class="table-primary">

                      <th>User_Id</th>
                      <th>Totalpreis</th>
                      <th>Sendung Nummer</th>
                      <th>Action</th>
                    </thead>
                  </tr>
                  @foreach($Orders as $order)
                      <tr  class="table-success">

                        <td>{{ $order->user_id }}</td>

                        <td>{{ $order->totalpreis }}</td>
                        <td>{{ $order->sendung_nr }}</td>

                        <td>
                            <a href="{{ url('/admin/view-orders/'.$order->id) }}" class="btn btn-primary"> View </a>
                        </td>

                          @endforeach
                      </tr>
                </table>
              </div>

        </div>
    </div>
</div>
@endsection
