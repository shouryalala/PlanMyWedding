@extends('layouts.head')
@section('content')
<!-- categories menu ends --><br/><br/><br/><br/>
<style>
div.card {
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);
  background-color: #FAFAFA;
  border-left: 3px solid #d9534f;
  
}
    .affix {
      z-index: 900 !important;
      margin-left: 65%;
    }

div.row{
  margin-left: 2%;
}
</style><br/>
<div class="container-fluid" id="services"> 
  <div class="col-sm-8">
    <div class="card">
      <?php 
        foreach ($venue as $venu) {
          $current_vendor_no=$venu->vendor_no ;
          $count=0;
      ?>
        <div class="profile-bio tag-box tag-box-v2 box-shadow shadow-effect-1">
          <div class="row">
                    <div class="col-sm-12">
                      <?php 
                        $temp= str_replace(' ', '', $venu->name); 
                        $na = 'data/images/venue/'.$temp.'/';
                        $m = glob($na.'*jpg');
                      ?>
                        <img style="width:100%" class="img-responsive" src='<?php  echo "../data/images/venue/".$temp."/img1.jpg";  ?>' alt="">
                    </div>
                    <div class="col-sm-10" style="position: absolute;background-color: rgba(0,0,0,0.5);margin-left: 5%">
                        <h2><u style="color: white"><?php echo"$venu->name"; ?></u></h2>
                        <strong style="color: white"><?php echo"$venu->category" ?></strong>
                        <hr>
                        <p style="color: white" class="col-sm-12 text-justify"><?php echo"$venu->description" ?></p>
                        <br>
                        <p><b style="color: white">For Exclusive Prices,</b><br>
                        </p><p class="btn btn-danger">Contact us: +91 9811791095</p><p></p>
                    </div>
                </div>    
            </div>
           </div>

           <br><br>

          <div class="card table-responsive">         
              <div class="col-lg-12" style="width:100%"><h2><u>SERVICES</u></h2>
                <table class="table table-hover">
                  <tr>
                      <td><h5><b>Name:</b></h5></td>
                      <td><h5><?php echo"$venu->name"; ?></h5></td>
                    </tr>      
      <tr>
                      <td><h5><b>Type:</b></h5></td>
                      <td><h5><?php echo"$venu->type"; ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5><b>Address:</b></h5></td>
                      <td><h5><?php echo"$venu->address"; ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5><b>Outside Decoration Allowed? </b></h5></td>
                      <td><h5><?php echo"$venu->outside_decor"; ?></h5></td>
                    </tr>
                    <tr>
                            <td><h5><b>Outside Catering Allowed? </b></h5></td>
                    <td><h5><?php echo"$venu->outside_catering"; ?></h5></td>
                  </tr>
                  <tr>
                      <td><h5><b>Number Of Banquets</b></h5></td>
                    <td><h5><?php echo"$venu->no_banquets"; ?></h5></td>
                  </tr>
                    <tr>
                      <td><h5><b>Banquet Capacity</b></h5></td>
                    <td><h5><?php echo"$venu->banquet_capacity"; ?></h5></td>
                  </tr>
                    <tr>
                      <td><h5><b>Number Of Lawn</b></h5></td>
                    <td><h5><?php echo"$venu->no_lawn"; ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5><b>Lawn Capacity</b></h5></td>
                    <td><h5><?php echo"$venu->lawn_capacity"; ?></h5></td>
                  </tr>
                  <tr>
                      <td><h5><b>Parking</b></h5></td>
                      <td><h5><?php echo"$venu->parking"; ?></h5></td>
                    <tr>
                      <td><h5><b>Accomodation</b></h5>
                                <td><h5><?php echo"$venu->accomodation"; ?></h5></td>
                  </tr>
                  <tr>
                      <td><h5><b>DJ Charges</b></h5></td>
                      <td><h5><?php echo"$venu->dj_charges"; ?></h5></td>
                    </tr>
                </table>   
              </div>
          </div>
<br><br>
<div class="card col-sm-12">
  <div class="row"><h2><u>PHOTOS</u></h2></div>
  <div class="row  margin-bottom-30 margin-top-20">
    <?php
      for ($i=0; $i <count($m) ; $i++) { 
    ?>
    <div class="col-sm-6 " style="margin-top:2%;margin-bottom:2%">
        <span><img style="width:420px;height:240px" class="img-responsive" src=<?php echo "../"."$m[$i]"; ?>></span>    
    </div>
    <?php
      }
    ?> 
  </div>
</div>
<br><br>
<?php 
  }
?>
  </div>
  <div class="col-sm-4" data-spy="affix" data-offset-top='-1' data-offset-bottom='800'>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #d9534f" >
        <strong class="">
          <font size="2"><font>
          <b style="color: white"><i class="fa fa-tasks" style="color: white"></i>&nbsp;Request Memorable Shaadi Special Price</b>
        </strong>
      </div>
      <div class="panel-body">
        <form id="contact" action="{{ asset('Email_d') }}" class="margin-bottom-10" method="post" role="form">
          <div class="form-group">
      <input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="uname" class="form-control" id="name" placeholder="Enter Name" required="">
          </div>
          <input type="hidden" name="page" value="
          <?php
            foreach ($venue as $venu) {
              echo"$venu->name";
            }
          ?>
          ">
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
        <font color="white">We Will Contact You Soon!!</font>
      </div>
    </div><br><br>
  </div>

  
<br><br>
    <div class="col-lg-12" class="page-header" id="locat"><br><br><br><br>
      <div class="headline text-center"><h2 style="color: black">List Of hotels/Banquets</h2></div>
      <div id="map" style="width: 100%; height: 500px;"></div>   
    </div>
    
    
</div>

<br><br>
<div class="container-fluid" style="color: black">
<div class="jumbotron">
  <h3><span class="label label-danger">SIMILIAR VENUES</span></h2><br>

  <?php foreach ($simi as $sim) { 
    if ($sim->vendor_no==$current_vendor_no) {
      # code...
      continue;
    }
    $count++;
    if($count>4){ break;}

   ?>
      <div class="col-sm-3 col-md-3" style="visibility: visible">
        <a href="../venue_disp/{{ $sim->vendor_no }}">
          <div class="thumbnail" style="border:0px">
            <a href="../venue_disp/{{ $sim->vendor_no }}">
            <p style="font-size:15px;width:80%;background-color:rgba(0,0,0,0.7);padding:10px;margin-top:40%;position: absolute"><a href="../venue_disp/{{ $sim->vendor_no }}"><b style="color: white">{{ $sim->name }}</b></p>
                      <img class="img lazy" src=<?php echo '../data/'."$sim->img_folder"."img1.jpg"; ?>>
                  </a>
          </div>
      </a>
      </div>
  
  
  <?php }
  ?>
  </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
<script type="text/javascript">
    var locations = [
<?php
    foreach ($simi as $datas) {
?>
      ['<a target="_blank" href="../venue_disp/{{ $datas->vendor_no }}"><img class="img-responsive" width="300px" src="<?php echo "../data/"."$datas->img_folder"."img1.jpg"; ?>"><h4><b><?php echo"$datas->name"; ?></b></h4></a>', <?php echo"$datas->map"; ?> ],
    
<?php
    }
?>
        ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(
<?php
    foreach ($venue as $datas) {
      echo"$datas->map";
    }
?>
      ),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
</script>
<br/><br/>
<!-- Google Code for Lead Generation form filling Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 925163042;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "6D3ACLLek2UQoryTuQM";
var google_conversion_value = 10.00;
var google_conversion_currency = "USD";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<br/>
@stop