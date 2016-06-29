@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Create a candidate</h2>
  <form class="form-horizontal" role="form" action="{{ url('/create') }}" method="POST">

    <!-- the form -->
    @include('candidate.form')

    <!-- create -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Create</button>
      </div>
    </div>
  </form>
</div>
@include('errors.list')
@endsection
