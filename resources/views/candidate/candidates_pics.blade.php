<div class="all-pics">
  @foreach ($input as $candidate)
    @unless(strcmp($candidate->first_name,'Empty') == 0 && strcmp($canididate->last_name,'Position'))
      <div class="candidate-pic">
        <a href = {{ url('candidate', $candidate->id)}}>
          <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
          <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
        </a>
      </div>
    @endunless
  @endforeach
</div>
