@extends('layouts.app')

@section('content')
<img id = "welcome-img" src="img/leaves.jpg" alt="leaves" width="100%" height="100%">

<div class="container">

    <div class="row">
      <img src="img/elections_light.png" alt = "elections" id = "welcome-logo">
    </div>

<div id = "welcome-comp">
    <h5 class = "row">
      <span class "col-md-12" id = "welcome-text">
        Upgrading Humanity!
      </span>
    </h5>
    <div class="row">
        <span class "col-md-4">
          <a href="{{ url('/job_description') }}"><button type="button" class="btn btn-primary">Job Description</button></a>
        </span>

        <span class "col-md-4">
          <a href="{{ url('/eligibility_conditions') }}"><button type="button" class="btn btn-primary">Eligibility Conditions</button></a>
        </span>

        <span class "col-md-4">
          <a href="{{ url('/election_phases') }}"><button type="button" class="btn btn-primary">How to apply</button></a>
        </span>
    </div>

    @if ((!Auth::guest()) && Auth::user()->isVoter())
    <div class="row">
      <span class "col-md-12">
        <a href="{{ url('/vote') }}"><button type="button" class="btn btn-primary">Vote</button></a>
      </span>
    </div>
    @endif
  </div>

</div>
@endsection
