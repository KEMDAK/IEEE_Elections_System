@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row welcome col-md-12">
        <h1>
          IEEE GUC
        </h1>
    </div>

    <div class = "row welcome col-md-12">
        <h5>
          Upgrading Humanity!
        </h5>
    </div>

    <div class = "row welcome col-md-12">
        <button type="button" class="btn btn-info"><a href="{{ url('/vote') }}">Vote</a></button>
    </div>

  </div>
@endsection
