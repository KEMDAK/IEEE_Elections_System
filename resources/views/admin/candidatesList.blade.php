@extends('layouts.app')

@section('content')
<div class = "container">
    @if (count($candidates) === 0)
    <center>
        <h1>No Candidates in the database currently</h1>
    </center>
    @else
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>IEEE Membership</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidates as $candidate)
            <tr>
                <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                <td>{{$candidate->ieee_membership_id}}</td>
                <td>
                  <button type="submit" class="btn btn-warning" style = margin-left:10px;>
                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Edit
                  </button>
                    <!-- <form action="{{ url('voter/'.$candidate->id) }}" method="POST"> -->
                        <!-- {{ method_field('DELETE') }} -->
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    <!-- </form> -->

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <div class="row">
        <center>
            <span class "col-md-12">
                <a href="{{ url('/candidate/create') }}"><button type="button" class="btn btn-primary">Add a candidate</button></a>
            <span class "col-md-12">
        </center>
    </div>
</div>
@endsection
