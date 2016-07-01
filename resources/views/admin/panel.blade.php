@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class = "row">
      <span class "col-md-12">
        Admin Panel
      </span>
    </h1>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/voters') }}"><button type="button" class="btn btn-info">Voters List</button></a>
        </span>
    </div>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/candidates') }}"><button type="button" class="btn btn-info">Candidates List</button></a>
        </span>
    </div>
</div>
@endsection
