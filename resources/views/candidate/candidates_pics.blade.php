<div class="all-pics">
    @if(count($input) === 1)
    <center>
        <h5>Empty Position</h5>
    </center>
    @else
    @foreach ($input as $candidate)
    @unless(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0)
    <div class="candidate-pic">
        <a href = {{ url('candidate', $candidate->id)}}>
        <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="280">
        <div class="candidate-name"><b>{{$candidate->first_name}} {{$candidate->last_name}}</b></div>
        </a>
    </div>
    @endunless
    @endforeach
    @endif
</div>
