@extends('layouts.app')

@section('content')
<div class = "container">

    <form class="form-horizontal" role="form" action="{{ url('/admin/config') }}" method="POST">
        <div class="form-group">
            {!! Form::label(null,'Candidate applications:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}

            {!! Form::label('applicationsFrom','From:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3 col-xs-12">
                {!! Form::date('applicationsFrom', $applicationsFrom, ['class' => 'form-control col-md-3 col-xs-12']) !!}
            </div>

            {!! Form::label('applicationsTo','To:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3 col-xs-12">
                {!! Form::date('applicationsTo', $applicationsTo, ['class' => 'form-control col-md-3 col-xs-12']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label(null,'Profile Editing:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}

            {!! Form::label('deliverablesFrom','From:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3 col-xs-12">
                {!! Form::date('deliverablesFrom', $deliverablesFrom, ['class' => 'form-control col-md-3 col-xs-12', 'disabled' => 'disabled']) !!}
            </div>

            {!! Form::label('deliverablesTo','To:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3">
                {!! Form::date('deliverablesTo', $deliverablesTo, ['class' => 'form-control col-md-3 col-xs-12']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label(null,'Elections:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}

            {!! Form::label('electionsFrom','From:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3 col-xs-12">
                {!! Form::date('electionsFrom', $electionsFrom, ['class' => 'form-control col-md-3 col-xs-12']) !!}
            </div>

            {!! Form::label('electionsTo','To:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3 col-xs-12">
                {!! Form::date('electionsTo', $electionsTo, ['class' => 'form-control col-md-3 col-xs-12']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label(null,'Results:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}

            {!! Form::label('results','Enabled:', ['class' => 'control-label col-sm-2 col-xs-12']) !!}
            <div class = "col-sm-3 col-xs-12">
                {!! Form::checkbox('results', 'true', $results, ['class' => 'form-control col-md-3 col-xs-12']); !!}
            </div>
        </div>

        <!-- submit -->
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-success">Done</button>
            </div>
        </div>
    </form>

  @include('errors.list')
</div>
@endsection
