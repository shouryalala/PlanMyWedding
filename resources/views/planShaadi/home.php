
<!-- Created by Shourya Lala
    15-7-2016-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel = "stylesheet" href = "data/bootstrap/css/planShaadi/animate.css" /> 
  <link href="data/bootstrap/css/planShaadi/home_page.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
      $back = "data/images/planShaadi/home_background/bg";
      //$background_images = array("data/images/planShaadi/bg1.jpg","data/images/planShaadi/bg2.jpg");
      //$current = $background_images[rand(0,7)];      
      $random = rand(1,6);     
      $current = "$back$random.jpg";
      $da = urlencode("$current");
      //echo "data/images/planShaadi/bg2.jpg";
      //echo "$current";
    ?>
<meta http-equiv="refresh" content="5.5;url=http://localhost/Laravel/public/test?us=<?php echo("$da"); ?>" />
<title>Memorable Shaadi</title>
<!--<link href="style.css" type="text/css" rel = "stylesheet"-->
<!--<link rel = "stylesheet" href = "css/animate.css" />-->
<!--background: url("data/images/planShaadi/bg1.jpg"); no-repeat center center fixed;-->
<style type="text/css" media = "all">

 #bg {
   position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -10;    
    background: url(<?php echo "$current"?>); no-repeat center center fixed;
    filter:brightness(0.6);
    -webkit-filter:brightness(0.6);

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;    
    
    -webkit-animation-name: bg_animate; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 6s; /* Chrome, Safari, Opera */
    animation-name: bg_animate;
    animation-duration: 6s;
  }


</style>
</head>
<body>  
  <div id="main_text">
 <div id="text1" class="text1">
  <div class="text11 text_animate1 animateme delay">PLAN THE</div>
</div>
<div class="text2_container">
 <div id="text2" class="text2 text_animate2 animateme delaymore">PERFECT&nbsp WEDDING</div> 
</div>
<div class="text3_container">
 <div id="text3" class="text3 text_animate3 animateme delaymoore">WITH US</div>
</div>
<div id="bg"></div>
</body>
</html>