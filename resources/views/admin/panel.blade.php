@extends('layouts.app')

@section('content')
<div class="container" id = "welcome">
    <h1 class = "row">
      <span class "col-md-12">
        Admin Panel
      </span>
    </h1>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/voters') }}"><button type="button" class="btn btn-info">Voters List</button></a>
        <span class "col-md-12">
    </div>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/candidate') }}"><button type="button" class="btn btn-info">Candidates List</button></a>
        <span class "col-md-12">
    </div>
</div>
@endsection
