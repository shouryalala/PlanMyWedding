@extends('layouts.head')
@section('content')

<style type="text/css">
    .affix {
      top:134px;
      width: 100%;
      z-index: 900 !important;
    }
</style>
<div class="container-fluid top-full-banner" style="background-image:url(http://memorableshaadi.com/data/head/venue.jpg );width:100%">

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="container" style="margin-top: -5%">
    <legend><h1 style="color: white">Browse Venue By Locations / <a href="http://memorableshaadi.com/service/VENUE#locat">Map's</a></h1></legend>
      <div class="col-lg-8 button-wrapper">
      <span class="col-lg-3"><button class="btn btn-danger btn-block full"  onclick="$('.sach').show(); return false;" style="margin-top: 10px">All Venues</button></span>
      <?php 
        $array=array("red");
        foreach ($data as $datas) {
          $len=count($array);
          $ans=0;
          $loc=$datas->location;
          $loc=str_replace(' ', '', $loc);
          for ($i=0; $i < $len; $i++) { 
            if ($array[$i]=="$loc") {
              $ans++;
            }
          }
          if ($ans==0) {
            array_push($array,$loc); ?>

            <span class="col-lg-3"><button class="btn btn-danger btn-block someclass" onclick="$('.sach').hide(); $('.<?php echo $loc ?>').show(); return false;" style="margin-top: 10px"><?php echo $datas->location;?></button></span>
          <?php }

        } ?>
      </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/>
</div>



    <div data-spy="affix" data-offset-top='315' class="container-fluid" style="background: rgba(129, 1, 1, 0.7);margin-top: -4%">
        <div class="panel-heading clearfix">
            <form method="GET" action={{ asset('search/')}}>
                <div class="input-group col-lg-4 col-lg-offset-4 ">
                    <input id="search_b" autocomplete="off" name="search" type="text" class="form-control" placeholder="What are you looking for ?" >
                    <div class="input-group-btn">
                        <button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<div class="container-fluid">
    <br><br>
    
    

    
    
  <div class="col-sm-12">
            <?php
                foreach ($data as $datas) {
                  $loc=str_replace(" ", '',$datas->location);
            ?>
            <div class="col-sm-4 col-md-3 sach <?php echo $loc; ?>" style="visibility: visible">
            <a href="../venue_disp/{{ $datas->vendor_no }}">
	        <div class="thumbnail" style="border:0px">
	          <a href="../venue_disp/{{ $datas->vendor_no }}">
	          <p style="font-size:15px;width:80%;background-color:rgba(0,0,0,0.7);padding:10px;margin-top:40%;position: absolute"><a href="../venue_disp/{{ $datas->vendor_no }}"><b style="color: white">{{ $datas->name }}</b></p>
                      <img class="img lazy" src=<?php echo '../data/'."$datas->img_folder"."img1.jpg"; ?>>
                  </a>
	        </div>
	    </a>
            </div>
	    <?php
	    	}
	    ?>
	</div>
	    
    <div class="col-lg-12" class="page-header" id="locat">
    <br/><br/><br/><br/><br/>
      <div class="headline text-center"><h2 style="color: black">List Of hotels/Banquets</h2></div>
      <div id="map" style="width: 100%; height: 500px;"></div>   
    </div>
        
 
  </div>
  
  
  
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
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/925163042/?value=10.00&amp;currency_code=USD&amp;label=6D3ACLLek2UQoryTuQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

  
  
  
<script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
<script type="text/javascript">
    var locations = [
<?php
    foreach ($data as $datas) {
?>
      ['<a target="_blank" href="../venue_disp/{{ $datas->vendor_no }}"><img class="img-responsive" width="300px" src="<?php echo "../data/"."$datas->img_folder"."img1.jpg"; ?>"><h4><b><?php echo"$datas->name"; ?></b></h4></a>', <?php echo"$datas->map"; ?> ],
    
<?php
    }
?>
        ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(28.6667 , 77.2167),
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
@stop