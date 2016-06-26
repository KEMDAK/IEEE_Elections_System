@extends('layouts.app')

@section('content')

<div class = "container">

    <!-- candidates for president's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for President's position</div>
      <div class="panel-body">
        <?php $input = $presidents ?>
        @include('candidate.candidates_pics',compact('input'))
      </div>
    </div>

    <!-- candidates for vice president's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for Vice President's position</div>
      <div class="panel-body">
        <?php $input = $vice_presidents ?>
        @include('candidate.candidates_pics',compact('vice_presidents',$input))
      </div>
    </div>

    <!-- candidates for secratory's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for Secratory's position</div>
      <div class="panel-body">
        <?php $input = $secratories ?>
        @include('candidate.candidates_pics', compact('secratories','input'))
      </div>
    </div>

    <!-- candidates for treasurer's position pictures and names-->
    <div class="panel panel-default">
      <div class="panel-heading">Applying for Treassurer's position</div>
      <div class="panel-body">
        <?php $input = $treasurers ?>
        @include('candidate.candidates_pics', compact('treasurers', 'input'))
      </div>
    </div>

</div>

@endsection
