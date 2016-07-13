@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class = "row">
      <span class "col-md-12">
        Admin Panel
      </span>
    </h1>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/voters') }}"><button type="button" class="btn btn-primary">Voters List</button></a>
        </span>
    </div>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/candidates') }}"><button type="button" class="btn btn-primary">Candidates List</button></a>
        </span>
    </div>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/admin/config') }}"><button type="button" class="btn btn-primary">Elections config</button></a>
        </span>
    </div>

    @if(strcmp(App\Configuration::where('name', 'results')->first()->value, "") == 0)
    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/vote/results_O') }}"><button type="button" class="btn btn-primary">Official Results</button></a>
        </span>
    </div>
    @endif

</div>
@endsection
