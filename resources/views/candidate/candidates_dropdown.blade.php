@foreach($input as $candidate)
<option value={{$candidate->id}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
@endforeach
