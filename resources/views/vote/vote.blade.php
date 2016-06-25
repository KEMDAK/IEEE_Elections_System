@extends('layouts.app')

@section('content')
<div class = "container">
  <form action="voted" method="POST">
    <!-- candidates for president's position picture and info-->
    @foreach($presidents as $candidate)
      <div class="row">
        <div class="col-md-3 candidate-info">
          <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="160">
        </div>
        <div class="col-md-9 candidate-info">
          Name: {{$candidate->first_name}} {{$candidate->last_name}}
          <br>
          Major: {{$candidate->major}}
          <br>
          Graduation Year: {{$candidate->graduation_year}}
          <br>
          Applied for: {{$candidate->position}}
          <br>
          Description: {{$candidate->description}}
        </div>
      </div>
    @endforeach

  <!-- president's label and dropdown-->
  <div class="row position">
    <span class=" col-md-3 label label-primary">President</span>

    <div class = "col-md-3">
     <select  class="form-control" name="president">
       @foreach($presidents as $candidate)
        <option value={{$candidate->last_name}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
       @endforeach
       <option value='no_vote'>I won't vote for this position</option>
     </select>
   </div>
  </div>

  <!-- candidates for vice president's position picture and info-->
  @foreach($presidents as $candidate)
    <div class="row">
      <div class="col-md-3 candidate-info">
        <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="160">
      </div>
      <div class="col-md-9 candidate-info">
        Name: {{$candidate->first_name}} {{$candidate->last_name}}
        <br>
        Major: {{$candidate->major}}
        <br>
        Graduation Year: {{$candidate->graduation_year}}
        <br>
        Applied for: {{$candidate->position}}
        <br>
        Description: {{$candidate->description}}
      </div>
    </div>
  @endforeach


  <!-- vice president's label and dropdown -->
  <div class="row position">
    <span class=" col-md-3 label label-primary">Vice President</span>

    <div class = "col-md-3">
     <select  class="form-control" name="vice_president">
       @foreach($vice_presidents as $candidate)
        <option value={{$candidate->last_name}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
       @endforeach
       <option value='no_vote'>I won't vote for this position</option>
     </select>
   </div>
  </div>

  <!-- candidates for secretary position picture and info-->
  @foreach($presidents as $candidate)
    <div class="row">
      <div class="col-md-3 candidate-info">
        <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="160">
      </div>
      <div class="col-md-9 candidate-info">
        Name: {{$candidate->first_name}}{{$candidate->last_name}}
        <br>
        Major: {{$candidate->major}}
        <br>
        Graduation Year: {{$candidate->graduation_year}}
        <br>
        Applied for: {{$candidate->position}}
        <br>
        Description: {{$candidate->description}}
      </div>
    </div>
  @endforeach



  <!-- secretary label and dropdown -->
  <div class="row position">
   <span class=" col-md-3 label label-primary">Secretary</span>

   <div class = "col-md-3">
     <select  class="form-control" name="secretary">
        @foreach($secretaries as $candidate)
           <option value={{$candidate->last_name}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
        @endforeach
        <option value='no_vote'>I won't vote for this position</option>
      </select>
    </div>
  </div>

  <!-- candidates for treasurer position picture and info-->
  @foreach($presidents as $candidate)
    <div class="row">
      <div class="col-md-3 candidate-info">
        <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="160">
      </div>
      <div class="col-md-9 candidate-info">
        Name: {{$candidate->first_name}}{{$candidate->last_name}}
        <br>
        Major: {{$candidate->major}}
        <br>
        Graduation Year: {{$candidate->graduation_year}}
        <br>
        Applied for: {{$candidate->position}}
        <br>
        Description: {{$candidate->description}}
      </div>
    </div>
  @endforeach


  <!-- treasurer label and dropdown -->
  <div class="row position">
   <span class=" col-md-3 label label-primary">Treasurer</span>

   <div class = "col-md-3">
     <select  class="form-control" name="treasurer">
        @foreach($treasurers as $candidate)
           <option value={{$candidate->last_name}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
        @endforeach
        <option value='no_vote'>I won't vote for this position</option>
      </select>
    </div>
  </div>

  <!-- vote button -->
  <div class = "row position">
        <input type="submit" value="Submit" class="btn btn-success">
   </div>
</form>
 </div>
@stop
