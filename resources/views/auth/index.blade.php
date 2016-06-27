@extends('layouts.app')

@section('content')
<div class = "container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$user->first_name}} {{$user->last_name}}</td>
          <td>{{$user->email}}</td>
          <td><button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">
      <span class "col-md-12">
        <a href="{{ url('cre') }}"><button type="button" class="btn btn-info">Add</button></a>
      <span class "col-md-12">
  </div>
</div>
@endsection
