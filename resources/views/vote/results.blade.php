@extends('layouts.app')

@section('content')
  <div class="container">

    <div class = "row">
      <h2>Results :D</h2>
    </div>

    <!-- chairman -->
    <?php
      $winner = $president;
      $id = "chairman-votes";
      $position = "Chairman";
     ?>
    @include('vote.results_partial', compact('winner','position', 'id'))

    <!-- vice chairman -->
    <?php
      $winner = $vice_chairman;
      $id = "vice_chairman-votes";
      $position = "Vice Chairman";
     ?>
    @include('vote.results_partial', compact('winner','position', 'id'))

    <!-- secretary -->
    <?php
      $winner = $secretary;
      $id = "secretary-votes";
      $position = "Secretary";
     ?>
    @include('vote.results_partial', compact('winner','position', 'id'))

    <!-- chairman -->
    <?php
      $winner = $treasurer;
      $id = "treasurer-votes";
      $position = "Treasurer";
     ?>
    @include('vote.results_partial', compact('winner','position', 'id'))

  </div>
@endsection
