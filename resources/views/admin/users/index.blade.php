@extends('layouts.app')

@section('content')
<div class="container_users_index">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Liste des utilisateurs</div>
        <div class="card-body">
            <table class="table table-sm table-light">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                </tr>
                 @endforeach
              </tbody>
             
            </table>
          
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection