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

    @if ((!Auth::guest()) && Auth::user()->isVoter())
    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/vote') }}"><button type="button" class="btn btn-info">Vote</button></a>
        </span>
    </div>
    @endif

    <div class="row">
        <span class "col-md-4">
          <a href="{{ url('/job_description') }}"><button type="button" class="btn btn-info">Job Description</button></a>
        </span>

        <span class "col-md-4">
          <a href="{{ url('/eligibility_conditions') }}"><button type="button" class="btn btn-info">Eligibility Conditions</button></a>
        </span>

        <span class "col-md-4">
          <a href="{{ url('/election_phases') }}"><button type="button" class="btn btn-info">How to apply</button></a>
        </span>
    </div>
</div>
@endsection
