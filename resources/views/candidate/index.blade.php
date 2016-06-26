@extends('layouts.app')

@section('content')

<div class = "container">

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">President</span>
    </div>

    <!-- candidates for president's position pictures and names-->
    @foreach ($presidents as $candidate)
      @if(strcmp($candidate->name,'Empty Position'))
        <div class="candidate-pic">
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
        </div>
      @endif
    @endforeach
  </div>

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">President</span>
    </div>

    <!-- candidates for president's position pictures and names-->
    @foreach ($presidents as $candidate)
      @if(strcmp($candidate->name,'Empty Position'))
        <div class="candidate-pic">
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
        </div>
      @endif
    @endforeach
  </div>

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">President</span>
    </div>

    <!-- candidates for president's position pictures and names-->
    @foreach ($presidents as $candidate)
      @if(strcmp($candidate->name,'Empty Position'))
        <div class="candidate-pic">
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
        </div>
      @endif
    @endforeach
  </div>

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">President</span>
    </div>

    <!-- candidates for president's position pictures and names-->
    @foreach ($presidents as $candidate)
      @if(strcmp($candidate->name,'Empty Position'))
        <div class="candidate-pic">
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
        </div>
      @endif
    @endforeach
  </div>

</div>

@endsection
