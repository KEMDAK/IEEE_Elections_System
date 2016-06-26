<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IEEEGUC</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Lato';
            background-color: rgb(198, 217, 236);
            /*background-image: url("leaves.jpg");
            background-size: 100%;
            background-repeat: no-repeat;*/

        }

        .fa-btn {
            margin-right: 6px;
        }

        /*candidates index*/
        .candidate-pic {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        .candidate-pic:hover {
            border: 1px solid #777;
        }

        .candidate-pic img {
            width: 100%;
            height: auto;
        }

        .candidate-pic {
            padding: 15px;
            text-align: center;
        }

        /*thanks page*/
        #thanks {
          text-align: center;
          vertical-align: middle;
          margin-bottom: 40px;
          margin-top: 150px;
        }

        /*welcome page*/
        #welcome {
          text-align: center;
          vertical-align: middle;
        }

        /*candidate show page*/

        #profile-pic {
          padding-top: 20px;
          padding-right: 30px;
          padding-bottom: 20px;
          padding-left: 30px;
        }

        /*candidate information*/
        .table-candidate-information > tbody > tr {
          font-size: 14px;
          border-top: 1px solid rgb(221, 221, 221);
          color: rgb(217, 230, 242);
          /*background-color: rgb(46, 91, 133);*/
          background-color: rgb(102, 153, 204);
        }

        /*panels*/
        .panel-default > .panel-heading {
          color: rgb(236, 242, 248);
          background-color: rgb(125, 166, 207);
        }

        .panel-default > .panel-body {
          background-color: rgb(217, 229, 242);
        }

        /*vote page*/

        /*position labels*/
        .position {
            font-size:20px;
            padding-top: 20px;
            padding-right: 30px;
            padding-bottom: 20px;
            padding-left: 80px;
        }


        .candidate-info {
          font-size: 20px;
          padding-top: 20px;
          padding-right: 80px;
          padding-bottom: 20px;
          padding-left: 80px;
        }

        /*nav bar*/
        .navbar-default {
          background-color: #467ec9;
          border-color: #174590;
        }
        .navbar-default .navbar-brand {
          color: #ecf0f1;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
          color: #b2c9e8;
        }
        .navbar-default .navbar-text {
          color: #ecf0f1;
        }
        .navbar-default .navbar-nav > li > a {
          color: #ecf0f1;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
          color: #b2c9e8;
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
          color: #b2c9e8;
          background-color: #174590;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
          color: #b2c9e8;
          background-color: #174590;
        }
        .navbar-default .navbar-toggle {
          border-color: #174590;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
          background-color: #174590;
        }
        .navbar-default .navbar-toggle .icon-bar {
          background-color: #ecf0f1;
        }
        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
          border-color: #ecf0f1;
        }
        .navbar-default .navbar-link {
          color: #ecf0f1;
        }
        .navbar-default .navbar-link:hover {
          color: #b2c9e8;
        }

        @media (max-width: 767px) {
          .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #ecf0f1;
          }
          .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
          .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #b2c9e8;
          }
          .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
          .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
          .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #b2c9e8;
            background-color: #174590;
          }
        }

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    IEEEGUC
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/activate') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            @if (Auth::user()->isAdmin())
                                <li><a href="{{ url('/Admin') }}"><i class="fa fa-btn fa fa-lock"></i>Admin Panel</a></li>
                            @endif
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
