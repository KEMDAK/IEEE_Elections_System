@extends('layouts.app')

@section('content')

<body data-spy="scroll" data-target="#scroll_body" >

<div class="container">

  
<div class="row">
      <div class="col-sm-6 col-sm-offset-2" >
         <h2  class = "title">
           ELECTION PHASES 
        </h2>  
      </div>
  </div>


  <div class="row">
    <nav class="col-sm-3" id="scroll_body">
      <ul class="nav nav-pills nav-stacked">
      
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Phase 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#phase11">Phase 1-1</a></li>
            <li><a href="#phase12">Phase 1-2</a></li>
          </ul>
        </li>
        <li><a href="#phase2">Phase 2</a></li>
        <li><a href="#phase3">Phase 3</a></li>
      </ul>
    </nav>

    <div class="col-sm-9">
      <div id="phase11" style ="height:500px;padding-top:50px;">
       <h3 class= "title"> Phase 1: Submissions</h3>
       <h3 class ="title" style = "margin-left:40px">a. The Plan :</h3>
        <ol type="i">
          <li class = "marg">Basic information about the candidate.</li>
          <li class = "marg">The candidate’s intentions and plans for the upcoming year in the position they are applying for.</li>
          <li class = "marg">General overview on the events, selection criteria, development plans, etc. related to the branch in the candidate’s opinion for the upcoming year.</li>
          
        </ol>
      </div>
      <div id="phase12" style ="height:500px;padding-top:50px;">
        <h3 class ="title" style = "margin-left:55px" >b. The video :</h3>
        <ol type = "i">
           <li class = "marg">A brief video explaining the candidate’s plan and intentions for the upcoming year to the voters and Elections Team.</li> 

          <li class = "marg">Positions duration :
              <ol  >
                 <li class = "marg"><span style="color: red">Chairman:</span>
        10-15 minutes.</li>
                 <li class = "marg"><span style="color: red">Vice Chairman:</span>
        5-10 minutes.</li>
                 <li class = "marg"><span style="color: red">Secretary:</span>
        3-10 minutes.</li>
                 <li class = "marg"><span style="color: red">Treasurer:</span>
        3-10 minutes.</li>
          
               </ol>
          </li>

        </ol>
      </div>


      <div id="phase2" style ="height:300px;padding-top:50px;">
        <h3 class ="title">Phase 2: Plan Discussions</h3>
        <ul>
          <li class = "marg">After the completion of Phase 1, a meeting with each candidate will be held to discuss the candidate's plan with the Advisory Board.</li>    
        </ul>
      </div>

      <div id="phase3" style ="height:300px;padding-top:50px;">
        <h3 class = "title">Phase 3: Eligibility Checking</h3>
        <ul>
          <li class = "marg">After the completion of Phase 2, a filtration process will be done to announce the final candidates for the elections after applying the eligibility conditions on each candidate.</li>    
        </ul>
      </div>


      
    </div>
  </div>
</div>

</body>




@endsection

