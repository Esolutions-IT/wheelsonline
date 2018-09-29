<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
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
    @media only screen and (min-width: 600px) {
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
    @media only screen and (min-width: 768px) {
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
    @media only screen and (min-width: 768px) {
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
    @media only screen and (min-width: 600px) {
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
    @media only screen and (min-width: 600px) {
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
    @media only screen and (min-width: 600px) {
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
    @media only screen and (min-width: 1170px) {
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

        margin-top:-708px;
        z-index:9999;
    }
</style>
    <nav class="main-nav">
        <ul>
        @if (Route::has('login'))
            @if (Auth::check())
            <!-- inser more links here -->
            <li>@extends('.auth.profile_information')</li>
                @else
                    <li><a class="cd-signin" href="#0">@lang('welkom_blade/file.inloggen')</a></li>
                    <li><a class="cd-signup" href="#0">@lang('welkom_blade/file.registreren')</a></li>
                @endif
            @endif
        </ul>
    </nav>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">

            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="email" type="email" name="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="password" type="text" name="password" required  placeholder="Password">
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
            <form class="cd-form form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
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
                    <input class="full-width has-padding has-border" id="password" type="text" name="password" placeholder="Password" required>
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Confirm Password</label>
                    <input class="full-width has-padding has-border" id="password-confirm" type="text" name="password_confirmation" placeholder="Password" required>
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