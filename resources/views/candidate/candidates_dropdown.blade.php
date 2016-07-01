@foreach($input as $candidate)
  @if(strcmp($candidate->first_name,'Empty') == 0 && strcmp($canididate->last_name,'Position'))
    <option value='Empty Position'>I won't vote for this position</option>
  @else
    <option value={{$candidate->id}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
  @endif
@endforeach
