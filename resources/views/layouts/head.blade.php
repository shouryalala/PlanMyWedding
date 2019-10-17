<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('data/favicon.png') }}" type="image/x-icon" sizes="20x20">
    <link rel="shortcut icon" href="{{ asset('data/favicon.png') }}" type="image/x-icon" sizes="20x20">
	<title>Memorable Shaadi</title>
    <link href="{{ asset('data/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('data/bootstrap/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('data/bootstrap/search/ui.css') }}" >
    <link rel="stylesheet" href="{{ asset('data/bootstrap/mycss/shaadi.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ asset('data/bootstrap/js/jquery-2.1.1.min.js') }}" ></script>
</head>
<body>
<!-- navbar starts -->
  <header>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
          <a href="/" class="navbar-brand">
            <img id="logo-header" class="hidden-xs" src="{{ asset('data/logo.png') }}" />
            <img id="logo-header" class="visible-xs" src="{{ asset('data/logot.png') }}" />
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
              <li><a class="head" href="{{ asset('/#') }}" >HOME</a></li>
              <li><a class="head" href="{{ asset('/#services') }}" >OUR SERVICES</a></li>
              <li><a class="head" href="{{ asset('/#location') }}" >LOCATIONS</a></li>
              <li><a class="head" href="{{ asset('/#about') }}" >ABOUT US</a></li>
              <li><a class="head" href="{{ asset('/#contact') }}" >CONTACT US</a></li>
              <li><a class="head" href="{{ asset('/idea') }}" >IDEAS</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<!-- navbar ends -->

 @yield('content')
<!-- main body ends -->
<footer class="foot"><br/><br/>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h5 class="white-text"><img src="{{ asset('data/img/footer.png') }}" ></img></h5>
            <div style="margin-left:-20px">
                <p class="col-lg-8 col-sm-12 col-xs-12 col-md-8 foot-text">
                 We are a wedding management company driven by the passion of making the ever so confusing wedding industry simpler and organized
                </p>
            </div>
          </div>
          
          


          <div class="col-sm-6">
          <h2 style="color:white">Contact us</h2>
          <hr style="color:white">
            <p class="col-lg-12 col-sm-12 col-xs-12 col-md-8">
                <p style="color:white"><span class="glyphicon glyphicon-home"></span><b> &nbsp;27,Community Center,Naraina Industrial Area,New Delhi-110028</b></p>
                <p style="color:white"><span class="glyphicon glyphicon-earphone"></span><b> &nbsp;+91 9811791095</b></p>
                <p style="color:white"><span class="glyphicon glyphicon-earphone"></span><b> &nbsp;011-64549945</b></p>
                <p style="color:white"><span class="glyphicon glyphicon-envelope"></span><b> &nbsp;contact@memorableshaadi.com</b></p>
                <p style="color:white"><span class="glyphicon glyphicon-heart"></span><b> &nbsp;www.memorableshaadi.com</b>
            </p>
          </div>
          
        </div>
      </div><br/><br/>
      <div class="container-fluid" style="background-color:#000000">
        <div class="col-sm-8 col-xs-12 col-md-7 col-xs-offset-1 col-centered"><h5 class="text-danger"> © 2016 Memorable Shaadi | All Rights Reserved</h5></div>
        <div class="col-sm-12 col-xs-12 col-md-3 col-md-offset-1 col-centered">
                <a target="_blank" class="btn btn-social" href="https://www.facebook.com/memorable.shaadi?fref=ts"><i class="fa fa-facebook fa-2x"></i></a>
                <a target="_blank" class="btn btn-social" href="https://twitter.com/MemorableShaadi"><i class="fa fa-twitter fa-2x"></i></a>
                <a target="_blank" class="btn btn-social btn-google-plus" href="https://plus.google.com/+Memorableshaadi/videos"><i class="fa fa-google-plus fa-2x"></i></a>
                <a target="_blank" class="btn btn-social btn-linkedin" href="https://www.linkedin.com/company/10121486?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10121486%2Cidx%3A1-1-1%2CtarId%3A1444721923660%2Ctas%3Amemorable%20shaa"><i class="fa fa-linkedin fa-2x"></i></a>
        </div>
      </div>
    </footer>
    <!-- footer ends -->
<!-- Scripts -->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{{ asset('data/bootstrap/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('data/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('data/bootstrap/js/bootstrapValidator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('data/bootstrap/lazy/jquery.lazy.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('data/bootstrap/city/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('data/bootstrap/search/search.js')}}" ></script>
<script type="text/javascript" src="{{ asset('data/bootstrap/search/ui.js')}}"></script>
<script src="{{ asset('data/bootstrap/parallax/parallax.min.js')}}"></script>
<script> 
    $(function() {
        $('.lazy').lazy();
    });
  $(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fullName: {
                validators: {
                    notEmpty: {
                        message: 'The full name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    },
                    stringLength: {
                        max: 100,
                        message: 'The title must be less than 100 characters long'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone no. is required and cannot be empty'
                    },
                    stringLength: {
                        max: 10,
                        min:10,
                        message: 'The phone no. must be of exact 10 numbers'
                    }
                }
            },
            content: {
                validators: {
                    notEmpty: {
                        message: 'The content is required and cannot be empty'
                    },
                    stringLength: {
                        max: 500,
                        message: 'The content must be less than 500 characters long'
                    }
                }
            }
        }
    });
});
</script>
  </body>
</html>