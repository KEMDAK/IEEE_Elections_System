@extends('layouts.app')

@section('content')
<div class="container" id = "welcome">
    <h1 class = "row">
      <span class "col-md-12">
        IEEE GUC
      </span>
    </h1>

    <h5 class = "row">
      <span class "col-md-12">
        Upgrading Humanity!
      </span>
    </h5>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/vote') }}"><button type="button" class="btn btn-info">Vote</button></a>
        <span class "col-md-12">
    </div>
</div>
@endsection
