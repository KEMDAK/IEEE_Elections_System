@extends('layouts.app')

@section('content')
<div class = "container">
    @if (count($candidates) === 4)
      <center>
          <h1>No Candidates in the database currently</h1>
      </center>
    @else
      <h2>Accepted</h2>
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
                @if($candidate->status == 1 && !(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0))
                  <tr>
                      <td>{{$candidate->ieee_membership_id}}</td>
                      <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                      <td>{{$candidate->position}}</td>
                      <td>
                          <form class="form-inline" action="{{ url('candidate/'.$candidate->user_id) }}" method="POST">
                              <a href = {{ url('candidate', $candidate->id)}}>
                                  <button type="button" class="btn btn-primary">
                                      View
                                  </button>
                              </a>

                              {{ method_field('DELETE') }}
                              <button type="submit" id="delete-task-{{ $candidate->user_id }}" class="btn btn-danger">
                                  <i class="fa fa-btn fa-trash"></i>Delete
                              </button>
                          </form>
                      </td>
                  </tr>
                @endif
              @endforeach
          </tbody>
      </table>

      <h2>Pending</h2>
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
                @if($candidate->status == 0 && !(strcmp($candidate->first_name,'Empty') == 0 && strcmp($candidate->last_name,'Position') == 0))
                  <tr>
                      <td>{{$candidate->ieee_membership_id}}</td>
                      <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                      <td>{{$candidate->position}}</td>
                      <td>
                          <form action="{{ url('candidate/'.$candidate->user_id) }}" method="POST">
                              <a href = {{ url('candidate', $candidate->id)}}>
                                  <button type="button" class="btn btn-primary">
                                      View
                                  </button>
                              </a>

                              <a href = {{ url('candidate/accept', $candidate->id) }}>
                                  <button type="button" id="accept-task-{{ $candidate->id }}" class="btn btn-success">
                                      Accept
                                  </button>
                              </a>

                              {{ method_field('DELETE') }}
                              <button type="submit" id="delete-task-{{ $candidate->user_id }}" class="btn btn-danger">
                                  <i class="fa fa-btn fa-trash"></i>Delete
                              </button>
                          </form>
                      </td>
                  </tr>
                @endif
              @endforeach
          </tbody>
      </table>
    @endif
</div>
@endsection
