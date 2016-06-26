@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Create a candidate</h2>
  <form class="form-horizontal" role="form" action="{{ url('/create') }}" method="POST">

    <!-- first name -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter first name" id = "first_name">
      </div>
    </div>

    <!-- last name -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="last_name">Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter last name" id = "last_name">
      </div>
    </div>

    <!-- position -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="position">Position</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter position" id = "position">
      </div>
    </div>


    <!-- major -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="major">Major</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter major" id = "major">
      </div>
    </div>

    <!-- graduation year -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="major">Graduation Year</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" placeholder="Enter graduation year" id = "graduation_year">
      </div>
    </div>

    <!-- description -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description</label>
      <div class="col-sm-10">
      <textarea class="form-control" rows="4" placeholder="Enter description" id="description"></textarea>
      </div>
    </div>

    <!-- create -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Create</button>
      </div>
    </div>
  </form>
</div>

@endsection
