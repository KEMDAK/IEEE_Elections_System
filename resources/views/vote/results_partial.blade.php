<div class = "row">
    <h3>
        {{ $position }}
    </h3>
</div>

<div class="candidates_results">
    <div class = "row">

        <div class = "col-md-1 col-xs-1">
            <img class = "results-pic" src = {{url( $winner->image_url) }} alt = "winner" width="50px" height="50px">
        </div>

        <div class = "col-md-1 col-md-offset-0 col-xs-offset-1 col-xs-3" style="font-size: 15px; padding-top: 4px">
            {{ $winner->first_name }} {{ $winner->last_name }}
        </div>

        <div class="progress">
            <div class="progress-bar" role="progressbar"
            aria-valuemin="0" aria-valuemax="100" id = {{ $id }}></div>
        </div>
    </div>
</div>
