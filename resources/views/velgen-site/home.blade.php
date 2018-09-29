<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/nouislider.min.css')}}"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/velgenstyle.css')}}"/>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--web-fonts-->
		<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<style>
			.banner-text {
				text-align: center;
				padding: 7em 0 0 0;
			}
			/*-- banner-form--*/
			.book-form   label {
				font-size:15px;
				color: #fff;
				text-align: left;
				display: inline-block;
				float: left;
				font-weight: 500;
				margin-bottom: 10px;
				letter-spacing: 1px;
			}
			.book-form label i {
				font-size: 1em;
				margin-right: 10px;
				color: #fd6239;
			}
			.book-form input[type="text"],.book-form input[type="date"],.book-form input[type="time"],.book-form input[type="email"] {
				width: 100%;
				color: #9a9797;
				outline: none;
				font-size: 0.9em;
				line-height: 25px;
				padding: 3px 10px;
				border: 2px solid #fff;
				-webkit-appearance: none;
				margin-bottom: 1em;
				background: none;
				font-family: 'Open Sans', sans-serif;
			}
			.book-form input[type="text"]{
				border: 2px solid #fff;
			}
			.book-form form input[type="submit"] {
				text-transform: capitalize;
				background: #fd6239;
				color: #FFFFFF;
				padding: .7em 2em;
				border: none;
				font-size: .79em;
				outline: none;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
				text-transform: uppercase;
				width: 100%;
				font-weight: 600;
				margin-top: 2.4em;
				-webkit-appearance: none;
			}
			.book-form {
				background: rgba(12, 12, 12, 0.68);
				padding: 2em 2em 7em 2em;
				width: 70%;
				margin: 3em auto 0;
			}
			.book-form p {
				color: #fff;
				font-size: 24px;
				margin-bottom: .8em;
				letter-spacing: 5px;
				word-spacing: 7px;
				text-transform: uppercase;
			}
			.book-form select.form-control {
				outline: none;
				font-size: 1em;
				padding: 5px 10px;
				width: 100%;
				line-height: 25px;
				border-radius: 0;
				background: none;
				color: #9a9797;
				border: 2px solid #fff;
				box-shadow:none!important;
			}
			#header{
				height:100px!important;
			}
			.sticky{
				position: fixed;
				top:0;
				width:100%;
				z-index: 9999;
			}

			.menu-sub{
				position:absolute;
				background: white;
				z-index:99999;
				width:70%;
				height:450px;
				margin-left:50px;
				display: none;
				color:#fff!important;
				padding:2em;
				border-bottom: 1px solid black;
				border-left: 1px solid black;
				border-right: 1px solid black;
				overflow-y: scroll;
			}

			/*nav li:hover .menu-sub{*/
				/*display:block;*/
			/*}*/
			.menu-sub li{
				display:block;
			}
			button:hover{
				opacity:0.5;
			}
		</style>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header" >
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +010-2600601</a></li>
						<li><a href="#"><i class="fas fa-envelope"></i> info@wheelsonline.nl</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Essebaan 7, 2908 LJ Capelle aan den IJssel</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-euro"></i> EU </a></li>
						<li><a href="#"><i class="fas fa-user-alt"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="{{asset('public/images/wheelsonline.png')}}" style="width:150px;" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<<!-- !-- SEARCH BAR -->
						<div class="col-md-6">
							 <div class="header-search">
								<!-- <form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form> -->
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fas fa-heart"></i>
										<span>Your Wishlist</span>
										<!-- <div class="qty">2</div> -->
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<!-- <div class="qty">3</div> -->
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('public/images/product01.png')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('public/images/product02.png')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<div id="myHeader">
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-naFv">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#" onmouseover="functionMega()" onmouseout="functionMegaout()">Assortiment</a></li>

						<li><a href="#">Over Ons</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terug naar keuzemenu</a></li>
					</ul>
					<!-- /NAV -->
					</div>

				</div>
				<!-- /responsive-nav -->
			<div class="menu-sub" id="menu_sub" onmouseover="functionMega()" onmouseout="functionMegaout()">
				<h3 style="font-size:12px; color:#b5b5b5">Bekijk het assortiment</h3>
				<button type="button" class="btn btn-link" style="text-decoration: none; color:black;">Nieuwste Producten<i class="fa fa-angle-right" style="margin-left:102px;"></i></button><br />
				<button type="button" class="btn btn-link" style="text-decoration: none; color:black;">BMW serie<i class="fa fa-angle-right" style="margin-left:170px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 1 serie<i class="fa fa-angle-right" style="margin-left:123px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 2 serie<i class="fa fa-angle-right" style="margin-left:120.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 3 serie<i class="fa fa-angle-right" style="margin-left:120.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 4 serie<i class="fa fa-angle-right" style="margin-left:119.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 5 serie<i class="fa fa-angle-right" style="margin-left:120.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 6 serie<i class="fa fa-angle-right" style="margin-left:120.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW 7 serie<i class="fa fa-angle-right" style="margin-left:120.5px; font-size:14px;"></i></button><br />
				<button type="button" class="btn btn-link" style="text-decoration: none; color:black;">BMW X<i class="fa fa-angle-right" style="margin-left:193px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW X1<i class="fa fa-angle-right" style="margin-left:146px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW X3<i class="fa fa-angle-right" style="margin-left:143.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW X4<i class="fa fa-angle-right" style="margin-left:142.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW X5<i class="fa fa-angle-right" style="margin-left:142.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW X6<i class="fa fa-angle-right" style="margin-left:142.5px; font-size:14px;"></i></button><br />
				<button type="button" class="btn btn-link" style="text-decoration: none; color:black;">BMW Z<i class="fa fa-angle-right" style="margin-left:191.5px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW Z3<i class="fa fa-angle-right" style="margin-left:142.5px; font-size:14px;"></i></button><br />
					<button type="button" class="btn btn-link" style="font-size:12px;text-decoration: none; color:black; margin-left:50px;">BMW Z4<i class="fa fa-angle-right" style="margin-left:141px; font-size:14px;"></i></button><br />
				<button type="button" class="btn btn-link" style="text-decoration: none; color:black;">BMW i3 / i8 / Z8<i class="fa fa-angle-right" style="margin-left:133px;"></i></button><br />
				<button type="button" class="btn btn-link" style="text-decoration: none; color:black;">Mini<i class="fa fa-angle-right" style="margin-left:212px;"></i></button>

			</div>

			<script>
				function functionMega() {
					document.getElementById("menu_sub").style.display = "block";
                    document.getElementById("content-page").style.opacity = "0.5";
                }
                function functionMegaout() {
                    document.getElementById("menu_sub").style.display = "none";
                    document.getElementById("content-page").style.opacity = "1";
                }
			</script>
			<!-- /container -->
		</nav>
		</div>

		<!-- /NAVIGATION -->

		<script>
			window.onscroll = function(){myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction(){
			    if(window.pageYOffset > sticky){
			        header.classList.add("sticky");
				}else{
			        header.classList.remove("sticky");
				}
			}
		</script>
		<div id="content-page">
<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="{{asset('public/js/jssor.slider-27.5.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('public/images/slider/spin.svg')}}" />
        </div>

        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="{{asset('public/images/slider/bmw1.jpg')}}" />
                <!-- <div data-u="caption" data-t="0" data-ts="preserve-3d" style="position:absolute;top:120px;left:75px;width:470px;height:220px;">
                    <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;max-width:470px;" src="img/c-phone-horizontal.png" />
                    <div data-ts="preserve-3d" style="position:absolute;top:4px;left:45px;width:379px;height:213px;overflow:hidden;">
                        <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:0px;width:379px;height:213px;max-width:379px;" src="img/c-slide-1.jpg" />
                        <img data-u="caption" data-t="2" style="position:absolute;top:0px;left:379px;width:379px;height:213px;max-width:379px;" src="img/c-slide-3.jpg" />
                    </div>
                    <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;max-width:379px;" src="img/c-navigator-horizontal.png" />
                    <img data-u="caption" data-t="3" style="position:absolute;top:476px;left:454px;width:63px;height:77px;max-width:63px;" src="img/hand.png" />
                </div> -->
            </div>
            <div>
                <img data-u="image" src="{{asset('public/images/slider/bmw2.jpg')}}" />
            </div>

            <div>
                <img data-u="image" src="{{asset('public/images/slider/bmw3.jpg')}}" />
                <div style="position:absolute;top:300px;left:30px;width:480px;height:130px;font-family:'Roboto Condensed',sans-serif;font-size:30px;color:#000000;line-height:1.27;padding:5px 5px 5px 5px;box-sizing:border-box;background-color:(255,188,5,0.8);background-clip:padding-box;"></div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        {{--<!-- Arrow Navigator -->--}}
        {{--<div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">--}}
            {{--<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">--}}
                {{--<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>--}}
            {{--</svg>--}}
        {{--</div>--}}
        {{--<div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">--}}
            {{--<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">--}}
                {{--<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>--}}
            {{--</svg>--}}
        {{--</div>--}}
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
		<!-- banner-text -->
		<div class="banner-text" style="position:absolute; width:100%; margin-top:-500px">
			<div class="book-form">
				<p>Velgen zoeken.</p>
				<div id="myHeader2">
				<form action="#" method="post">
					<div class="col-md-3 form-left-agileits-w3layouts ">
						<label><i class="fa fa-clock-o" aria-hidden="true"></i> Model :</label>
						<select class="form-control">
							<option>Kies Uw model.</option>
							@foreach($category_producten as $category)
							<option value="{{$category->category_id}}">{{$category->category_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-3 form-left-agileits-w3layouts ">
						<label><i class="fa fa-calendar" aria-hidden="true"></i> Type :</label>
						<select class="form-control">
							<option>Kies uw Type.</option>
							@foreach($category_producten as $category)
								<option value="{{$category->category_id}}">{{$category->category_name}}</option>
							@endforeach
						</select>
					</div>
					{{--<div class="col-md-3 form-date-w3-agileits">--}}
						{{--<label><i class="fa fa-calendar" aria-hidden="true"></i> Type :</label>--}}
						{{--<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">--}}
					{{--</div>--}}
					<div class="col-md-3 form-left-agileits-w3layouts ">
						<label><i class="fa fa-users" aria-hidden="true"></i> Onderdelen :</label>
						<select class="form-control">
							<option></option>
							<option>1 Person</option>
							<option>2 People</option>
							<option>3 People</option>
							<option>4 People</option>
							<option>5 People</option>
							<option>More</option>
						</select>
					</div>
					<div class="col-md-3 form-left-agileits-submit">
						<input type="submit" value="Zoeken">
					</div>
				</form>
				</div>
			</div>
		</div>

		{{--<script>--}}
            {{--window.onscroll = function(){myFunction2()};--}}

            {{--var header2 = document.getElementById("myHeader2");--}}
            {{--var sticky2 = header2.offsetTop;--}}

            {{--function myFunction2(){--}}
                {{--if(window.pageYOffset > sticky2){--}}
                    {{--header2.classList.add("sticky2");--}}
                {{--}else{--}}
                    {{--header2.classList.remove("sticky2");--}}
                {{--}--}}
            {{--}--}}
		{{--</script>--}}
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('public/images/shop01.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('public/images/shop03.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('public/images/shop02.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
					
					<!-- Products tab & slick -->
					<!-- <div class="col-md-4">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<!-- <div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2"> -->
										<!-- product -->
										@foreach($producten as $lijst)
										<div class="product col-md-3">
											<div class="product-img">
												<img src="{{asset('public/images/product06.png')}}" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#">{{$lijst->product_name}}</a></h3>
												<h4 class="product-price">{{$lijst->prijs}}<del class="product-old-price"></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="far fa-heart"></i><span class="tooltipp">add to wishlist</span></button>
													<button><i class="fa fa-shopping-cart"></i><span class="tooltipp">add to cart</span></button>
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<!-- <div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div> -->
										</div>
										<!-- /product -->
										@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product07.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product08.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product09.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product01.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product02.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product03.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product04.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product06.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product07.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product08.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product09.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product01.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product02.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product03.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product04.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('public/images/product05.png')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('public/js/jquery.min.js')}}"></script>
		<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/js/slick.min.js')}}"></script>
		<script src="{{asset('public/js/nouislider.min.js')}}"></script>
		<script src="{{asset('public/js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('public/js/main.js')}}"></script>

	</body>
</html>
