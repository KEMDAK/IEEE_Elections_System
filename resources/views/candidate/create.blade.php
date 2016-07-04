@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Candidate application</h2>
  <form class="form-horizontal" role="form" action="{{ url('/candidate') }}" method="POST">

    <!-- the form -->

    <!-- personal email -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="personal_email">Email*</label>
        <div class="col-sm-10">
            {!! Form::text('personal_email', null, ['class' => 'form-control', 'placeholder'=>'This will be used for login (gmail is prefered)']) !!}
        </div>
    </div>

    @include('candidate.form')

    <!-- create -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Apply</button>
      </div>
    </div>
  </form>
</div>
@include('errors.list')
@endsection
