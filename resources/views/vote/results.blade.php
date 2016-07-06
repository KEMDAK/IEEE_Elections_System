@extends('layouts.app')

@section('content')
  <div class="container">

    <div class = "row">
      <h2>Results :D</h2>
    </div>

    <!-- chairman -->
    <?php
      $candidates = $presidents;
      $id = "chairman-votes";
      $position = "Chairman";
      $max = $max_president;
     ?>
    @include('vote.results_partial', compact('max', 'candidates','position', 'id'))

    <!-- vice chairman -->
    <?php
      $candidates = $vice_presidents;
      $id = "vice_chairman-votes";
      $position = "Vice Chairman";
      $max = $max_vice_president;
     ?>
    @include('vote.results_partial', compact('max','candidates','position', 'id'))

    <!-- secretary -->
    <?php
      $candidates = $secretaries;
      $id = "secretary-votes";
      $position = "Secretary";
      $max = $max_secretary;
     ?>
    @include('vote.results_partial', compact('max','candidates','position', 'id'))

    <!-- treasurer -->
    <?php
      $candidates = $treasurers;
      $id = "treasurer-votes";
      $position = "Treasurer";
      $max = $max_treasurer;
     ?>
    @include('vote.results_partial', compact('max','candidates','position', 'id'))

  </div>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script>
  function progress(percent, $element) {
    $element.animate({ width: percent }, 700);
  };

  $(document).ready( function() {

    var chairman_votes = "60%";
    progress(chairman_votes, $('#chairman-votes'));

    var vice_chairman_votes = "40%";
    progress(vice_chairman_votes, $('#vice_chairman-votes'));

    var secretary_votes = "30%";
    progress(secretary_votes, $('#secretary-votes'));

    var treasurer_votes = "70%";
    progress(treasurer_votes, $('#treasurer-votes'));
  });

  </script>

@endsection
