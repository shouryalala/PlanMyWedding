@extends('layouts.head')
@section('content')
<!-- categories menu ends -->
<style type="text/css">
    .modal-content{
      border: 0px !important;
      border-radius: 0px !important;
      box-shadow: 0px 0px 0px rgba(0,0,0,0.0) !important;
    }
    .modal-transparent {
      background-color: rgba(0, 0, 0, 0.7);
    }
    .modal-transparent .modal-content {
      background-color: rgba(0, 0, 0, 0.0);
    }
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
      background-color: black;
    }
</style>


<style type="text/css">
  /* Main carousel style */

.article-slide .carousel-indicators {
    bottom: 0;
    left: 0%;
    margin-left: 0px;
    width: 100%;
}
/* Indicators list style */
.article-slide .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 54px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 20px;
    width: 100px;
}
/* Indicators images style */
.article-slide .carousel-indicators img {
    border: 0px;
    float: left;
    height: 100%;
    left: 0;
    width: 100px;
}
/* Indicators active image style */
.article-slide .carousel-indicators .active img {
border:0px;
    opacity: 0.8;
}
</style>
<br><br><br><br><br>
<div class="container-fluid full-height-container">
    <div class="col-md-6 clearfix">
        <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide article-slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
      <img alt="" src="{{ asset('data/image/decor/Image14.jpg') }}">
    </li>
    <li data-target="#carousel-example-generic" data-slide-to="1">
      <img alt="" src="{{ asset('data/image/decor/Image16.jpg') }}">
    </li>
    <li data-target="#carousel-example-generic" data-slide-to="2">
      <img alt="" src="{{ asset('data/image/decor/Image20.jpg') }}">
    </li>
    <li data-target="#carousel-example-generic" data-slide-to="3">
      <img alt="" src="{{ asset('data/image/decor/Image1.jpg') }}">
    </li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('data/image/decor/Image14.jpg') }}" alt="Chania">
    </div>

    <div class="item">
      <img src="{{ asset('data/image/decor/Image16.jpg') }}" alt="Chania">
    </div>

    <div class="item">
      <img src="{{ asset('data/image/decor/Image20.jpg') }}" alt="Flower">
    </div>

    <div class="item">
      <img src="{{ asset('data/image/decor/Image1.jpg') }}" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div><br>
    </div>
        <div>
    <div>
        <legend class= "text-center bg-danger" style="font-family:Charlemagne Std">Decor Services</legend>
    </div>
    
            
       
      <span>
          <button class="btn btn-info col-md-12 btn-space" data-toggle="modal" data-target="#loginModal">Book Now</button>
      </span>
      
        <div class="col-md-12">
            <p class="text-justify" style="font-family:Verdana;font-size:17px">We believe in providing full décor services with the ultimate goal of making your wedding the most elegant, unique and memorable experience. Our constant vigilance helps us in taking outmost care of your wedding décor. </p>
        </div>
            <div class="col-md-12">
            <div class="btn-info"><h3>Decor Options</h3></div><br>
            <table class="table table-condensed table-hover" id="list">
            <tr>
                <td>
                    Stage Decoration
                </td>
            </tr>
            <tr>
                <td>
                    Lounge Decoration
                </td>
            </tr>
            <tr>
                <td>
                    Bar and Cocktail Decoration
                </td>
            </tr>
            <tr>
                <td>
                    Entrance Decoration
                </td>
            </tr>
            <tr>
                <td>
                    DJ and Dance Decoration
                </td>
            </tr>
            <tr>
                <td>
                    Varmala Stage Decoration
                </td>
            </tr>
            </table>
        </div>
        <div class="col-md-6">
            <div class="btn-danger" ><h3>Floral Arrangement</h3></div><br>
            <table class="table table-condensed table-hover" id="list">
            <tr>
                <td>
                   Chrysanthemums.
                </td>
            </tr>
            <tr>
                <td>
                    Delphinium.
                </td>
            </tr>
            <tr>
                <td>
                   Freesia.  
                </td>
            </tr>
            <tr>
                <td>
                    Gerbera Daisy. 
                </td>
            </tr>
            <tr>
                <td>
                  Hydrangeas.
                </td>
            </tr>
            <tr>
                <td>
                  Jasmine. 
                </td>
            </tr>
            <tr>
                <td>
                  Marigold.
                </td>
            </tr>
            <tr>
                <td>
                  Orchids.  
                </td>
            </tr>
            <tr>
                <td>
                  Roses. 
                </td>
            </tr>
            <tr>
                <td>
                  Sunflowers.  
                </td>
            </tr>
            <tr>
                <td>
                  Tuberose.
                </td>
            </tr>
            </table>
        </div>
        <div class="col-md-6">
            <div class="btn-warning" ><h3>Themes</h3></div><br>
            <table class="table table-condensed table-hover" id="list">
            <tr>
                <td>
                   Vintage
                </td>
            </tr>
            <tr>
                <td>
                   Black-White
                </td>
            </tr>
            <tr>
                <td>
                   Blue
                </td>
            </tr>
            <tr>
                <td>
                  Gold
                </td>
            </tr>
            <tr>
                <td>
                  Green
                </td>
            </tr>
            <tr>
                <td>
                  Purple
                </td>
            </tr>
            <tr>
                <td>
                  Red
                </td>
            </tr>
            <tr>
                <td>
                  Yellow
                </td>
            </tr>
            <tr>
                <td>
                  Pink
                </td>
            </tr>
            </table>
        </div>
        </div>
    </div>
    
    <div>
      <div class='col-sm-4 col-md-3 col-lg-6'>
        <?php 
              $list=0;
              $mmn = 'data/image/decor/';
              $ab = glob($mmn."*jpg");
              for($i=1;$i<count($ab);$i++) {
                $list=$list+1;
              $ml = '../'."$mmn".'Image'."$i".'.jpg';?>
              <div class='col-lg-4' style='padding: 0px'>
              <button style="border: 0px" class="btn btn-default" data-toggle="modal" data-target="#<?php echo'class'.$i; ?>">
                
                  <a><img style='padding: 1px;width: 100%' class='lazy img-responsive' src=<?php echo $ml ?> ></a>
                </div>
              </button>
              <div class="modal modal-transparent fade" id="<?php echo'class'.$i; ?>" role="dialog">
                <div class="modal-dialog">
                
                
                
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 15px">
                <span aria-hidden="true" class="modal_button"><b>&times;</b></span>
                <span class="sr-only">Close</span>
            </button>
                
                  <!-- Modal content-->
                  <div class="modal-content" style="width: 95%; height:80%" >
                    <div class="modal-body">
                      <div class="container" style="width: 100%; height:100%;">
                        <div id="<?php echo $list;?>" class="carousel slide" style="width: 100%; height:100%;" data-ride="carousel" data-interval="false">
                          
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <?php for($k=1;$k<count($ab);$k++){
                              $mlo = '../'."$mmn".'Image'."$k".'.jpg';
                              if($k==$i){?>
                                <div class="item active">
                                  <img src=<?php echo $mlo;?> alt="Chania" style="width: 100%; height:100%;">
                                </div>
                              <?php 
                              }
                              else{?>
                                <div class="item">
                                  <img src=<?php echo $mlo; ?> alt="Chania" style="width: 100%; height:100%;">
                                </div>
                              <?php
                              }
                            }?>
                          </div>
                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#<?php echo $list;?>" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#<?php echo $list;?>" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }?>
      </div>
    </div>
      <div>
        

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="modal-dialog">
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 2px;margin-left:100%">
                <span aria-hidden="true" class="modal_button"><b>&times;</b></span>
                <span class="sr-only">Close</span>
            </button>
        <div class="modal-content login-modal">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #d9534f" >
                  <strong class="">
                    <font size="2"><font >
                    <b style="color:white"><i class="fa fa-tasks"></i>&nbsp;Request Memorable Shaadi Special price</b>
                  </strong>
                </div>
                <div class="panel-body">
                  <form id="contact" action="{{ asset('Email_d') }}" class="margin-bottom-10" method="post" role="form">
          <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="page" value="Decor">
                    <div class="form-group">
                      <input type="text" name="uname" class="form-control" id="name" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="uemail" class="form-control" id="email" placeholder="Enter Email" required="">
                    </div>
                    <div class="form-group">
                      <input type="date" name="udate" class="form-control" id="date" required="">
                    </div>
                    <div class="form-group">
                      <input type="number" name="ugath" class="form-control" id="gath" placeholder="Number Of Guests" required="">
                    </div>               
                    <div class="form-group">
                      <input type="text" name="uphone" class="form-control" id="phone" placeholder="Enter Phone" required="">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="umessage" id="message" placeholder="Enter message" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger" id="submit">Submit</button> 
                    
                    
                    
                    
                    
                    
                    
<!-- Google Code for Lead Generation form filling Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 925163042;
    w.google_conversion_label = "6D3ACLLek2UQoryTuQM";
    w.google_conversion_value = 10.00;
    w.google_conversion_currency = "USD";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  </form>
                </div>
                <div class="panel-footer" style="background-color: #d9534f">
                  <font style="color:white">We Will contact You Soon!!</font>
                </div>
              </div><br><br>
            </div>
        </div>
      </div>
    </div>
 

</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76327066-1', 'auto');
  ga('send', 'pageview');

</script>
<br><br><br><br><br>
@stop