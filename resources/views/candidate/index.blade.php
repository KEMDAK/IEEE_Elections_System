@extends('layouts.app')

@section('content')

<div class = "container">

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">President</span>
    </div>

    <!-- candidates for president's position pictures and names-->
    @foreach ($presidents as $candidate)
      @unless(strcmp($candidate->position,'Empty Position') == 0)
        <div class="candidate-pic">
            <a href = {{ url('candidate', $candidate->id)}}>
              <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
              <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
            </a>
        </div>
      @endunless
    @endforeach
  </div>

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">Vice President</span>
    </div>

    <!-- candidates for vice president's position pictures and names-->
    @foreach ($vice_presidents as $candidate)
      @unless(strcmp($candidate->position,'Empty Position') == 0)
        <div class="candidate-pic">
          <a href = {{ url('candidate', $candidate->id)}}>
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
          </a>
        </div>
      @endunless
    @endforeach
  </div>

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">Secretary</span>
    </div>

    <!-- candidates for secratory's position pictures and names-->
    @foreach ($secratories as $candidate)
      @unless(strcmp($candidate->position,'Empty Position') == 0)
        <div class="candidate-pic">
          <a href = {{ url('candidate', $candidate->id)}}>
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
          </a>
        </div>
      @endunless
    @endforeach
  </div>

  <div class="row">
    <div class="row position">
      <span class=" col-md-3 label label-primary">Treassurer</span>
    </div>

    <!-- candidates for treasurer's position pictures and names-->
    @foreach ($treasurers as $candidate)
      @unless(strcmp($candidate->position,'Empty Position') == 0)
        <div class="candidate-pic">
          <a href = {{ url('candidate', $candidate->id)}}>
            <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
            <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
          </a>
        </div>
      @endunless
    @endforeach
  </div>

</div>

@endsection
