@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Edit a candidate</h2>

  <!-- the form -->
  {!! Form::model($candidate, ['method' => 'PATCH', 'action' =>['CandidateController@update', $candidate->id]]) !!}
    <div class="form-horizontal" role="form">
      @include('candidate.form')

      <!-- edit -->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Edit</button>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
  @include('errors.list')
</div>

@endsection
