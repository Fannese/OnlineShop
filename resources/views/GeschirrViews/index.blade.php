@extends('layouts.adminlte')
@section('content')
<div class="content">
    <div class="container-fluid">


<div class="row">
    <div class="card mx-auto">
    <div class="card card-success">

            <div class="card-header">


            <a href="{{ route('Geschirr.create') }}" class="float-right"> Hinzufügen </a>
        </div>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

<div class="card-body">
        <table id="example1" class="display nowrap" cellspacing="0" width="100%" >
            <thead>
                <tr>
                  <th style="width: 100px" >id</th>
                  <th style="width: 100px">Name</th>
                  <th style="width: 100px">Bild</th>
                  <th style="width: 100px">Beschreibung</th>
                  <th style="width: 100px">Preis</th>

                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>


    </div>
</div>
</div>
</div>
</div>

@endsection
