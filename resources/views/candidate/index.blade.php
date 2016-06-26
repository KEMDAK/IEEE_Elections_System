@extends('layouts.app')

@section('content')

<div class = "container">

    <!-- candidates for president's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for President's position</div>
      <div class="panel-body">
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
    </div>

    <!-- candidates for vice president's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for Vice President's position</div>
      <div class="panel-body">
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
</div>

    <!-- candidates for secratory's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for Secratory's position</div>
      <div class="panel-body">
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
</div>

    <!-- candidates for treasurer's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for Treassurer's position</div>
      <div class="panel-body">
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
</div>

@endsection
