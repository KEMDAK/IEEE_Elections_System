@extends('layouts.app')

@section('content')

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20"id = "job-desc">

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#chairman">Chairman</a></li>
        <li><a href="#vice_chairman">Vice Chairman</a></li>
        <li><a href="#secretary">Secretary</a></li>
        <li><a href="#treasurer">Treasurer</a></li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="chairman">
        <h2>
          Job Descriptions
        </h2>
        <h3>Chairman</h3>
        <ul>
          <li class = "job-el">Preside at all general meetings of the Branch and the Executive Committee or
            designate another person to do so.</li>
          <li class = "job-el">Represent or delegate representation of the Branch in all cases not specifically
             indicated elsewhere.</li>
          <li class = "job-el">Coordinate activities with Section and Region officers as well as executive
            officers and project directors.</li>
          <li class = "job-el">Communicate frequently with the other members of the Branch Leadership.</li>
          <li class = "job-el">Be responsible for knowing the general operation and intent of each
            of the Branch’s major activities.</li>
          <li class = "job-el">Assume any duties which have not been handled by other officers.</li>
          <li class = "job-el">Prepare such reports as may be requested by IEEE Student Services.</li>
          <li class = "job-el">Conduct such other business as the Executive Committee may direct.</li>
        </ul>
      </div>
      <div id="vice_chairman">
        <h3>Vice Chairman</h3>
        <ul>
          <li class = "job-el">Coordinate efforts with the Chair and the Executive Officers.</li>
          <li class = "job-el">Act in the position of Chair when delegated by the Chair or should the Chair be unreachable.</li>
          <li class = "job-el">Assist in all duties delegated by the Chair.</li>
          <li class = "job-el">Maintain contact with other student organizations,
             cooperation with IEEE Society Student Chapters, and interaction with IEEE Section and Region affiliates.</li>
          <li class = "job-el">Handle paperwork and bureaucracy for the Branch, room reservations, and other forms.</li>
          <li class = "job-el">Ensure that all members meet membership requirements and, if necessary,
             maintain a database of members in good standing.</li>
          <li class = "job-el">Assist in organizing the Branch’s events and activities.</li>
          <li class = "job-el">Conduct such other business as the Executive Committee may direct.</li>

        </ul>
      </div>
      <div id="secretary">
        <h3>Secretary</h3>
        <ul>
          <li class = "job-el">Keep a record of all activities of the Branch and submit a report of these activities
             to the IEEE upon request.</li>
          <li class = "job-el">Report to the IEEE the names and contact information of the Branch’s officers.</li>
          <li class = "job-el">Keep minutes of each meeting of the Executive Committee and each General Meeting,
             and distribute such minutes to attendees in a timely manner.</li>
          <li class = "job-el">Keep a record of the names and IEEE membership numbers of all members and submit
             a report of this information to the IEEE upon request.</li>
          <li class = "job-el">Assist the Branch Chair to ensure that the Branch’s activities are conducted under
             the provisions of this Constitution and the Branch’s bylaws.</li>
          <li class = "job-el">Conduct such other business as the Executive Committee may direct.</li>
        </ul>
      </div>
      <div id="treasurer">
        <h3>Treasurer</h3>
        <ul>
          <li class = "job-el">Be responsible for maintaining any bank accounts controlled by the Branch.</li>
          <li class = "job-el">Receive all money and pay all debts of the branch authorized by the Executive Committee.</li>
          <li class = "job-el">Keep all financial records current and in order.</li>
          <li class = "job-el">Provide financial statements and reports to the Executive Committee,
             periodically or upon explicit request.</li>
          <li class = "job-el">Prepare all financial documents required for annual reports to be
            submitted to the IEEE and the ECA.</li>
          <li class = "job-el">Supervise budgeting and procurement for all activities and events.</li>
          <li class = "job-el">Provide advice and information regarding financial matters. procurement,
             and budgeting to officers and members upon request.</li>
          <li class = "job-el">Conduct such other business as the Executive Committee may direct.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

</body>
@endsection
