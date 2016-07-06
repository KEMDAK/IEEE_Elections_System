<div class = "row">
    <h3>
        {{ $position }}
    </h3>
</div>

<div class="candidates_results">
  @foreach($candidates as $candidate)
    @unless(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name, 'Position') == 0)
    <div class = "row">

        <div class = "col-md-3 col-xs-1">
            <img class = "results-pic" src = {{url( $candidate->image_url) }} alt = "candidate" width="50px" height="50px">
        </div>

        <div class = "col-md-3 col-md-offset-0 col-xs-offset-1 col-xs-3" style="font-size: 15px; padding-top: 4px">
            {{ $candidate->first_name }} {{ $candidate->last_name }}
        </div>

        <?php
          if($candidate->votes === $max){
            $c = "success";

          } else {
            $c = "warning";
          }
        ?>
        
        <div class = "col-md-6">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-{{$c}} active" role="progressbar"
            aria-valuemin="0" aria-valuemax="100" id = {{ $id }}></div>
          </div>
        </div>

      </div>
      @endunless
    @endforeach

</div>
