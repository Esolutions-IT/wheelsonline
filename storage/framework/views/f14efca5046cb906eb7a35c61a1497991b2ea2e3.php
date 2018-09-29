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
            height: 100vh;
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
            margin-top:-260px;
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
            margin-top:-170px;
            margin-left:-15px;
            font-size:55px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #onderdelen-text{
            position:absolute;
            display:none;
            margin-top:-170px;
            margin-left:-60px;
            font-size:55px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #reparatie-text{
            position:absolute;
            display:none;
            margin-top:-170px;
            margin-left:-45px;
            font-size:55px;
            font-family:"Bebas Neue";
            color:white;
            font-style: Italic;
        }
        #koopjeshoek-text{
            position:absolute;
            display:none;
            margin-top:-170px;
            margin-left:-73px;
            font-size:55px;
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

        #test{
            display:inline-block;
            border:0;
            position:absolute;
            margin-top:-290px;
            margin-left:350px;
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
            margin-top:-290px;
            margin-left:670px;
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
            margin-top:-290px;
            margin-left:970px;
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
    </style>

</head>
<body>

<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">

            <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>"><?php echo app('translator')->getFromJson('welkom_blade/file.inloggen'); ?></a>
                <a href="<?php echo e(url('/register')); ?>"><?php echo app('translator')->getFromJson('welkom_blade/file.registreren'); ?></a>
            <?php endif; ?>



        </div>
    <?php endif; ?>

    <div class="content">
        <h1 class="text-begin">KIES UW ONDERDEEL</h1>

        <div id="invissible-1" onmouseover="velgenomhoog()" onmouseout="velgenomlaag()"></div>

        <div id="invissible-2" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();"></div>

        <div id="invissible-3" onmouseover="showreparatiein();" onmouseout="showreparatieout();"></div>

        
        <img src="../resources/assets/images/info.png" id="vinfo" onclick="showInfo()" onmouseover="velgenomhooginfo();" onmouseout="velgenomlaaginfo();">
        <a href="#" id="vbutton" onclick="tovelgenpage();" onmouseover="velgenomhoog()" onmouseout="velgenomlaag()"><span></span>Bekijken</a>

        <div id="pContainer" onmouseover="velgenomhoog()" onmouseout="velgenomlaag()">
            <p id="text" class="show"></p>
            <p id="text02" class="hide"></p>
        </div>

        
        <img src="../resources/assets/images/info.png" id="oinfo" onclick="showInfo2()" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();">
        <a href="#" id="obutton" onclick="toonderdelenpage();" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();"><span></span>Bekijken</a>

        <div id="pContainer2" onmouseover="showonderdelenin();" onmouseout="showonderdelenout();">
            <p id="text" class="show"></p>
            <p id="text02" class="hide"></p>
        </div>

        
        <img src="../resources/assets/images/info.png" id="rinfo" onclick="showInfo3()" onmouseover="showreparatiein();" onmouseout="showreparatieout();">
        <a href="#" id="rbutton" onclick="toreparatiepage();" onmouseover="showreparatiein();" onmouseout="showreparatieout();"><span></span>Bekijken</a>

        <div id="pContainer3" onmouseover="showreparatiein();" onmouseout="showreparatieout();">
            <p id="text" class="show"></p>
            <p id="text02" class="hide"></p>
        </div>


        <a href="javascript:toonderdelenpage('URL')"><img src="../resources/assets/images/bmw-auto-onderdelen.png" id="bmwonderdelenimage" onclick="toonderdelenpage();"  onmouseover="showonderdelenin();" onmouseout="showonderdelenout();" style="width:400px; margin-left:-300px; margin-top:-50px; position: absolute; transition: margin-top 1s;"></a>
        <a href="javascript:tovelgenpage('URL')"><img src="../resources/assets/images/bmwvelgen2.png" id="bmwvelgenimage" class="bmwvelgenimage" onclick="tovelgenpage();" onmouseover="showvelgenin();" onmouseout="showvelgenout();" style="width:400px; margin-left:-600px; margin-top:-50px;position: absolute; transition: margin-top 1s;"></a>
        <a href="javascript:toreparatiepage('URL')"><img src="../resources/assets/images/reparatie2.png" id="bmwreparatieimage" onclick="toreparatiepage();" onmouseover="showreparatiein();" onmouseout="showreparatieout();" style="width:400px; margin-left:0px; margin-top:-50px;position: absolute; transition: margin-top 1s;"></a>
        <img src="../resources/assets/images/koopjeshoek.png" id="bmwkoopjesimage" onmouseover="showkoopjeshoekin();" onmouseout="showkoopjeshoekout();" style="width:400px; margin-left:300px; margin-top:-50px;position: absolute; transition: margin-top 1s;">
        <h2 id="velgen-text">Velgen</h2>
        <h2 id="onderdelen-text">Onderdelen</h2>
        <h2 id="reparatie-text">Reparatie</h2>
        <h2 id="koopjeshoek-text">Koopjeshoek</h2>

    </div>
</div>

<div id="test"></div>
<div id="test2"></div>
<div id="test3"></div>


<script>
//Velgen afbeelding
    document.getElementById("bmwvelgenimage").addEventListener("mouseover", function() {
        document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
        document.getElementById("vbutton").style.opacity = "1";
        document.getElementById("vinfo").style.opacity = "1";
    }, false);
    document.getElementById("bmwvelgenimage").addEventListener("mouseout", function() {
        document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
        document.getElementById("vbutton").style.opacity = "0";
        document.getElementById("vinfo").style.opacity = "0";
    }, false);

// Afbeelding hover voor text velgen en background javascript
function showvelgenin() {
        document.getElementById("velgen-text").style.display = "block";
        document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
        document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
        document.getElementById("pContainer").style.opacity = "1";
}
function showvelgenout() {
    document.getElementById("velgen-text").style.display = "none";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/onderdelen.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/reparatie_back.jpg)";
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
        document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
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
        document.getElementById("koopjeshoek-text").style.display = "block";
        document.body.style.backgroundImage = "url(../resources/assets/images/uitverkoop.jpg)";
        document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
    }
    function showkoopjeshoekout() {
        document.getElementById("koopjeshoek-text").style.display = "none";
        document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
        document.body.style.boxShadow = "none";
    }
</script>

<script>
    function tovelgenpage() {
        document.getElementById("test").style.width = "100%";
        document.getElementById("test").style.height = "100%";
        document.getElementById("test").style.marginLeft = "0px";
        document.getElementById("test").style.marginTop = "-760px";
        setTimeout( function() { window.location = "<?php echo e(route('home')); ?>" }, 20 );
    }

    function toonderdelenpage() {
        document.getElementById("test2").style.width = "100%";
        document.getElementById("test2").style.height = "100%";
        document.getElementById("test2").style.marginLeft = "0px";
        document.getElementById("test2").style.marginTop = "-760px";
        setTimeout( function() { window.location = "<?php echo e(route('home')); ?>" }, 20 );
    }
    function toreparatiepage() {
        document.getElementById("test3").style.width = "100%";
        document.getElementById("test3").style.height = "100%";
        document.getElementById("test3").style.marginLeft = "0px";
        document.getElementById("test3").style.marginTop = "-760px";
        setTimeout( function() { window.location = "<?php echo e(route('home')); ?>" }, 20 );
    }
</script>


</body>
</html>
