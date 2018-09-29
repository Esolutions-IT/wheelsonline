<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        html, body {
            background-image: url(../resources/assets/images/bmw-back.jpg);
            max-height: 100%;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;


        }

        .full-height {
            height: 79%;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .login-text{
            color: #636b6f!important;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none!important;
            text-transform: uppercase;
            margin-left:-50px;
        }
        a:-webkit-any-link {
            color: #636b6f;
            cursor: pointer;
            text-decoration: none;
        }

        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');



        .menu{
            text-align: center;
            padding-top: 25px;
            margin-bottom:200px;
        }

        .menu img{
            opacity: 0.4;
            margin: 20px auto;
        }

        .menu h1{
            margin-top:0;
            font: normal 32px/1.5 'Open Sans', sans-serif;
            color: #3F71AE;
            padding-bottom: 16px;
        }

        .menu h2{
            color: #F05283;
        }

        .menu h2 a{
            color:inherit;
            text-decoration: none;
            display: inline-block;
            border: 1px solid #F05283;
            padding: 10px 15px;
            border-radius: 3px;
            font: bold 14px/1 'Open Sans', sans-serif;
            text-transform: uppercase;
        }

        .menu h2 a:hover{
            background-color:#F05283;
            transition:0.2s;
            color:#fff;
        }

        .menu ul {
            max-width: 600px;
            margin: 60px auto 0;
        }

        .menu ul a{
            text-decoration: none;
            color: #FFF;
            text-align: left;
            background-color: #B9C1CA;
            padding: 10px 16px;
            border-radius: 2px;
            opacity: 0.8;
            font-size: 16px;
            display: inline-block;
            margin: 4px;
            line-height: 1;
            outline: none;

            transition: 0.2s ease;
        }

        .menu ul li a.active{
            background-color: #66B650;
            pointer-events: none;
        }

        .menu ul li a:hover {
            opacity: 1;
        }

        .menu ul{
            list-style: none;
            padding: 0;
        }

        .menu ul li{
            display: inline-block;
        }

        @media (max-height:800px){
            .menu { padding-top:40px; }
        }


        /* -- Demo ads -- */

        @media (max-width: 1200px) {
            #bsaHolder{ display:none;}
        }

        /* -- Link to Tutorialzine -- */

        .tz-link{
            text-decoration: none;
            color: #fff !important;
            font: bold 36px Arial,Helvetica,sans-serif !important;
        }

        .tz-link span{
            color: #da431c;
        }
        .header-two-bars{
            font:13px Arial, Helvetica, sans-serif;
        }

        .header-two-bars .header-limiter{
            max-width: 1200px;
            text-align: center;
            margin: 0 auto;
        }

        /* Logo */

        .header-two-bars h1{
            float: left;
            font: normal 28px Cookie, Arial, Helvetica, sans-serif;
            line-height: 40px;
            margin: 0;
        }

        .header-two-bars h1 span {
            color: #bc40df;
        }

        /* The first bar */

        .header-two-bars .header-first-bar{
            background-color:#292c2f;
            box-shadow:0 1px 1px #ccc;
            padding: 20px 40px;
            height: 80px;
            color: #ffffff;
            box-sizing: border-box;
        }

        .header-two-bars .header-first-bar a {
            color: #ffffff;
            text-decoration: none;
        }

        .header-two-bars .header-first-bar nav {
            font:14px Arial, Helvetica, sans-serif;
            line-height: 40px;
            float: left;
            margin: 0 0 0 60px;
            padding: 0;
        }

        .header-two-bars .header-first-bar nav a{
            display: inline-block;
            padding: 0 5px;
            opacity: 0.9;
            text-decoration:none;
            line-height: 1;
        }

        .header-two-bars .header-first-bar nav a:hover {
            opacity: 1;
        }

        .header-two-bars .header-first-bar nav a.selected {
            border-radius: 2px;
            background-color: #2B5773;
            padding: 8px 12px;
        }

        .header-two-bars .header-first-bar a.logout-button {
            font-size: 13px;
            font-weight: bold;
            float: right;
            border-radius: 3px;
            background-color: rgba(58, 60, 62, 0);
            height: 40px;
            padding: 0 20px;
            margin-left:10px;
            border: 1px solid #5E6367;
            line-height: 40px;
            box-sizing: border-box;
        }


        /* Second Bar */

        .header-two-bars .header-second-bar {
            background-color: #ffffff;
            box-shadow: 1px 3px 3px 0 rgba(0, 0, 0, 0.05);
            padding: 20px 40px;
        }

        .header-two-bars .header-second-bar h2 {
            line-height: 20px;
            margin: 0;
            float: left;
        }

        .header-two-bars .header-second-bar h2 a {
            font-size: 16px;
            color: #4e5359;
            text-decoration: none;
        }

        .header-two-bars .header-second-bar nav {
            text-align: right;
            line-height: 20px;
            font-size: 16px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .header-two-bars .header-second-bar nav a {
            display: inline-block;
            color: #4e5359;
            text-decoration: none;
        }

        .header-two-bars .header-second-bar nav i.fa {
            color: #A9B7BF;
            margin: 0 4px 0 15px;
        }


        /*	Making the header responsive. Remove these styles, if
            you don't need the header to work on mobile devices. */

        @media all and (max-width: 800px) {

            .header-two-bars .header-second-bar nav{
                font-size:14px;
            }

        }

        @media all and (max-width: 600px) {

            .header-two-bars .header-first-bar{
                padding:20px 0;
            }

            .header-two-bars .header-first-bar h1 {
                float: none;
                margin: -8px 0 2px;
                text-align: center;
                font-size: 24px;
                line-height: 1;
            }

            .header-two-bars .header-first-bar nav {
                margin: 0;
                float: none;
                font-size:13px;
            }

            .header-two-bars .header-first-bar nav a.selected {
                padding: 5px 8px;
            }

            .header-two-bars .header-first-bar .logout-button {
                display: none;
            }

            .header-two-bars .header-second-bar{
                padding: 20px 0;
            }

            .header-two-bars .header-second-bar h2{
                float:none;
                margin: 0 0 12px;
            }

            .header-two-bars .header-second-bar nav{
                text-align: center;
            }

            .header-two-bars .header-second-bar nav a{
                display: block;
                padding: 8px;
            }

            .header-two-bars .header-second-bar nav i.fa{
                margin-left:0;
            }
        }
        #onderdelen-velgen{
            width:230px;
            height:40px;
            position:absolute;
            margin-top:-200px;
            margin-left:-1000px;
            background-color:white;
            opacity: 0.6;
            border:2px solid black;
            animation: onload 1s forwards;
        }
        #onderdelen-onderdelen{
            width:230px;
            height:40px;
            position:absolute;
            margin-top:-150px;
            margin-left:-1000px;
            background-color:white;
            opacity: 0.6;
            border:2px solid black;
            animation: onload 1s forwards;
        }

        #onderdelen-reparatie{
            width:230px;
            height:40px;
            position:absolute;
            margin-top:-100px;
            margin-left:-1000px;
            background-color:white;
            opacity: 0.6;
            border:2px solid black;
            animation: onload 1s forwards;
        }

        #onderdelen-koopjes{
            width:230px;
            height:40px;
            position:absolute;
            margin-top:-50px;
            margin-left:-1000px;
            background-color:white;
            opacity: 0.6;
            border:2px solid black;
            animation: onload 1s forwards;
        }
        @keyframes onload {
            from { margin-left: -1000px}
            to   { margin-left: -780px}
        }
    </style>

</head>
<body>

<header class="header-two-bars">

    <div class="header-first-bar">

        <div class="header-limiter">

            <h1><a href="#">Wheels<span>Online</span></a></h1>

            <nav>
                <a href="{{route('landing')}}">Home</a>
                <a href="./nl" class="selected" >Over Ons</a>
                <a href="../informatie/nl">Informatie</a>
                <a href="../contact/nl">Contact</a>
            </nav>
            @if (Route::has('login'))
                @if (Auth::check())
                    <a href="{{ url('/home') }}" class="logout-button">Home</a>
                @else
                    <a href="{{ url('/register') }}" class="logout-button">@lang('welkom_blade/file.registreren')</a>
                    <a href="{{ url('/login') }}" class="logout-button">@lang('welkom_blade/file.inloggen')</a>
                @endif
            @endif
        </div>

    </div>

    <div class="header-second-bar">

        <div class="header-limiter">
            <h2><a href="#">Heeft u vragen aan ons?</a></h2>

            <nav>
                <a href="#"><i class="fa fa-comments-o"></i> Q & A</a>
                <a href="#"><i class="fa fa-file-text"></i> Contact</a>
                <a href="#"><i class="fa fa-cogs"></i> Instellingen</a>
                <a href="./nl"><img src="../resources/assets/images/nl-vlag.png" style="position:absolute; width:20px; margin-top:-15px; margin-left:15px;"></a>
                <a href="./en"><img src="../resources/assets/images/usa-vlag.png" style="position:absolute; width:20px; margin-top:-15px; margin-left:40px;"></a>
            </nav>

        </div>

    </div>

</header>

<div class="flex-center position-ref full-height">
    <div id="alles">
        <div class="content">
            <div id="onderdelen-velgen">
                <h1 style="font-size:30px; letter-spacing:7px; font-family:'Bebas Neue'; margin-top:4px; text-align: center; color:black; z-index: 99999">Velgen</h1>
            </div>

            <div id="onderdelen-onderdelen">
                <h1 style="font-size:30px; letter-spacing:4px; font-family:'Bebas Neue'; margin-top:4px; text-align: center; color:black; z-index: 99999">Onderdelen</h1>
            </div>

            <div id="onderdelen-reparatie">
                <h1 style="font-size:30px; letter-spacing:4px; font-family:'Bebas Neue'; margin-top:4px; text-align: center; color:black; z-index: 99999">Reparatie</h1>
            </div>

            <div id="onderdelen-koopjes">
                <h1 style="font-size:30px; letter-spacing:4px; font-family:'Bebas Neue'; margin-top:4px; text-align: center; color:black; z-index: 99999">Koopjes</h1>
            </div>

        </div>
    </div>
</div>
</body>
</html>
