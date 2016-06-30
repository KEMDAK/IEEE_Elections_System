@extends('layouts.app')

@section('content')
<div class = "container">
    @if (count($candidates) === 0)
      <center>
          <h1>No Candidates in the database currently</h1>
      </center>
    @else
      <h5>Accepted</h5>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>IEEE Membership ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Options</th>
              </tr>
          </thead>
          <tbody>
              @foreach($candidates as $candidate)
                @if($candidate->status === 0)
                  <tr>
                      <td>{{$candidate->ieee_membership_id}}</td>
                      <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                      <td>{{$candidate->position}}</td>
                      <td>
                        <a href = {{ url('candidate', $candidate->id)}}>
                          <button class="btn btn-primary">
                            View
                          </button>
                        </a>]

                        <button class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                      </td>
                  </tr>
                @endif
              @endforeach
          </tbody>
      </table>

      <h5>Pending</h5>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>IEEE Membership ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Options</th>
              </tr>
          </thead>
          <tbody>
              @foreach($candidates as $candidate)
                @if($candidate->status === 0)
                  <tr>
                      <td>{{$candidate->ieee_membership_id}}</td>
                      <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                      <td>{{$candidate->position}}</td>
                      <td>
                          <a href = {{ url('candidate', $candidate->id)}}>
                            <button class="btn btn-primary">
                              View
                            </button>
                          </a>

                          <button class="btn btn-success">
                              Accept
                          </button>

                          <button class="btn btn-danger">
                              <i class="fa fa-btn fa-trash"></i>Delete
                          </button>
                      </td>
                  </tr>
                @endif
              @endforeach
          </tbody>
      </table>
    @endif
</div>
@endsection
