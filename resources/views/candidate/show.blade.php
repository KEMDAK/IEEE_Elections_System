@extends('layouts.app')

@section('content')
<div class = "container">
  <div class="row">
      <div class="col-md-12" id = "profile-pic">
          <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="160">
      </div>
  </div>

    <div class="row col-md-12">
    <table class="table table-candidate-information">
        <tbody>
          <tr>
            <td>Name</td>
            <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
          </tr>
          <tr>
            <td>Major</td>
            <td>{{$candidate->major}}</td>
          </tr>
          <tr>
            <td>Graduation Year</td>
            <td>{{$candidate->graduation_year}}</td>
          </tr>
          <tr>
            <td>Applying to</td>
            <td>{{$candidate->position}}'s position</td>
          </tr>
        </tbody>
    </table>
  </div>

  <div class="row col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">More to know</div>
      <div class="panel-body">{{$candidate->description}}</div>
    </div>
  </div>
</div>
@endsection
