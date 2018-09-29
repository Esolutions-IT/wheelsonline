<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        html, body {
            background-image: url(./resources/assets/images/bmw-back.jpg);
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
        #bmwvelgenimage{
            opacity: 0.8;
            animation: bmw1 1s;
            animation-delay: 0s;
        }
        @keyframes  bmw1 {
            from {opacity: 0;}
            to {opacity: 0.8;}
        }

        #bmwonderdelenimage{
            opacity: 0.8;
            animation: bmw2 1s;
            animation-delay: 0s;

        }
        @keyframes  bmw2 {
            from {opacity: 0;}
            to {opacity: 0.8;}
        }
        #bmwreparatieimage{
            opacity: 0.8;
            animation: bmw3 1s;
            animation-delay: 0s;
        }
        @keyframes  bmw3 {
            from {opacity: 0;}
            to {opacity: 0.8;}
        }
        #bmwkoopjesimage{
            opacity: 0.8;
            animation: bmw4 1s;
            animation-delay: 0s;
        }
        @keyframes  bmw4 {
            from {opacity: 0;}
            to {opacity: 0.8;}
        }
        .wo{
            position:absolute;
            width:500px;
            margin-top:-200px;
            margin-left:-250px
        }
        .bmwvelgenimage:hover{
            width:420px!important;
            margin-top:-100px!important;
            z-index:8888!important;
            opacity:1!important;
        }
        #bmwonderdelenimage:hover{
            width:420px!important;
            z-index:8888!important;
            margin-top:-100px!important;
            opacity: 1!important;
        }
        .text-begin{
            font-family: 'Bebas Neue';
            position:absolute;
            margin-top:-220px;
            margin-left:-155px;
            color:white;
            font-size:68px;

        }
        #bmwreparatieimage:hover{
            width:420px!important;
            z-index:8888!important;
            margin-top:-100px!important;
            opacity: 1!important;
        }
        #bmwkoopjesimage:hover{
            width:420px!important;
            z-index:8888!important;
            margin-top:-100px!important;
            opacity: 1!important;
        }
        #velgen-text{
            position:absolute;
            display:none;
            margin-top:-150px;
            margin-left:-20px;
            font-size:50px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #onderdelen-text{
            position:absolute;
            display:none;
            margin-top:-150px;
            margin-left:-60px;
            font-size:50px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #reparatie-text{
            position:absolute;
            display:none;
            margin-top:-150px;
            margin-left:-45px;
            font-size:50px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #koopjeshoek-text{
            position:absolute;
            display:none;
            margin-top:-150px;
            margin-left:-68px;
            font-size:50px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }

        #velgen-text2{
            position:absolute;
            margin-top:-80px;
            margin-left:-500px;
            font-size:30px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #onderdelen-text2{
            position:absolute;
            margin-top:-80px;
            margin-left:-190px;
            font-size:30px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #reparatie-text2{
            position:absolute;
            margin-top:-80px;
            margin-left:108px;
            font-size:30px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #koopjeshoek-text2{
            position:absolute;
            margin-top:-80px;
            margin-left:410px;
            font-size:30px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }

        #button_velgen{
            position:relative;
            z-index: 9999;
        }
        /*Velgen buttons*/
        #vbutton{
            position:absolute;
            margin-top:235px;
            margin-left:-495px;
            transform:translate(-50%,-50%);
            width:150px;
            height:30px;
            background: #262626;
            text-transform:uppercase;
            text-align: center;
            line-height: 30px;
            color:white;
            text-decoration: none;
            font-size:20px;
            font-family:verdana;
            letter-spacing: 4px;
            opacity: 0;
        }
        #vbutton:before,
        #vbutton:after,
        span:before,
        span:after{
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background:white;
            transition: 1s;
            mix-blend-mode: hue;
        }
        #vbutton:before{
            top:-2px;
            left:-2px;
        }
        #vbutton:after{
            top:-2px;
            right:-2px;
        }
        span:before{
            bottom:-2px;
            left:-2px;
        }

        span:after{
            bottom:-2px;
            right:-2px;
        }
        #vbutton:hover:before,
        #vbutton:hover:after,
        #vbutton:hover span:before,
        #vbutton:hover span:after{
            width: calc(180px / 2);
            height: calc(50px / 2);
        }
        #vinfo{
            position: absolute;
            margin-left:-380px;
            margin-top:218px;
            width:35px;
            opacity:0;
        }

        /*Onderdelen buttons*/
        #obutton{
            position:absolute;
            margin-top:235px;
            margin-left:-195px;
            transform:translate(-50%,-50%);
            width:150px;
            height:30px;
            background: #262626;
            text-transform:uppercase;
            text-align: center;
            line-height: 30px;
            color:white;
            text-decoration: none;
            font-size:20px;
            font-family:verdana;
            letter-spacing: 4px;
            opacity: 0;

        }
        #obutton:before,
        #obutton:after,
        span:before,
        span:after{
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background:white;
            transition: 1s;
            mix-blend-mode: hue;
        }
        #obutton:before{
            top:-2px;
            left:-2px;
        }
        #obutton:after{
            top:-2px;
            right:-2px;
        }
        span:before{
            bottom:-2px;
            left:-2px;
        }

        span:after{
            bottom:-2px;
            right:-2px;
        }
        #obutton:hover:before,
        #obutton:hover:after,
        #obutton:hover span:before,
        #obutton:hover span:after{
            width: calc(180px / 2);
            height: calc(50px / 2);
        }
        #oinfo{
            position: absolute;
            margin-left:-80px;
            margin-top:218px;
            width:35px;
            opacity:0;
        }
        /*Onderdelen buttons*/
        #rbutton{
            position:absolute;
            margin-top:235px;
            margin-left:120px;
            transform:translate(-50%,-50%);
            width:150px;
            height:30px;
            background: #262626;
            text-transform:uppercase;
            text-align: center;
            line-height: 30px;
            color:white;
            text-decoration: none;
            font-size:20px;
            font-family:verdana;
            letter-spacing: 4px;
            opacity: 0;

        }
        #rbutton:before,
        #rbutton:after,
        span:before,
        span:after{
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background:white;
            transition: 1s;
            mix-blend-mode: hue;
        }
        #rbutton:before{
            top:-2px;
            left:-2px;
        }
        #rbutton:after{
            top:-2px;
            right:-2px;
        }
        span:before{
            bottom:-2px;
            left:-2px;
        }

        span:after{
            bottom:-2px;
            right:-2px;
        }
        #rbutton:hover:before,
        #rbutton:hover:after,
        #rbutton:hover span:before,
        #rbutton:hover span:after{
            width: calc(180px / 2);
            height: calc(50px / 2);
        }
        #rinfo{
            position: absolute;
            margin-left:235px;
            margin-top:218px;
            width:35px;
            opacity:0;
        }


        #kbutton{
            position:absolute;
            margin-top:235px;
            margin-left:420px;
            transform:translate(-50%,-50%);
            width:150px;
            height:30px;
            background: #262626;
            text-transform:uppercase;
            text-align: center;
            line-height: 30px;
            color:white;
            text-decoration: none;
            font-size:20px;
            font-family:verdana;
            letter-spacing: 4px;
            opacity: 0;

        }
        #kbutton:before,
        #kbutton:after,
        span:before,
        span:after{
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background:white;
            transition: 1s;
            mix-blend-mode: hue;
        }
        #kbutton:before{
            top:-2px;
            left:-2px;
        }
        #kbutton:after{
            top:-2px;
            right:-2px;
        }
        span:before{
            bottom:-2px;
            left:-2px;
        }

        span:after{
            bottom:-2px;
            right:-2px;
        }
        #kbutton:hover:before,
        #kbutton:hover:after,
        #kbutton:hover span:before,
        #kbutton:hover span:after{
            width: calc(180px / 2);
            height: calc(50px / 2);
        }
        #kinfo{
            position: absolute;
            margin-left:535px;
            margin-top:218px;
            width:35px;
            opacity:0;
        }


        #invissible-1{
            position:absolute;
            width:310px;
            height:50px;
            margin-left:-600px;
            margin-top:203px;
        }

        #invissible-2{
            position:absolute;
            width:305px;
            height:50px;
            margin-left:-295px;
            margin-top:203px;

        }
        #invissible-3{
            position:absolute;
            width:305px;
            height:50px;
            margin-left:5px;
            margin-top:203px;
        }
        #invissible-4{
            position:absolute;
            width:305px;
            height:50px;
            margin-left:310px;
            margin-top:203px;
        }

        #pContainer {
            position: absolute;
            overflow: hidden;
            width: 200px;
            height: 100px;
            margin-top:253px;
            margin-left:-530px;
            color:white;
            opacity: 1;
        }
        #pContainer > p {
            position: absolute;
            top: 0;
            left: 0;
            /* transition: opacity 0.5s linear; */
        }
        #pContainer > p.show {
            /* opacity: 1; */
            opacity: 1;
            position: absolute;
            -webkit-animation: showP 0.85s linear;
        }
        #pContainer > p.hide {
            /* opacity: 0; */
            opacity: 0;
            position: absolute;
            top: -50px;
            -webkit-animation: hideP 0.85s linear;
        }

        @-webkit-keyframes showP {
            0%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }

            100%{
                opacity: 1;
                position: absolute;
                top: 0px
            }
        }

        @-webkit-keyframes hideP {
            0%{
                opacity: 1;
                position: absolute;
                top: 0px;
            }
            80%{
                opacity: 0;
                position: absolute;
            }
            90%{
                top: 105px;
                position: absolute;/* container height + 5*/
            }
            100%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }
        }

        #pContainer2 {
            position: absolute;
            overflow: hidden;
            width: 200px;
            height: 100px;
            margin-top:253px;
            margin-left:-230px;
            color:white;
            opacity: 1;
        }
        #pContainer2 > p {
            position: absolute;
            top: 0;
            left: 0;
            /* transition: opacity 0.5s linear; */
        }
        #pContainer2 > p.show {
            /* opacity: 1; */
            opacity: 1;
            position: absolute;
            -webkit-animation: showP 0.85s linear;
        }
        #pContainer2 > p.hide {
            /* opacity: 0; */
            opacity: 0;
            position: absolute;
            top: -50px;
            -webkit-animation: hideP 0.85s linear;
        }

        @-webkit-keyframes showP {
            0%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }

            100%{
                opacity: 1;
                position: absolute;
                top: 0px
            }
        }

        @-webkit-keyframes hideP {
            0%{
                opacity: 1;
                position: absolute;
                top: 0px;
            }
            80%{
                opacity: 0;
                position: absolute;
            }
            90%{
                top: 105px;
                position: absolute;/* container height + 5*/
            }
            100%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }
        }

        #pContainer3 {
            position: absolute;
            overflow: hidden;
            width: 200px;
            height: 100px;
            margin-top:253px;
            margin-left:70px;
            color:white;
            opacity: 1;
        }
        #pContainer3 > p {
            position: absolute;
            top: 0;
            left: 0;
            /* transition: opacity 0.5s linear; */
        }
        #pContainer3 > p.show {
            /* opacity: 1; */
            opacity: 1;
            position: absolute;
            -webkit-animation: showP 0.85s linear;
        }
        #pContainer3 > p.hide {
            /* opacity: 0; */
            opacity: 0;
            position: absolute;
            top: -50px;
            -webkit-animation: hideP 0.85s linear;
        }

        @-webkit-keyframes showP {
            0%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }

            100%{
                opacity: 1;
                position: absolute;
                top: 0px
            }
        }

        @-webkit-keyframes hideP {
            0%{
                opacity: 1;
                position: absolute;
                top: 0px;
            }
            80%{
                opacity: 0;
                position: absolute;
            }
            90%{
                top: 105px;
                position: absolute;/* container height + 5*/
            }
            100%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }
        }

        #pContainer4 {
            position: absolute;
            overflow: hidden;
            width: 200px;
            height: 100px;
            margin-top:253px;
            margin-left:365px;
            color:white;
            opacity: 1;
        }
        #pContainer4 > p {
            position: absolute;
            top: 0;
            left: 0;
            /* transition: opacity 0.5s linear; */
        }
        #pContainer4 > p.show {
            /* opacity: 1; */
            opacity: 1;
            position: absolute;
            -webkit-animation: showP 0.85s linear;
        }
        #pContainer4 > p.hide {
            /* opacity: 0; */
            opacity: 0;
            position: absolute;
            top: -50px;
            -webkit-animation: hideP 0.85s linear;
        }

        @-webkit-keyframes showP {
            0%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }

            100%{
                opacity: 1;
                position: absolute;
                top: 0px
            }
        }

        @-webkit-keyframes hideP {
            0%{
                opacity: 1;
                position: absolute;
                top: 0px;
            }
            80%{
                opacity: 0;
                position: absolute;
            }
            90%{
                top: 105px;
                position: absolute;/* container height + 5*/
            }
            100%{
                opacity: 0;
                position: absolute;
                top: -50px;
            }
        }

        #test{
            display:inline-block;
            border:0;
            position:absolute;
            margin-top:-0px;
            margin-left:-400px;
            background-color:white;
            width:0px;
            height:0px;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
            z-index:9999;

        }
        #test2{
            display:inline-block;
            border:0;
            position:absolute;
            margin-top:-10px;
            margin-left:-90px;
            background-color:white;
            width:0px;
            height:0px;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
            z-index:9999;

        }
        #test3{
            display:inline-block;
            border:0;
            position:absolute;
            margin-top:0px;
            margin-left:200px;
            background-color:white;
            width:0px;
            height:0px;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
            z-index:9999;
        }
        #test4{
            display:inline-block;
            border:0;
            position:absolute;
            margin-top:0px;
            margin-left:500px;
            background-color:white;
            width:0px;
            height:0px;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
            z-index:9999;
        }

        @import  url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');



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

        @media  all and (max-width: 800px) {

            .header-two-bars .header-second-bar nav{
                font-size:14px;
            }

        }

        @media  all and (max-width: 600px) {

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
        #alles{
            margin-top:-100px;
            margin-left:-70px;
        }

        @import  url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
        .login { width: 400px; position:absolute; margin: 16px;font-size: 16px;}
        /* Reset top and bottom margins from certain elements */
        .login-header,.login p { margin-top: 0;margin-bottom: 0;}
        /* The triangle form is achieved by a CSS hack */
        .login-triangle {width: 0;margin-right: auto;margin-left: auto;border: 12px solid transparent;border-bottom-color: #28d;}
        .login-header {background: #28d;padding: 20px;font-size: 1.4em;font-weight: normal;text-align: center;text-transform: uppercase;color: #fff;}
        .login-container {background: #ebebeb;padding: 0px;}
        /* Every row inside .login-container is defined with p tags */
        .login p {padding: 12px;}
        .login input {box-sizing: border-box;display: block;width: 100%;border-width: 1px;border-style: solid;padding: 16px;outline: 0;font-family: inherit;font-size: 0.95em;}
        .login input[type="email"],.login input[type="password"] {background: #fff;border-color: #bbb;color: #555;}
        /* Text fields' focus effect */
        .login input[type="email"]:focus, .login input[type="password"]:focus {  border-color: #888;}
        .login input[type="submit"] {background: #28d;border-color: transparent;color: #fff;cursor: pointer;}
        .login input[type="submit"]:hover {background: #17c;}
        /* Buttons' focus effect */
        .login input[type="submit"]:focus {border-color: #05a;}
        @media  all and (max-width:450px) {
            .login {
                width: 95%;
            }

        }
        .transform{
            transition:height 2s;
        }

        .transform-active{
            width:400px;
        }

             /* https://meyerweb.com/eric/tools/css/reset/
            v2.0 | 20110126
            License: none (public domain)
         */

         html, body, div, span, applet, object, iframe,
         h1, h2, h3, h4, h5, h6, p, blockquote, pre,
         a, abbr, acronym, address, big, cite, code,
         del, dfn, em, img, ins, kbd, q, s, samp,
         small, strike, strong, sub, sup, tt, var,
         b, u, i, center,
         dl, dt, dd, ol, ul, li,
         fieldset, form, label, legend,
         table, caption, tbody, tfoot, thead, tr, th, td,
         article, aside, canvas, details, embed,
         figure, figcaption, footer, header, hgroup,
         menu, nav, output, ruby, section, summary,
         time, mark, audio, video {
             margin: 0;
             padding: 0;
             border: 0;
             font-size: 100%;
             font: inherit;
             vertical-align: baseline;
         }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }


        /* --------------------------------

        Primary style

        -------------------------------- */
        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        *, *:after, *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-size: 100%;
            font-family: "PT Sans", sans-serif;
            color: #505260;
            background-color: transparent;
        }

        a {
            color: #2f889a;
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        input, textarea {
            font-family: "PT Sans", sans-serif;
            font-size: 16px;
            font-size: 1rem;
        }
        input::-ms-clear, textarea::-ms-clear {
            display: none;
        }

        /* --------------------------------

        xcody-info

        -------------------------------- */
        #cody-info {
            position: relative;
            background: #FFF;
            height: 44px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }
        #cody-info .cody-info-logo {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -15px;
            margin-top: -13px;
        }
        #cody-info .cody-info-logo svg {
            display: block;
            -webkit-transition: opacity, 0.2s;
            -moz-transition: opacity, 0.2s;
            transition: opacity, 0.2s;
        }
        #cody-info .cody-info-logo svg:hover {
            opacity: .9;
        }
        #cody-info .cody-info-logo .cody-info-logo-svg {
            fill: #343642;
        }
        #cody-info li {
            position: absolute;
            top: 0;
        }
        #cody-info li:first-child {
            left: 0;
        }
        #cody-info li:last-child {
            right: 0;
        }
        #cody-info li a {
            display: block;
            width: 44px;
            height: 44px;
            position: relative;
            -webkit-transition: background 0.2s;
            -moz-transition: background 0.2s;
            transition: background 0.2s;
        }
        #cody-info li a:hover {
            background-color: #29889b;
        }
        #cody-info li a:hover .cody-info-buttons-svg {
            fill: #FFF;
        }
        #cody-info li svg {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -16px;
            margin-left: -16px;
        }
        #cody-info li .cody-info-buttons-svg {
            fill: #29889b;
        }
        #cody-info.cody-info-bottom {
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1;
            box-shadow: 0 -1px 1px rgba(0, 0, 0, 0.1);
        }
        #cody-info::after {
            content: '';
            display: table;
            clear: both;
        }
        @media  only screen and (min-width: 600px) {
            #cody-info {
                height: 60px;
            }
            #cody-info li a {
                height: 60px;
                width: 60px;
            }
        }

        /* --------------------------------

        Main components

        -------------------------------- */
        header[role=banner] {
            position: relative;
            height: 50px;
            background: #343642;
        }
        header[role=banner] #cd-logo {
            float: left;
            margin: 4px 0 0 5%;
            /* reduce logo size on mobile and make sure it is left aligned with the transform-origin property */
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
        }
        header[role=banner] #cd-logo img {
            display: block;
        }
        header[role=banner]::after {
            /* clearfix */
            content: '';
            display: table;
            clear: both;
        }
        @media  only screen and (min-width: 768px) {
            header[role=banner] {
                height: 80px;
            }
            header[role=banner] #cd-logo {
                margin: 20px 0 0 5%;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

        .main-nav {
            float: right;
            margin-right: 5%;
            width: 44px;
            height: 100%;
            background: url("../img/cd-icon-menu.svg") no-repeat center center;
            cursor: pointer;
        }
        .main-nav ul {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .main-nav ul.is-visible {
            -webkit-transform: translateY(50px);
            -moz-transform: translateY(50px);
            -ms-transform: translateY(50px);
            -o-transform: translateY(50px);
            transform: translateY(50px);
        }
        .main-nav a {
            display: block;
            height: 50px;
            line-height: 50px;
            padding-left: 5%;
            background: #292a34;
            border-top: 1px solid #3b3d4b;
            color: #FFF;
        }
        @media  only screen and (min-width: 768px) {
            .main-nav {
                width: auto;
                height: auto;
                background: none;
                cursor: auto;
            }
            .main-nav ul {
                position: static;
                width: auto;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                line-height: 80px;
            }
            .main-nav ul.is-visible {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
            .main-nav li {
                display: inline-block;
                margin-left: 1em;
            }
            .main-nav li:nth-last-child(2) {
                margin-left: 2em;
            }
            .main-nav a {
                display: inline-block;
                height: auto;
                line-height: normal;
                background: transparent;
            }
            .main-nav a.cd-signin, .main-nav a.cd-signup {
                padding: .6em 1em;
                border: 1px solid rgba(255, 255, 255, 0.6);
                border-radius: 50em;
            }
            .main-nav a.cd-signup {
                background: #2f889a;
                border: none;
            }
        }

        /* --------------------------------

        xsigin/signup popup

        -------------------------------- */
        .cd-user-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(52, 54, 66, 0.9);
            z-index: 3;
            overflow-y: auto;
            cursor: pointer;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.3s 0, visibility 0 0.3s;
            -moz-transition: opacity 0.3s 0, visibility 0 0.3s;
            transition: opacity 0.3s 0, visibility 0 0.3s;
        }
        .cd-user-modal.is-visible {
            visibility: visible;
            opacity: 1;
            -webkit-transition: opacity 0.3s 0, visibility 0 0;
            -moz-transition: opacity 0.3s 0, visibility 0 0;
            transition: opacity 0.3s 0, visibility 0 0;
        }
        .cd-user-modal.is-visible .cd-user-modal-container {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .cd-user-modal-container {
            position: relative;
            width: 90%;
            max-width: 600px;
            background: #FFF;
            margin: 3em auto 4em;
            cursor: auto;
            border-radius: 0.25em;
            -webkit-transform: translateY(-30px);
            -moz-transform: translateY(-30px);
            -ms-transform: translateY(-30px);
            -o-transform: translateY(-30px);
            transform: translateY(-30px);
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            transition-duration: 0.3s;
        }
        .cd-user-modal-container .cd-switcher:after {
            content: "";
            display: table;
            clear: both;
        }
        .cd-user-modal-container .cd-switcher li {
            width: 50%;
            float: left;
            text-align: center;
        }
        .cd-user-modal-container .cd-switcher li:first-child a {
            border-radius: .25em 0 0 0;
        }
        .cd-user-modal-container .cd-switcher li:last-child a {
            border-radius: 0 .25em 0 0;
        }
        .cd-user-modal-container .cd-switcher a {
            display: block;
            width: 100%;
            height: 50px;
            line-height: 50px;
            background: #d2d8d8;
            color: #809191;
        }
        .cd-user-modal-container .cd-switcher a.selected {
            background: #FFF;
            color: #505260;
        }
        @media  only screen and (min-width: 600px) {
            .cd-user-modal-container {
                margin: 4em auto;
            }
            .cd-user-modal-container .cd-switcher a {
                height: 70px;
                line-height: 70px;
            }
        }

        .cd-form {
            padding: 1.4em;
        }
        .cd-form .fieldset {
            position: relative;
            margin: 1.4em 0;
        }
        .cd-form .fieldset:first-child {
            margin-top: 0;
        }
        .cd-form .fieldset:last-child {
            margin-bottom: 0;
        }
        .cd-form label {
            font-size: 14px;
            font-size: 0.875rem;
        }
        .cd-form label.image-replace {
            /* replace text with an icon */
            display: inline-block;
            position: absolute;
            left: 15px;
            top: 50%;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 20px;
            width: 20px;
            overflow: hidden;
            text-indent: 100%;
            white-space: nowrap;
            color: transparent;
            text-shadow: none;
            background-repeat: no-repeat;
            background-position: 50% 0;
        }
        .cd-form label.cd-username {
            background-image: url("../img/cd-icon-username.svg");
        }
        .cd-form label.cd-email {
            background-image: url("../img/cd-icon-email.svg");
        }
        .cd-form label.cd-password {
            background-image: url("../img/cd-icon-password.svg");
        }
        .cd-form input {
            margin: 0;
            padding: 0;
            border-radius: 0.25em;
        }
        .cd-form input.full-width {
            width: 100%;
        }
        .cd-form input.has-padding {
            padding: 12px 20px 12px 50px;
        }
        .cd-form input.has-border {
            border: 1px solid #d2d8d8;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
        }
        .cd-form input.has-border:focus {
            border-color: #343642;
            box-shadow: 0 0 5px rgba(52, 54, 66, 0.1);
            outline: none;
        }
        .cd-form input.has-error {
            border: 1px solid #d76666;
        }
        .cd-form input[type=password] {
            /* space left for the HIDE button */
            padding-right: 65px;
        }
        .cd-form input[type=submit] {
            padding: 16px 0;
            cursor: pointer;
            background: #2f889a;
            color: #FFF;
            font-weight: bold;
            border: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
        }
        .no-touch .cd-form input[type=submit]:hover, .no-touch .cd-form input[type=submit]:focus {
            background: #3599ae;
            outline: none;
        }
        .cd-form .hide-password {
            display: inline-block;
            position: absolute;
            right: 0;
            top: 0;
            padding: 6px 15px;
            border-left: 1px solid #d2d8d8;
            top: 50%;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 14px;
            font-size: 0.875rem;
            color: #343642;
        }
        .cd-form .cd-error-message {
            display: inline-block;
            position: absolute;
            left: -5px;
            bottom: -35px;
            background: rgba(215, 102, 102, 0.9);
            padding: .8em;
            z-index: 2;
            color: #FFF;
            font-size: 13px;
            font-size: 0.8125rem;
            border-radius: 0.25em;
            /* prevent click and touch events */
            pointer-events: none;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.2s 0, visibility 0 0.2s;
            -moz-transition: opacity 0.2s 0, visibility 0 0.2s;
            transition: opacity 0.2s 0, visibility 0 0.2s;
        }
        .cd-form .cd-error-message::after {
            /* triangle */
            content: '';
            position: absolute;
            left: 22px;
            bottom: 100%;
            height: 0;
            width: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid rgba(215, 102, 102, 0.9);
        }
        .cd-form .cd-error-message.is-visible {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.2s 0, visibility 0 0;
            -moz-transition: opacity 0.2s 0, visibility 0 0;
            transition: opacity 0.2s 0, visibility 0 0;
        }
        @media  only screen and (min-width: 600px) {
            .cd-form {
                padding: 2em;
            }
            .cd-form .fieldset {
                margin: 2em 0;
            }
            .cd-form .fieldset:first-child {
                margin-top: 0;
            }
            .cd-form .fieldset:last-child {
                margin-bottom: 0;
            }
            .cd-form input.has-padding {
                padding: 16px 20px 16px 50px;
            }
            .cd-form input[type=submit] {
                padding: 16px 0;
            }
        }

        .cd-form-message {
            padding: 1.4em 1.4em 0;
            font-size: 14px;
            font-size: 0.875rem;
            line-height: 1.4;
            text-align: center;
        }
        @media  only screen and (min-width: 600px) {
            .cd-form-message {
                padding: 2em 2em 0;
            }
        }

        .cd-form-bottom-message {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -30px;
            text-align: center;
            font-size: 14px;
            font-size: 0.875rem;
        }
        .cd-form-bottom-message a {
            color: #FFF;
            text-decoration: underline;
        }

        .cd-close-form {
            /* form X button on top right */
            display: block;
            position: absolute;
            width: 40px;
            height: 40px;
            right: 0;
            top: -40px;
            background: url("../img/cd-icon-close.svg") no-repeat center center;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
        }
        @media  only screen and (min-width: 1170px) {
            .cd-close-form {
                display: none;
            }
        }

        #cd-login, #cd-signup, #cd-reset-password {
            display: none;
        }

        #cd-login.is-selected, #cd-signup.is-selected, #cd-reset-password.is-selected {
            display: block;
        }


            .main-nav {

                margin-top:-78px;
                z-index:9999;
            }

        //Reusing bootstrap 3 panel CSS
                              .panel {
                                  background-color: #FFFFFF;
                                  border: 1px solid rgba(0, 0, 0, 0);
                                  border-radius: 4px 4px 4px 4px;
                                  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
                                  margin-bottom: 20px;
                              }

        .panel-primary {
            border-color: #428BCA;
            width:350px;
            position:relative;
            margin-left:-20px;
            margin-top:10px;
        }

        .panel-primary > .panel-heading {
            background-color: transparent;
            border-color: #428BCA;
            color: black;
        }

        .panel-heading {
            border-bottom: 1px solid rgba(0, 0, 0, 0);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            padding: 10px 15px;
        }

        .panel-title {
            font-size: 16px;
            margin-bottom: 0;
            margin-top: 0;
        }

        .panel-body:before, .panel-body:after {
            content: " ";
            display: table;
        }

        .panel-body:before, .panel-body:after {
            content: " ";
            display: table;
        }

        .panel-body:after {
            clear: both;
        }

        .panel-body {
            padding: 15px;
            width:480px;
        }

        .panel-footer {
            background-color: #F5F5F5;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            border-top: 1px solid #DDDDDD;
            padding: 0px 0px;
        }

        //CSS from v3 snipp
          .user-row {
              margin-bottom: 14px;
          }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 0px 0;
            padding: 5px;
            height: 10px;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        @media (min-width: 1200px) {
            .span8 {
                width: 400px;
                background-color: transparent;
                position:absolute;
                margin-top:-70px;
                margin-left:800px;
                border: 0px solid rgba(0, 0, 0, 0);
            }
        }


    </style>

</head>
<body>
<header class="header-two-bars">

    <div class="header-first-bar">

        <div class="header-limiter">

            <h1><a href="#">Wheels<i style="color:mediumpurple;">Online</i></a></h1>

            <nav>
                <a href="#" class="selected">Home</a>
                <a href="./over-ons/nl">Over Ons</a>
                <a href="./informatie/nl">Informatie</a>
                <a href="./contact/nl">Contact</a>
            </nav>



        </div>

    </div>
    <?php if(Route::has('login')): ?>
        <?php if(Auth::check()): ?>
            <div class="profile_top">
            <div class="container">
                <div class="well span8 offset2">
                    <div class="row-fluid user-row">
                        <div class="span1">
                            <img class="img-circle"
                                 src="<?php echo e(Auth::user()->profile_picture); ?>"
                                 alt="User Pic">
                        </div>
                        <div class="span10">
                            <strong style="color:black;"><?php echo e(Auth::user()->name); ?></strong>
                            <div class="text-muted"><?php echo e(Auth::user()->user_level); ?></div>
                        </div>
                        <div class="span1 dropdown-user" data-for=".cyruxx">
                            <i class="icon-chevron-down text-muted"></i>
                        </div>
                    </div>
                    <div class="row-fluid user-infos cyruxx">
                        <div class="span10 offset1">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <img class="img-circle"
                                                 src="<?php echo e(Auth::user()->profile_picture); ?>"
                                                 alt="User Pic">
                                        </div>
                                        <div class="span6">
                                            <strong><?php echo e(Auth::user()->name); ?> </strong><a href="http://localhost/wheelsonline/"><i class="icon-edit icon-black"></i></a> <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-remove icon-black"></i></a><br>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form>
                                            <table class="table table-condensed table-responsive table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td><?php echo e(Auth::user()->email); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tel:</td>
                                                    <td><?php echo e(Auth::user()->telefoon); ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    var panels = $('.user-infos');
                    var panelsButton = $('.dropdown-user');
                    panels.hide();

                    //Click dropdown
                    panelsButton.click(function() {
                        //get data-for attribute
                        var dataFor = $(this).attr('data-for');
                        var idFor = $(dataFor);

                        //current button
                        var currentButton = $(this);
                        idFor.slideToggle(400, function() {
                            //Completed slidetoggle
                            if(idFor.is(':visible'))
                            {
                                currentButton.html('<i class="icon-chevron-up text-muted"></i>');
                            }
                            else
                            {
                                currentButton.html('<i class="icon-chevron-down text-muted"></i>');
                            }
                        })
                    });


                    $('[data-toggle="tooltip"]').tooltip();

                    $('button').click(function(e) {
                        e.preventDefault();
                        alert("This is a demo.\n :-)");
                    });
                });
            </script>
            </div>
        <?php else: ?>
            <div class="signin_up">
                <nav class="main-nav">
                <ul>
                    <li><a class="cd-signin" href="#0"><?php echo app('translator')->getFromJson('welkom_blade/file.inloggen'); ?></a></li>
                    <li><a class="cd-signup" href="#0"><?php echo app('translator')->getFromJson('welkom_blade/file.registreren'); ?></a></li>

                </ul>
            </nav>

            <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
                <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
                    <ul class="cd-switcher">

                        <li><a href="#0">Sign in</a></li>
                        <li><a href="#0">New account</a></li>
                    </ul>

                    <div id="cd-login"> <!-- log in form -->
                        <form class="cd-form form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signin-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="email" type="email" name="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signin-password">Password</label>
                                <input class="full-width has-padding has-border" id="password" type="password" name="password" required  placeholder="Password">
                                <a href="#0" class="hide-password">Hide</a>
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input type="checkbox" id="remember-me" checked>
                                <label for="remember-me">Remember me</label>
                            </p>

                            <p class="fieldset">
                                <input class="full-width" type="submit" value="Login">
                            </p>
                        </form>

                        <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                        <!-- <a href="#0" class="cd-close-form">Close</a> -->
                    </div> <!-- cd-login -->

                    <div id="cd-signup"> <!-- sign up form -->
                        <form class="cd-form form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <p class="fieldset">
                                <label class="image-replace cd-username" for="signup-username">Username</label>
                                <input class="full-width has-padding has-border" id="name" type="text" name="name"  placeholder="Username">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signup-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="email" type="email" name="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signup-password">Password</label>
                                <input class="full-width has-padding has-border" id="password" type="password" name="password" placeholder="Password" required>
                                <a href="#0" class="hide-password">Hide</a>
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signup-password">Confirm Password</label>
                                <input class="full-width has-padding has-border" id="password-confirm" type="password" name="password_confirmation" placeholder="Password" required>
                                <a href="#0" class="hide-password">Hide</a>
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input type="checkbox" id="accept-terms">
                                <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                            </p>

                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Create account">
                            </p>
                        </form>

                        <!-- <a href="#0" class="cd-close-form">Close</a> -->
                    </div> <!-- cd-signup -->

                    <div id="cd-reset-password"> <!-- reset password form -->
                        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                        <form class="cd-form">
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Reset password">
                            </p>
                        </form>

                        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                    </div> <!-- cd-reset-password -->
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-user-modal-container -->
            </div> <!-- cd-user-modal -->
            <script>
                jQuery(document).ready(function($){
                    var $form_modal = $('.cd-user-modal'),
                        $form_login = $form_modal.find('#cd-login'),
                        $form_signup = $form_modal.find('#cd-signup'),
                        $form_forgot_password = $form_modal.find('#cd-reset-password'),
                        $form_modal_tab = $('.cd-switcher'),
                        $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
                        $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
                        $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
                        $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
                        $main_nav = $('.main-nav');

                    //open modal
                    $main_nav.on('click', function(event){

                        if( $(event.target).is($main_nav) ) {
                            // on mobile open the submenu
                            $(this).children('ul').toggleClass('is-visible');
                        } else {
                            // on mobile close submenu
                            $main_nav.children('ul').removeClass('is-visible');
                            //show modal layer
                            $form_modal.addClass('is-visible');
                            //show the selected form
                            ( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
                        }

                    });

                    //close modal
                    $('.cd-user-modal').on('click', function(event){
                        if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
                            $form_modal.removeClass('is-visible');
                        }
                    });
                    //close modal when clicking the esc keyboard button
                    $(document).keyup(function(event){
                        if(event.which=='27'){
                            $form_modal.removeClass('is-visible');
                        }
                    });

                    //switch from a tab to another
                    $form_modal_tab.on('click', function(event) {
                        event.preventDefault();
                        ( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
                    });

                    //hide or show password
                    $('.hide-password').on('click', function(){
                        var $this= $(this),
                            $password_field = $this.prev('input');

                        ( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
                        ( 'Hide' == $this.text() ) ? $this.text('Show') : $this.text('Hide');
                        //focus and move cursor to the end of input field
                        $password_field.putCursorAtEnd();
                    });

                    //show forgot-password form
                    $forgot_password_link.on('click', function(event){
                        event.preventDefault();
                        forgot_password_selected();
                    });

                    //back to login from the forgot-password form
                    $back_to_login_link.on('click', function(event){
                        event.preventDefault();
                        login_selected();
                    });

                    function login_selected(){
                        $form_login.addClass('is-selected');
                        $form_signup.removeClass('is-selected');
                        $form_forgot_password.removeClass('is-selected');
                        $tab_login.addClass('selected');
                        $tab_signup.removeClass('selected');
                    }

                    function signup_selected(){
                        $form_login.removeClass('is-selected');
                        $form_signup.addClass('is-selected');
                        $form_forgot_password.removeClass('is-selected');
                        $tab_login.removeClass('selected');
                        $tab_signup.addClass('selected');
                    }

                    function forgot_password_selected(){
                        $form_login.removeClass('is-selected');
                        $form_signup.removeClass('is-selected');
                        $form_forgot_password.addClass('is-selected');
                    }

        //        //REMOVE THIS - it's just to show error messages
        //        $form_login.find('input[type="submit"]').on('click', function(event){
        //            event.preventDefault();
        //            $form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
        //        });
        //        $form_signup.find('input[type="submit"]').on('click', function(event){
        //            event.preventDefault();
        //            $form_signup.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
        //        });


                    //IE9 placeholder fallback
                    //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
                    if(!Modernizr.input.placeholder){
                        $('[placeholder]').focus(function() {
                            var input = $(this);
                            if (input.val() == input.attr('placeholder')) {
                                input.val('');
                            }
                        }).blur(function() {
                            var input = $(this);
                            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                                input.val(input.attr('placeholder'));
                            }
                        }).blur();
                        $('[placeholder]').parents('form').submit(function() {
                            $(this).find('[placeholder]').each(function() {
                                var input = $(this);
                                if (input.val() == input.attr('placeholder')) {
                                    input.val('');
                                }
                            })
                        });
                    }

                });


                //credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
                jQuery.fn.putCursorAtEnd = function() {
                    return this.each(function() {
                        // If this function exists...
                        if (this.setSelectionRange) {
                            // ... then use it (Doesn't work in IE)
                            // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
                            var len = $(this).val().length * 2;
                            this.setSelectionRange(len, len);
                        } else {
                            // ... otherwise replace the contents with itself
                            // (Doesn't work in Google Chrome)
                            $(this).val($(this).val());
                        }
                    });
                };

                jQuery('#cody-info ul li').eq(1).on('click', function(){
                    $('#cody-info').hide();
                });

            </script>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="header-second-bar">

        <div class="header-limiter">
            <h2><a href="#">Welkom bij WheelsOnline</a></h2>

            <nav>
                <a href="#"><i class="fa fa-comments-o"></i> Veel gestelde vragen</a>
                <a href="#"><i class="fa fa-file-text"></i> Mijn account</a>
                <a href="./nl"><img src="./resources/assets/images/nl-vlag.png" style="position:absolute; width:20px; margin-top:-15px; margin-left:15px;"></a>
                <a href="./en"><img src="./resources/assets/images/usa-vlag.png" style="position:absolute; width:20px; margin-top:-15px; margin-left:40px;"></a>


            </nav>

        </div>

    </div>

</header>

<div class="flex-center position-ref full-height">

    <div id="alles">
        <div class="content">
            <h1 class="text-begin">KIES UW ONDERDEEL</h1>

            <div id="invissible-1" onmouseover="velgenomhoog()" onmouseout="velgenomlaag()"></div>

            <div id="invissible-2" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();"></div>

            <div id="invissible-3" onmouseover="showreparatiein();" onmouseout="showreparatieout();"></div>

            <div id="invissible-4" onmouseover="showkoopjeshoekin();" onmouseout="showkoopjeshoekout();"></div>

            
            <img src="./resources/assets/images/info.png" id="vinfo" onclick="showInfo()" onmouseover="velgenomhooginfo();" onmouseout="velgenomlaaginfo();">
            <a href="#" id="vbutton" onclick="tovelgenpage();" onmouseover="velgenomhoog()" onmouseout="velgenomlaag()"><span></span>Bekijken</a>

            <div id="pContainer" onmouseover="velgenomhoog()" onmouseout="velgenomlaag()">
                <p id="text" class="show"></p>
                <p id="text02" class="hide"></p>
            </div>

            
            <img src="./resources/assets/images/info.png" id="oinfo" onclick="showInfo2()" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();">
            <a href="#" id="obutton" onclick="toonderdelenpage();" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();"><span></span>Bekijken</a>

            <div id="pContainer2" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();">
                <p id="text" class="show"></p>
                <p id="text02" class="hide"></p>
            </div>

            
            <img src="./resources/assets/images/info.png" id="rinfo" onclick="showInfo3()" onmouseover="showreparatiein();" onmouseout="showreparatieout();">
            <a href="#" id="rbutton" onclick="toreparatiepage();" onmouseover="showreparatiein();" onmouseout="showreparatieout();"><span></span>Bekijken</a>

            <div id="pContainer3" onmouseover="showreparatiein();" onmouseout="showreparatieout();">
                <p id="text" class="show"></p>
                <p id="text02" class="hide"></p>
            </div>

            
            <img src="./resources/assets/images/info.png" id="kinfo" onclick="showInfo4()" onmouseover="showkoopjeshoekin();" onmouseout="showkoopjeshoekout();">
            <a href="#" id="kbutton" onclick="tokoopjespage();" onmouseover="showkoopjeshoekin();" onmouseout="showkoopjeshoekout();"><span></span>Bekijken</a>

            <div id="pContainer4" onmouseover="showkoopjeshoekin();" onmouseout="showkoopjeshoekout();">
                <p id="text" class="show"></p>
                <p id="text02" class="hide"></p>
            </div>


            <a href="javascript:toonderdelenpage('URL')"><img src="./resources/assets/images/bmw-auto-onderdelen.png" id="bmwonderdelenimage" onclick="toonderdelenpage();"  onmouseover="showonderdelenin();" onmouseout="showonderdelenout();" style="width:400px; margin-left:-300px; margin-top:-50px; position: absolute; transition: margin-top 1s;"></a>
            <a href="javascript:tovelgenpage('URL')"><img src="./resources/assets/images/bmwvelgen2.png" id="bmwvelgenimage" class="bmwvelgenimage" onclick="tovelgenpage();" onmouseover="showvelgenin();" onmouseout="showvelgenout();" style="width:400px; margin-left:-600px; margin-top:-50px;position: absolute; transition: margin-top 1s;"></a>
            <a href="javascript:toreparatiepage('URL')"><img src="./resources/assets/images/reparatie2.png" id="bmwreparatieimage" onclick="toreparatiepage();" onmouseover="showreparatiein();" onmouseout="showreparatieout();" style="width:400px; margin-left:0px; margin-top:-50px;position: absolute; transition: margin-top 1s;"></a>
            <a href="javascript:tokoopjespage('URL')"><img src="./resources/assets/images/koopjeshoek.png" id="bmwkoopjesimage" onmouseover="showkoopjeshoekin();" onmouseout="showkoopjeshoekout();" style="width:400px; margin-left:300px; margin-top:-50px;position: absolute; transition: margin-top 1s;"></a>
            <h2 id="velgen-text">Velgen</h2>
            <h2 id="onderdelen-text">Onderdelen</h2>
            <h2 id="reparatie-text">Reparatie</h2>
            <h2 id="koopjeshoek-text">Koopjeshoek</h2>

            <h2 id="velgen-text2">Velgen</h2>
            <h2 id="onderdelen-text2">Onderdelen</h2>
            <h2 id="reparatie-text2">Reparatie</h2>
            <h2 id="koopjeshoek-text2">Koopjeshoek</h2>



            <div id="test"></div>
            <div id="test2"></div>
            <div id="test3"></div>
            <div id="test4"></div>


            
            <script>
                //Velgen afbeelding
                document.getElementById("bmwvelgenimage").addEventListener("mouseover", function() {
                    document.body.style.backgroundImage = "url(./resources/assets/images/velgen_background.jpg)";
                    document.getElementById("vbutton").style.opacity = "1";
                    document.getElementById("vinfo").style.opacity = "1";
                }, false);
                document.getElementById("bmwvelgenimage").addEventListener("mouseout", function() {
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.getElementById("vbutton").style.opacity = "0";
                    document.getElementById("vinfo").style.opacity = "0";
                }, false);

                // Afbeelding hover voor text velgen en background javascript
                function showvelgenin() {
                    document.getElementById("velgen-text").style.display = "block";
                    document.body.style.backgroundImage = "url(./resources/assets/images/velgen_background.jpg)";
                    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
                    document.getElementById("pContainer").style.opacity = "1";
                }
                function showvelgenout() {
                    document.getElementById("velgen-text").style.display = "none";
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.body.style.boxShadow = "none";
                    document.getElementById("pContainer").style.opacity = "0";

                }

                // Afbeelding velgen hover voor show/hide button javascript
                function velgenomhoog() {
                    document.getElementById("bmwvelgenimage").style.width = "420px";
                    document.getElementById("bmwvelgenimage").style.marginTop = "-100px";
                    document.getElementById("bmwvelgenimage").style.opacity = "1";
                    document.getElementById("vbutton").style.opacity = "1";
                    document.getElementById("vinfo").style.opacity = "1";
                    document.body.style.backgroundImage = "url(./resources/assets/images/velgen_background.jpg)";
                    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
                    document.getElementById("velgen-text").style.display = "block";
                    document.getElementById("pContainer").style.opacity = "1";

                }
                function velgenomlaag() {
                    document.getElementById("bmwvelgenimage").style.width = "400px";
                    document.getElementById("bmwvelgenimage").style.marginTop = "-50px";
                    document.getElementById("bmwvelgenimage").style.opacity = "0.8";
                    document.getElementById("vbutton").style.opacity = "0";
                    document.getElementById("vinfo").style.opacity = "0";
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.body.style.boxShadow = "none";
                    document.getElementById("velgen-text").style.display = "none";
                    document.getElementById("pContainer").style.opacity = "0";
                }

                // Afbeelding velgen hover voor show/hide info javascript
                function velgenomhooginfo() {
                    document.getElementById("bmwvelgenimage").style.width = "420px";
                    document.getElementById("bmwvelgenimage").style.marginTop = "-100px";
                    document.getElementById("bmwvelgenimage").style.opacity = "1";
                    document.getElementById("vinfo").style.opacity = "1";
                    document.getElementById("vbutton").style.opacity = "1";
                    document.body.style.backgroundImage = "url(./resources/assets/images/velgen_background.jpg)";
                    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
                    document.getElementById("velgen-text").style.display = "block";
                    document.getElementById("pContainer").style.opacity = "1";

                }
                function velgenomlaaginfo() {
                    document.getElementById("bmwvelgenimage").style.width = "400px";
                    document.getElementById("bmwvelgenimage").style.marginTop = "-50px";
                    document.getElementById("bmwvelgenimage").style.opacity = "0.8";
                    document.getElementById("vinfo").style.opacity = "0";
                    document.getElementById("vbutton").style.opacity = "0";
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.body.style.boxShadow = "none";
                    document.getElementById("velgen-text").style.display = "none";
                    document.getElementById("pContainer").style.opacity = "0";
                }

                //show info velgen
                function showInfo() {
                    var advices = ["Hier komt info over de velgen die Wheelsonline verkoopt!!!!"];

                    $('#pContainer p.hide')
                        .text(advices)
                        .removeClass('hide')
                        .addClass('show')
                        .siblings('p')
                        .removeClass('show')
                        .addClass('hide');
                }
            </script>

            
            <script>
                //Onderdelen afbeelding
                document.getElementById("onderdelen").addEventListener("mouseover", function() {
                    document.body.style.backgroundImage = "url(../resources/assets/images/onderdelen.jpg)";
                }, false);
                document.getElementById("onderdelen").addEventListener("mouseout", function() {
                    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
                }, false);

                // Afbeelding hover voor text onderdelen en background javascript
                function showonderdelenin() {
                    document.getElementById("bmwonderdelenimage").style.width = "420px";
                    document.getElementById("bmwonderdelenimage").style.marginTop = "-100px";
                    document.getElementById("bmwonderdelenimage").style.opacity = "1";
                    document.getElementById("bmwonderdelenimage").style.zIndex = "9999";
                    document.getElementById("obutton").style.opacity = "1";
                    document.getElementById("oinfo").style.opacity = "1";
                    document.getElementById("onderdelen-text").style.display = "block";
                    document.body.style.backgroundImage = "url(./resources/assets/images/onderdelen.jpg)";
                    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
                    document.getElementById("pContainer2").style.opacity = "1";
                }
                function showonderdelenout() {
                    document.getElementById("bmwonderdelenimage").style.width = "400px";
                    document.getElementById("bmwonderdelenimage").style.marginTop = "-50px";
                    document.getElementById("bmwonderdelenimage").style.opacity = "0.8";
                    document.getElementById("bmwonderdelenimage").style.zIndex = "";
                    document.getElementById("obutton").style.opacity = "0";
                    document.getElementById("oinfo").style.opacity = "0";
                    document.getElementById("onderdelen-text").style.display = "none";
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.body.style.boxShadow = "none";
                    document.getElementById("pContainer2").style.opacity = "0";
                }
                //show info onderdelen
                function showInfo2() {
                    var advices = ["Hier komt info over de velgen die Wheelsonline verkoopt!!!!"];

                    $('#pContainer2 p.hide')
                        .text(advices)
                        .removeClass('hide')
                        .addClass('show')
                        .siblings('p')
                        .removeClass('show')
                        .addClass('hide');
                }

            </script>

            
            <script>
                //Reparatie afbeelding
                document.getElementById("bmwreparatie").addEventListener("mouseover", function() {
                    document.body.style.backgroundImage = "url(../resources/assets/images/reparatie_back.jpg)";
                }, false);
                document.getElementById("bmwreparatie").addEventListener("mouseout", function() {
                    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
                }, false);

                // Afbeelding hover voor text reparatie en background javascript
                function showreparatiein() {
                    document.getElementById("bmwreparatieimage").style.width = "420px";
                    document.getElementById("bmwreparatieimage").style.marginTop = "-100px";
                    document.getElementById("bmwreparatieimage").style.opacity = "1";
                    document.getElementById("bmwreparatieimage").style.zIndex = "9999";
                    document.getElementById("reparatie-text").style.display = "block";
                    document.getElementById("rbutton").style.opacity = "1";
                    document.getElementById("rinfo").style.opacity = "1";
                    document.body.style.backgroundImage = "url(./resources/assets/images/reparatie_back.jpg)";
                    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
                    document.getElementById("pContainer3").style.opacity = "1";
                }
                function showreparatieout() {
                    document.getElementById("bmwreparatieimage").style.width = "400px";
                    document.getElementById("bmwreparatieimage").style.marginTop = "-50px";
                    document.getElementById("bmwreparatieimage").style.opacity = "0.8";
                    document.getElementById("bmwreparatieimage").style.zIndex = "";
                    document.getElementById("reparatie-text").style.display = "none";
                    document.getElementById("rbutton").style.opacity = "0";
                    document.getElementById("rinfo").style.opacity = "0";
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.body.style.boxShadow = "none";
                    document.getElementById("pContainer3").style.opacity = "0";
                }

                function showInfo3() {
                    var advices = ["Hier komt info over de velgen die Wheelsonline verkoopt!!!!"];

                    $('#pContainer3 p.hide')
                        .text(advices)
                        .removeClass('hide')
                        .addClass('show')
                        .siblings('p')
                        .removeClass('show')
                        .addClass('hide');
                }
            </script>

            
            <script>
                // Afbeelding hover voor text koopjeshoek en background javascript
                function showkoopjeshoekin(){
                    document.getElementById("bmwkoopjesimage").style.width = "420px";
                    document.getElementById("bmwkoopjesimage").style.marginTop = "-100px";
                    document.getElementById("bmwkoopjesimage").style.opacity = "1";
                    document.getElementById("bmwkoopjesimage").style.zIndex = "9999";

                    document.getElementById("koopjeshoek-text").style.display = "block";
                    document.body.style.backgroundImage = "url(./resources/assets/images/uitverkoop.jpg)";
                    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";

                    document.getElementById("kbutton").style.opacity = "1";
                    document.getElementById("kinfo").style.opacity = "1";
                    document.getElementById("pContainer4").style.opacity = "1";
                }
                function showkoopjeshoekout() {
                    document.getElementById("bmwkoopjesimage").style.width = "400px";
                    document.getElementById("bmwkoopjesimage").style.marginTop = "-50px";
                    document.getElementById("bmwkoopjesimage").style.opacity = "0.8";
                    document.getElementById("bmwkoopjesimage").style.zIndex = "";

                    document.getElementById("koopjeshoek-text").style.display = "none";
                    document.body.style.backgroundImage = "url(./resources/assets/images/bmw-back.jpg)";
                    document.body.style.boxShadow = "none";

                    document.getElementById("kbutton").style.opacity = "0";
                    document.getElementById("kinfo").style.opacity = "0";
                    document.getElementById("pContainer4").style.opacity = "0";
                }

                function showInfo4() {
                    var advices = ["Hier komt info over de velgen die Wheelsonline verkoopt!!!!"];

                    $('#pContainer4 p.hide')
                        .text(advices)
                        .removeClass('hide')
                        .addClass('show')
                        .siblings('p')
                        .removeClass('show')
                        .addClass('hide');
                }
            </script>

            <script>
                function tovelgenpage() {
                    document.getElementById("test").style.width = "100%";
                    document.getElementById("test").style.height = "112%";
                    document.getElementById("test").style.marginLeft = "-760px";
                    document.getElementById("test").style.marginTop = "-295px";
                    setTimeout( function() { window.location = "<?php echo e(route('velgen_home')); ?>" }, 20 );
                }

                function toonderdelenpage() {
                    document.getElementById("test2").style.width = "100%";
                    document.getElementById("test2").style.height = "112%";
                    document.getElementById("test2").style.marginLeft = "-760px";
                    document.getElementById("test2").style.marginTop = "-295px";
                    setTimeout( function() { window.location = "<?php echo e(route('home')); ?>" }, 20 );
                }
                function toreparatiepage() {
                    document.getElementById("test3").style.width = "100%";
                    document.getElementById("test3").style.height = "112%";
                    document.getElementById("test3").style.marginLeft = "-760px";
                    document.getElementById("test3").style.marginTop = "-295px";
                    setTimeout( function() { window.location = "<?php echo e(route('home')); ?>" }, 20 );
                }
                function tokoopjespage() {
                    document.getElementById("test4").style.width = "100%";
                    document.getElementById("test4").style.height = "112%";
                    document.getElementById("test4").style.marginLeft = "-760px";
                    document.getElementById("test4").style.marginTop = "-295px";
                    setTimeout( function() { window.location = "<?php echo e(route('home')); ?>" }, 20 );
                }
            </script>
            <script>
                $("#inloggen").click(function() {
                    $(".transform").toggleClass("transform-active");
                });


            </script>
        </div>
    </div>
</div>

</body>
</html>
