@extends('layouts.app')

@section('content')
<div class = "container">
    @if (count($users) === 0)
    <center>
        <h1>No Voters in the database currently</h1>
    </center>
    @else
    <table class="table table-hover">
        <thead>
            <tr>
                <th>IEEE Membership</th>
                <th>Email</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->ieee_membership_id}}</td>
                <td>{{$user->email}}</td>
                @if($user->active === '1')
                <td>Active</td>
                @else
                <td>Inactive</td>
                @endif
                <td>
                    <form action="{{ url('voter/'.$user->id) }}" method="POST">
                        {{ method_field('DELETE') }}

                        <button type="submit" id="delete-task-{{ $user->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <div class="row">
        <center>
            <span class "col-md-12">
                <a href="{{ url('/register') }}"><button type="button" class="btn btn-primary">Add voter</button></a>
            <span class "col-md-12">
        </center>
    </div>
</div>
@endsection
