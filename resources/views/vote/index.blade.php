@extends('layouts.app')

@section('content')
<div class = "container">
    <form action="{{ url('/vote') }}" role="form" method="POST">

      <!-- candidates for president's position pictures and names-->
      <div class="panel panel-default">
        <div class="panel-heading">Applying for President's position</div>
        <div class="panel-body">
          <div class="row">
            <?php $input = $presidents ?>
            @include('candidate.candidates_pics',compact('input'))
          </div>
          <!-- president's label and dropdown-->
          <div class="form-group">
          <div class="row position">
            <span class="col-xs-4 col-md-2 label label-primary">I will choose</span>
            <div class = "col-xs-8 col-md-3">
              <select  class="form-control" name="president">
                <?php $input = $presidents ?>
                @include('candidate.candidates_dropdown', compact('input'))
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>


        <!-- candidates for vice president's position pictures and names-->
        <div class="panel panel-default">
          <div class="panel-heading">Applying for Vice President's position</div>
          <div class="panel-body">
        <div class="row">
          <?php $input = $vice_presidents ?>
          @include('candidate.candidates_pics',compact('input'))
        </div>
        <!-- vice president's label and dropdown -->
        <div class="form-group">
          <div class="row position">
              <span class="col-xs-4 col-md-2 label label-primary">I will choose</span>
              <div class = "col-xs-8 col-md-3">
              <select  class="form-control" name="vice_president">
                <?php $input = $vice_presidents ?>
                @include('candidate.candidates_dropdown', compact('input'))
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>


        <!-- candidates for secretary's position pictures and names-->
        <div class="panel panel-default">
          <div class="panel-heading">Applying for Secretary's position</div>
          <div class="panel-body">
        <div class="row">
            <?php $input = $secretaries ?>
            @include('candidate.candidates_pics', compact('input'))
        </div>
        <!-- secretary label and dropdown -->
        <div class="form-group">
        <div class="row position">
            <span class="col-xs-4 col-md-2 label label-primary">I will choose</span>
            <div class = "col-xs-8 col-md-3">
                <select  class="form-control" name="secretary">
                    <?php $input = $secretaries ?>
                    @include('candidate.candidates_dropdown', compact('input'))
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- candidates for treasurer's position pictures and names-->
        <div class="panel panel-default">
          <div class="panel-heading">Applying for Treassurer's position</div>
          <div class="panel-body">
        <div class="row">
            <?php $input = $treasurers ?>
            @include('candidate.candidates_pics', compact('input'))
        </div>
        <!-- treasurer label and dropdown -->
        <div class="form-group">
        <div class="row position">
            <span class="col-xs-4 col-md-2 label label-primary">I will choose</span>
            <div class = "col-xs-8 col-md-3">
                <select  class="form-control" name="treasurer">
                  <?php $input = $treasurers ?>
                      @include('candidate.candidates_dropdown', compact('input'))
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- vote button -->
        <div class="form-group">
          <div class = "row position">
              <input type="submit" value="Submit" class="btn btn-success">
          </div>
        </div>
    </form>
</div>

@stop
