@extends('layouts.app')

@section('content')
  <div class = "container">

    <form class="form-horizontal" role="form" action="{{ url('/date') }}" method="POST">
      <div class="form-group">
        {!! Form::label('start','Starting on:', ['class' => 'control-label col-sm-2']) !!}
        <div class = "col-sm-10">
          {!! Form::date('start', null, ['class' => 'form-control col-md-10']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('end','Ending on:', ['class' => 'control-label col-sm-2']) !!}
        <div class = "col-sm-10">
          {!! Form::date('end', null, ['class' => 'form-control col-md-10']) !!}
        </div>
      </div>

      <!-- submit -->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Done</button>
        </div>
      </div>

    </form>

  </div>
@endsection
