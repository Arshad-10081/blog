@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                   <table border="2" align="center" width="700">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Created At</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($users as $user)
                          <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->created_at}}</td>
                              <td>
                                  &nbsp;<a href="index/{{$user->id}}"><button class="btn btn-primary">Edit</button></a>
                                  &nbsp;&nbsp;
                                  <a href="delete/{{$user->id}}"><button class="btn btn-danger">Delete</button></a>
                                  
                              </td>
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
