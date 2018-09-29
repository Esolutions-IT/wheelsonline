@if (Route::has('login'))
    @if (Auth::check())
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
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
            margin-top:-720px;
            margin-left:750px;
            border: 0px solid rgba(0, 0, 0, 0);
        }
    }

</style>
<div class="container">
<div class="well span8 offset2">
    <div class="row-fluid user-row">
        <div class="span1">
            <img class="img-circle"
                 src="{{ Auth::user()->profile_picture }}"
                 alt="User Pic">
        </div>
        <div class="span10">
            <strong style="color:black;">{{ Auth::user()->name }}</strong><br>
            <div class="text-muted">{{ Auth::user()->user_level }}</div>
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
                                 src="{{ Auth::user()->profile_picture }}"
                                 alt="User Pic">
                        </div>
                        <div class="span6">
                            <strong>{{ Auth::user()->name }}</strong><br>
                            <table class="table table-condensed table-responsive table-user-information">
                                <tbody>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Tel:</td>
                                    <td>{{ Auth::user()->telefoon }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn" type="button"
                            data-toggle="tooltip"
                            data-original-title="Send message to user"><i class="fas fa-cogs"></i></button>
                    <div class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="icon-edit icon-white"></i>Gegevens</button>
                            <button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="icon-remove icon-white"></i>Uitloggen</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
    @endif
@endif