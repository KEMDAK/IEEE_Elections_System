@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ url('/vote') }}"><button type="button" class="btn btn-info">Vote</button></a>
    </div>
</div>
@endsection
