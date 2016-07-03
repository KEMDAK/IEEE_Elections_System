@extends('layouts.app')

     

@section('content')
<div class = "container">
  <div class="row">
      <div class="col-md-3" id = "profile-pic">
          <img src={{$candidate->image_url}} class="img-rounded" alt={{$candidate->first_name}} width="250" height="250">
      </div>

      @if(Auth::user()->id == $candidate->user_id)
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
          @if(Auth::user()->id == $candidate->user_id || Auth::user()->isAdmin())
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
          <h5>Plan:</h5>


          <div>

           <div  id='plan_pdf'> 
           
            </div>


          </div>
          <h5>Video:</h5>
          <div>
            
<div id="jp_container_1" class="jp-video " role="application" aria-label="media player">
  <div class="jp-type-single">
    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <div class="jp-gui">
      <div class="jp-video-play">
        <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
      </div>
      <div class="jp-interface">
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
        <div class="jp-details">
          <div class="jp-title" aria-label="title">&nbsp;</div>
        </div>
        <div class="jp-controls-holder">
          <div class="jp-volume-controls">
            <button class="jp-mute" role="button" tabindex="0">mute</button>
            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
            <div class="jp-volume-bar">
              <div class="jp-volume-bar-value"></div>
            </div>
          </div>
          <div class="jp-controls">
            <button class="jp-play" role="button" tabindex="0">play</button>
            <button class="jp-stop" role="button" tabindex="0">stop</button>
          </div>
          <div class="jp-toggles">
            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
            <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
          </div>
        </div>
      </div>
    </div>
    <div class="jp-no-solution">
      <span>Update Required</span>
      To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
    </div>
  </div>
</div>









          </div>
      </div>
    </div>
  </div>
</div>

     <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" src="/js/jquery.min.js"></script>

    <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "Candidate Word",
            ogv: "{{ $candidate->video_url }}",
            m4v:"{{ $candidate->video_url }}",
            poster:"{{ $candidate->image_url }}"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: " ogv ,m4v",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true 
        
      });
    });
  </script>

   <script src="/pdfobject.js"></script>

  <script>PDFObject.embed("{{ $candidate->plan_url }}", "#plan_pdf");</script>



   
@endsection
