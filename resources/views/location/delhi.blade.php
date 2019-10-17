@extends('layouts.head')
@section('content')
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8" style="position: absolute;z-index: 1000;border-radius: 5px;background-color: rgba(158,188,214,0.9);margin-top: 10%;margin-left: 70%" id="abc" onmouseover="abc()" onMouseOut="bca()">
      <div class="page-header">
          <span><h2>Delhi NCR:</h2></span>
      </div>
      <div class="text-justify">
            Delhi NCR venues showcase the perfect blend of luxury and infrastructure for 
            every occasion. Amidst of its old-rich history and corporate hubs, Delhi NCR 
            venues are the perfect place to organize weddings, events, meetings, 
            conferences, concerts, parties, special occasions and many more. The vibrant 
            cosmopolitan region is well equipped with many such venues for hosting 
            occasions magnificently and comfortably. 
            Memorable Shaadi has been closely associated with a number of such venues. 
            With farm houses, banquets and hotels under our distinguished panel, from all 
            across Delhi NCR, we make sure you pick the best venue for your occasions. Our 
            years of association have clearly turned out in organizing many successful 
            weddings and events in all the venues.
      </div>
</div>
<div id="map" style="width: 100%; height:700px;"></div> 
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
      zoom: 11,
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
    	
    function abc(){
        document.getElementById('abc').style.visibility='hidden';
    }
    function bca(){
        setTimeout('document.getElementById("abc").style.visibility="visible"',3000);
    }
</script>
@stop