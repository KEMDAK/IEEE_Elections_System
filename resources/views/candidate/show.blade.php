@extends('layouts.app')



@section('content')


<div class = "container">
    <div class="row">
        <div class="col-md-3" id = "profile-pic">
            <img src="{{ $candidate->image_url }}"  width="230" height="250"></img>
        </div>
        @if(!Auth::guest() && Auth::user()->id == $candidate->user_id)
        <div class="col-md-8" id = "profile-pic">
            <a href="{{ url('/candidate/'.$candidate->id.'/edit')}}">
                <button type="button" name="edit" class = "btn btn-warning">
                    <i class="fa fa-btn fa-pencil-square-o"></i>Edit profile</button>
                </a>
                <div class="row">
                    <div class="col-sm-6" >
                        <p class = "warning" >
                            <span style="color: red">Warning:</span>
                            If you edit your profile your registration status will be changed to pending until the changes are accepted by the elections committee.
                        </p>
                    </div>
                </div>
            </div>
            @endif

        </div>

        <div class="row col-md-12">
            <table class="table table-candidate-information">
                <tbody>
                    <tr>
                        <td><b>Name</b></td>
                        <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                    </tr>
                    <tr>
                        <td><b>Major</b></td>
                        <td>{{$candidate->major}}</td>
                    </tr>
                    <tr>
                        <td><b>Applying to</b></td>
                        <td>{{$candidate->position}}'s position</td>
                    </tr>
                    @if(!Auth::guest() && (Auth::user()->id == $candidate->user_id || Auth::user()->isAdmin()))
                    <tr>
                        <td><b>GUC ID</b></td>
                        <td>{{$candidate->guc_id}}</td>
                    </tr>
                    <tr>
                        <td><b>IEEE membership ID</b></td>
                        <td>{{$candidate->ieee_membership_id}}</td>
                    </tr>
                    <tr>
                        <td><b>Personal E-mail</b></td>
                        <td>{{$candidate->personal_email}}</td>
                    </tr>
                    <tr>
                        <td><b>GUC E-mail</b></td>
                        <td>{{$candidate->guc_email}}</td>
                    </tr>
                    <tr>
                        <td><b>Mobile Number</b></td>
                        <td>{{$candidate->mobile_number}}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="row col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">More to know</div>
                <div class="panel-body">

                    <h3>Plan:</h3>
                    <div>
                        <center>
                            <iframe class="col-xs-12" src="{{ $candidate->plan_url }}" width="640" height="900"></iframe>
                        </center>
                    </div>

                    @if(!$candidate->video_url === null)
                    <h3>Video:</h3>
                    <div>
                        <center>
                            <iframe class="col-xs-12" src="{{ $candidate->video_url }}" width="640" height="480"></iframe>
                        </center>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
