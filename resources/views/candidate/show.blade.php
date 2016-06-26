@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-md-12 candidate-info">
          <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="160">
      </div>

    </div>
    <div class = "row">
      <div class="col-md-12 candidate-info">
          Name: {{$candidate->first_name}} {{$candidate->last_name}}
          <br>
          Major: {{$candidate->major}}
          <br>
          Graduation Year: {{$candidate->graduation_year}}
          <br>
          Applied for: {{$candidate->position}}
          <br>
          Description: {{$candidate->description}}
      </div>
  </div>
@endsection
