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
    }

    .fa-btn {
        margin-right: 6px;
    }

    .btn {
        margin: 6px 6px 6px 6px;
    }

    /*job description*/
    #job-desc {
        position: relative;
    }

    .job-el {
        margin-top: 6px;
        margin-left: 6px;
        margin-right: 6px;
        margin-bottom: 30px;
    }

    a:hover {
        text-decoration: none;
    }

    ul.nav-pills {
        top: 100px;
        position: fixed;
    }
    div.col-sm-9 div {
        height: 800px;
        font-size: 16px;
    }

    @media screen and (max-width: 810px) {
        #chairman, #vice_chairman, #secretary, #treasurer {
            margin-left: 150px;
        }
    }

    /*candidate.index, vote.index*/
    /*candidate picture*/
    .candidate-pic {
        margin: 5px;
        /*border: 1px solid #ccc;*/
        float: left;
        width: 300px;
        padding: 30px;
        text-align: center;
    }

    .candidate-pic:hover {
        /*border: 1px solid #777;*/
    }

    .candidate-pic img {
        width: 100%;
        height: auto;
    }

    /*all candidates pics in a certain panel*/
    .all-pics {
        padding-left: 40px;
    }

    /*vote.thanks*/
    #thanks {
        text-align: center;
        vertical-align: middle;
        margin-bottom: 40px;
        margin-top: 150px;
    }

    /*welcome*/
    #welcome {
        text-align: center;
        vertical-align: middle;
    }

    /*candidate.show*/
    #profile-pic {
        padding-top: 20px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-left: 30px;
    }

    /*candidate information in the table*/
    .table-candidate-information > tbody > tr {
        font-size: 14px;
        border-top: 1px solid rgb(221, 221, 221);
        color: rgb(217, 230, 242);
        background-color: rgb(102, 153, 204);
    }

    /*all panels*/
    .panel-default > .panel-heading {
        color: rgb(236, 242, 248);
        background-color: rgb(125, 166, 207);
    }

    .panel-default > .panel-body {
        background-color: rgb(217, 229, 242);
    }

    /*vote.index*/
    /*dropdowns, labels for each position*/
    .position {
        font-size:20px;
        padding-top: 20px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-left: 45px;
        margin-right: 20px:
        margin-down: 20px;
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
                    IEEE GUC
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/activate') }}">Activate my account</a></li>
                    <li><a href="{{ url('/candidate/create') }}">Apply as a candidate</a></li>
                    @else
                    <!-- dropdown-menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Go To <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/candidate') }}">View Candidates</a></li>
                            @if (Auth::user()->isVoter())
                            <li><a href="{{ url('/vote') }}">Vote</a></li>
                            @endif
                        </ul>
                    </li>
                    <li class="dropdown">
                        @if (Auth::user()->isAdmin())
                        <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa fa-lock"></i>Admin Panel</a></li>
                        @endif
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class = "container">
        @include('flash::message')
    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

</body>
</html>
