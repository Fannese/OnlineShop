@extends('layouts.adminlte')
@section('content')
<div class="container-fluid">
    <div class="card shadow" >
        <div class="card-header bg-primary">{{ __(' Users Liste') }}</div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                  <tr class="table-primary">

                      <th>User_Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                    </thead>
                  </tr>
                  @foreach($users as $user)
                      <tr  class="table-success">

                        <td>{{ $user->id }}</td>

                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_as == 'admin'? 'Admin':'User'}}</td>

                          @endforeach
                      </tr>
                </table>
              </div>

        </div>
    </div>
</div>
@endsection
