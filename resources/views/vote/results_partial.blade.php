<div class = "row">
    <h3>
        {{ $position }}
    </h3>
</div>

<?php $i = 0;?>
@foreach($candidates as $candidate)
<div class = "row candidate-progress" style="border: 4px; border-color: green">

    <div class = "col-md-1 col-xs-1">
        <?php if(!(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0)) {?> <a href = {{ url('candidate', $candidate->id)}}> <?php } ?>
            <img class = "results-pic" src = {{url( $candidate->image_url) }} alt = "{{ $candidate->first_name }} {{ $candidate->last_name }}" width="50px" height="50px">
        <?php if(!(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0)) {?> </a> <?php } ?>
    </div>

    <?php
    if(($i < count($votes) && $votes[$i] === $max && ($max != 0 || ($max == 0 && (strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0))))){
        $c = "success";
    } else {
        $c = "warning";
    }
    ?>

    <?php if(!(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0)) {?> <a href = {{ url('candidate', $candidate->id)}}> <?php } ?>
        <div class = "col-md-2 col-md-offset-0 col-xs-offset-1 col-xs-4" style="font-size: 13px; padding-top: 15px; font-weight: bold; color: black;<?php if(strcmp($c, 'success') == 0) { ?> color: green; <?php } ?>" >
            {{ $candidate->first_name }} {{ $candidate->last_name }}
        </div>
        <?php if(!(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0)) {?> </a> <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-{{$c}} active" role="progressbar" style="font-size: 25px; padding-top: 14px"
            aria-valuemin="0" aria-valuemax="100" id = {{ $id . '-' . $i }}><?php if(strcmp($votes[$i], '0') != 0){ ?>{{ $votes[$i] }} <?php } ?></div>
        </div>

    </div>
<?php $i++; ?>
@endforeach
