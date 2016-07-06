@extends('layouts.app')

@section('content')
  <div class="container">

    <!-- chairman -->
    <?php
      $candidates = $presidents;
      $id = "chairman-votes";
      $position = "Chairman";
      $max = $max_president;
      $votes = $votes_presidents;
     ?>
    @include('vote.results_partial', compact('max', 'candidates','position', 'votes', 'id'))

    <!-- vice chairman -->
    <?php
      $candidates = $vice_presidents;
      $id = "vice_chairman-votes";
      $position = "Vice Chairman";
      $max = $max_vice_president;
      $votes = $votes_vice_presidents;
     ?>
    @include('vote.results_partial', compact('max','candidates','position', 'votes', 'id'))

    <!-- secretary -->
    <?php
      $candidates = $secretaries;
      $id = "secretary-votes";
      $position = "Secretary";
      $max = $max_secretary;
      $votes = $votes_secretaries;
     ?>
    @include('vote.results_partial', compact('max','candidates','position', 'votes', 'id'))

    <!-- treasurer -->
    <?php
      $candidates = $treasurers;
      $id = "treasurer-votes";
      $position = "Treasurer";
      $max = $max_treasurer;
      $votes = $votes_treasurers;
     ?>
    @include('vote.results_partial', compact('max','candidates','position', 'votes', 'id'))

  </div>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script>
  function progress(percent, $element) {
    $element.animate({ width: percent }, 700);
  };

  $(document).ready( function() {

    var votes = <?php echo json_encode($votes_presidents); ?>;
    for(var i = 0; i < votes.length; i++){
        var vote = votes[i] * 4;
        var chairman_votes = vote + "%";
        progress(chairman_votes, $('#chairman-votes-' + i));
    }

    votes = <?php echo json_encode($votes_vice_presidents); ?>;
    for(var i = 0; i < votes.length; i++){
        var vote = votes[i] * 4;
        var vice_chairman_votes = vote + "%";
        progress(vice_chairman_votes, $('#vice_chairman-votes-' + i));
    }

    votes = <?php echo json_encode($votes_secretaries); ?>;
    for(var i = 0; i < votes.length; i++){
        var vote = votes[i] * 4;
        var secretary_votes = vote + "%";
        progress(secretary_votes, $('#secretary-votes-' + i));
    }

    votes = <?php echo json_encode($votes_treasurers); ?>;
    for(var i = 0; i < votes.length; i++){
        var vote = votes[i] * 4;
        var treasurer_votes = vote + "%";
        progress(treasurer_votes, $('#treasurer-votes-' + i));
    }

  });

  </script>

@endsection
