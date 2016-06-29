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
      <div class="panel-body">{{$candidate->description}}once upon a time I was there and
         I didn't like it there but I didn't know what to do the get
         out of there so after some amout of time I became no longer
          there and IDK how did that happen... end of story... let's
           go now or you with choclate flavor</div>
    </div>
  </div>
</div>
@endsection
