@extends('layouts.app')

@section('content')
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20" id = "welcome">

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Activities</a></li>
      </ul>
    </nav>

    <div class="col-sm-9">
      <div id="section1">
        <h1>IEEE GUC</h1>
        <p>Upgrading humanity and kool stuff</p>
      </div>
      <div id="section2">
        <h1>Upper Board Elections</h1>
        <p>Elections... Elections everywhere!</p>
        <div type="label" class="label label-info"><a href="{{ url('/vote') }}">Vote</a></div>
      </div>
    </div>
  </div>
</div>

</body>

  </div>
</div>
@endsection
