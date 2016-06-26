@extends('layouts.app')

@section('content')
<div class = "container">
    <form action="{{ url('/vote') }}" method="POST">

      <!-- candidates for president's position pictures and names-->
      <div class="row">
        @foreach ($presidents as $candidate)
          @unless(strcmp($candidate->position,'Empty Position') == 0)
            <div class="candidate-pic">
              <!-- use candidate id instead -->
              <a href="#top">
                <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
                <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
              </a>
            </div>
          @endunless
        @endforeach
      </div>

        <!-- president's label and dropdown-->
        <div class="row position">
            <span class=" col-md-3 label label-primary">President</span>

            <div class = "col-md-3">
                <select  class="form-control" name="president">
                    @foreach($presidents as $candidate)
                    <option value={{$candidate->id}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- candidates for vice president's position pictures and names-->
        <div class="row">
          @foreach ($presidents as $candidate)
            @unless(strcmp($candidate->position,'Empty Position') == 0)
              <div class="candidate-pic">
                <!-- use candidate id instead -->
                <a href="#top">
                  <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
                  <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
                </a>
              </div>
            @endunless
          @endforeach
        </div>

        <!-- vice president's label and dropdown -->
        <div class="row position">
            <span class=" col-md-3 label label-primary">Vice President</span>

            <div class = "col-md-3">
                <select  class="form-control" name="vice_president">
                    @foreach($vice_presidents as $candidate)
                    <option value={{$candidate->id}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- candidates for secretary position pictures and names-->
        <div class="row">
          @foreach ($presidents as $candidate)
            @unless(strcmp($candidate->position,'Empty Position') == 0)
              <div class="candidate-pic">
                <!-- use candidate id instead -->
                <a href="#top">
                  <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
                  <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
                </a>
              </div>
            @endunless
          @endforeach
        </div>

        <!-- secretary label and dropdown -->
        <div class="row position">
            <span class=" col-md-3 label label-primary">Secratory</span>

            <div class = "col-md-3">
                <select  class="form-control" name="secretary">
                    @foreach($secratories as $candidate)
                    <option value={{$candidate->id}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- candidates for treasurer position pictures and names-->
        <div class="row">
          @foreach ($presidents as $candidate)
            @unless(strcmp($candidate->position,'Empty Position') == 0)
              <div class="candidate-pic">
                <!-- use candidate id instead -->
                <a href="#top">
                  <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="300" height="300">
                  <div class="candidate-name">{{$candidate->first_name}} {{$candidate->last_name}}</div>
                </a>
              </div>
            @endunless
          @endforeach
        </div>

        <!-- treasurer label and dropdown -->
        <div class="row position">
            <span class=" col-md-3 label label-primary">Treasurer</span>

            <div class = "col-md-3">
                <select  class="form-control" name="treasurer">
                    @foreach($treasurers as $candidate)
                    <option value={{$candidate->id}}>{{$candidate->first_name}} {{$candidate->last_name}}</option>
                    @endforeach
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
