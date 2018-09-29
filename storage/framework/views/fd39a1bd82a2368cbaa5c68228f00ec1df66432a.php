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
            zoom:100%;
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
        }
    </style>

</head>
<body>

<header class="header-two-bars">

    <div class="header-first-bar">

        <div class="header-limiter">

            <h1><a href="#">Wheels<span>Online</span></a></h1>

            <nav>
                <a href="<?php echo e(route('landing')); ?>">Home</a>
                <a href="../over-ons/nl">Over Ons</a>
                <a href="../informatie/nl">Informatie</a>
                <a href="./nl" class="selected">Contact</a>
            </nav>
            <?php if(Route::has('login')): ?>
                <?php if(Auth::check()): ?>
                    <a href="<?php echo e(url('/home')); ?>" class="logout-button">Home</a>
                <?php else: ?>
                    <a href="<?php echo e(url('/register')); ?>" class="logout-button"><?php echo app('translator')->getFromJson('welkom_blade/file.registreren'); ?></a>
                    <a href="<?php echo e(url('/login')); ?>" class="logout-button"><?php echo app('translator')->getFromJson('welkom_blade/file.inloggen'); ?></a>
                <?php endif; ?>
            <?php endif; ?>
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

        </div>
    </div>
</div>
</body>
</html>
