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

    <!-- treasurer -->
    <?php
      $winner = $treasurer;
      $id = "treasurer-votes";
      $position = "Treasurer";
     ?>
    @include('vote.results_partial', compact('winner','position', 'id'))

  </div>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script>
  function progress(percent, $element) {
    $element.animate({ width: percent }, 700);
  }

  $(document).ready( function() {
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);

    $('#flash-overlay-modal').modal();

    var chairman_votes = "60%";
    progress(chairman_votes, $('#chairman-votes'));

    var vice_chairman_votes = "60%";
    progress(vice_chairman_votes, $('#vice_chairman-votes'));

    var secretary_votes = "60%";
    progress(secretary_votes, $('#secretary-votes'));

    var treasurer_votes = "60%";
    progress(treasurer_votes, $('#treasurer-votes'));

  });
  </script>

@endsection
