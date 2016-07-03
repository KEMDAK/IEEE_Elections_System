@extends('layouts.app')

@section('content')

<div class="container">
    <center>

        <div class="row">
            <img src="img/elections_c.png" alt = "elections" width="100%">
        </div>

        <br><br>

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
    </center>
</div>
@endsection
