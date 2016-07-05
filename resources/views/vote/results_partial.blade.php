    <div class = "row">
      <h3>
        {{ $position }}
      </h3>
    </div>

    <div class = "row">

      <div class = "col-md-4">
        <img class = "results-pic" src = {{url( $winner->image_url)}} alt = "winner">
      </div>

      <div class = "col-md-3">
        <h3 class = "results-text">
          {{ $winner->name }}
        </h3>
      </div>

    </div>

    <div class = "row">
      <div class="progress">
        <div class="progress-bar" role="progressbar"
        aria-valuemin="0" aria-valuemax="100" id = {{ $id }}>
        </div>
      </div>
    </div>
