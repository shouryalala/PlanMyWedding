
<!-- Created by Shourya Lala
    15-7-2016-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel = "stylesheet" href = "data/bootstrap/css/planShaadi/animate.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
        type="text/javascript"></script>
<script src="data/bootstrap/js/planShaadi/formcontent.js"></script>
<link href="data/bootstrap/css/planShaadi/formpagedesign.css" rel="stylesheet" type="text/css" />
<link href="data/bootstrap/css/planShaadi/hover.css" rel="stylesheet" type="text/css" />
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
        rel="Stylesheet" type="text/css" />
        <script type="text/javascript">
        $(function () {
            $('#txtDate').datepicker({
                dateFormat: "dd/mm/yy",
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
<style type="text/css" media = "all">


#bgg {
   position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    opacity: 0.8;
      filter:brightness(60%);
    -webkit-filter:brightness(60%);

     transform:scale(1.1);
    -ms-transform:scale(1.1); /* IE 9 */
    -moz-transform:scale(1.1); /* Firefox */
    -webkit-transform:scale(1.1); /* Safari and Chrome */
    -o-transform:scale(1.1); 

    z-index: -10;    

    background: url(<?php echo "$data"?>); no-repeat center center fixed;


    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}



</style>


<title>Memorable Shaadi</title>


</head>
<body>  
  <div id="loader"><img class= "logo_img" src="../public/data/images/planShaadi/logofont.png" alt="broken" id="img"/></div>
  <div class="end" id="end"></div>
  <img class= "home_img slideInDown animated" id="home_img" src="../public/data/images/planShaadi/logofont.png" alt="broken" id="img"/>
  <div class = "container" id = "form12">    
<form id="form1" name="form1" method="get" action="http://localhost/Laravel/public/handler">
  <p>    
    
    <input class = "container flipInX animated" type="text" name="shaadi_size" id="shaadi_size" placeholder="  SIZE OF GATHERING" 
    style="background-color: rgba(255, 255, 255, 0.5); border:none; width:340px; height:30px;"/>
  </p>  
	<div class = "animated flipInX delay">
  <p>    
    <input type="text" name="budget" id="budget" placeholder="  TOTAL BUDGET" 
    style="background-color: rgba(255, 255, 255, 0.5); border:none; width:340px; height:30px;"/> 
  </p>
  </div>
  <!--<div id="date_id">
  <p>
    <label class = "animated flipInX delaymore" id="label1" for="date" >DATE:</label>
    <input class = "animated flipInX delaymore" type="date" name="date" id="date" style="background-color: rgba(255, 255, 255, 0.5); border:none; width:300px; height:30px;" /> 
  </p>   
</div>-->
  <div style="position:relative;z-index:20;padding-bottom:10px;">
        <input class = "animated flipInX delaymore" id="txtDate" type="text" name="name" autocomplete="off" placeholder=" dd/mm/yyyy" /><br>
    </div>

<div style="background-color: rgba(255, 255, 255, 0.5); border:none; width:350px; height:30px;" id="include_id" class="flipInX animated delaymoore hvr-underline-from-left" align="center"><a href="#categories" class="include_text">Select Services❯</a></div><br><br>
<div id="categories" style="z-index:200;"> 
  <div id="category_text">    
    
    <p id="instruction">&nbsp&nbspselect the categories that you want to include in your total budget</p><br>
    <!--<label id="label_cb" class="animated flipInX delay_cb" for="cb_venue">Venue:</label>-->
    <div class="loser" style="position:relative;">
    <div class = "h_shadow animated flipInX">
      
    <label id="venue_cb" class="deselected"><input type="checkbox" name="cb_venue" id="cb_venue" style="visibility:hidden;"/>VENUE</label>         
    </div>
    <div class="box transform" style="text-align:center;left:450px;" id="venue_filter">  
    <label><input type="radio" name="venue_oc" value="open" id="venue_open" />
      Farmhouse/Lawn&nbsp&nbsp</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <label><input type="radio" name="venue_oc" value="close" id="venue_close" />
      Hotel/Banquet</label>    
    </div>
  </div><br><br>
    <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.1s;animation-delay: 0.1s;">
    <label id="decor_cb" class = "deselected"><input type="checkbox" name="cb_decor" id="cb_decor" style="visibility:hidden;"/>DECOR</label><br><br><br>    
  </div>
  <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.2s;animation-delay: 0.2s;">
    <label id="catering_cb" class = "deselected"><input type="checkbox" name="cb_catering" id="cb_catering" style="visibility:hidden;"/>CATERING</label><br><br><br>    
  </div>
  <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.3s;animation-delay: 0.3s;">
    <label id="photography_cb" class = "deselected"><input type="checkbox" name="cb_photography" id="cb_photography" style="visibility:hidden;"/>PHOTOGRAPHY</label><br><br><br>   
  </div>
  <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.4s;animation-delay: 0.4s;">
    <label id="invites_cb" class = "deselected"><input type="checkbox" name="cb_invites" id="cb_invites" style="visibility:hidden;" />INVITES</label><br><br><br>
  </div>
    <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.5s;animation-delay: 0.5s;">
    <label id="wedding_band_cb" class = "deselected"><input type="checkbox" name="cb_wedding_band" id="cb_wedding_band" style="visibility:hidden;"/>WEDDING BAND</label><br><br><br>
  </div>
  <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.6s;animation-delay: 0.6s;">
    <label id="enter_cb" class = "deselected"><input type="checkbox" name="cb_enter" id="cb_enter" style="visibility:hidden;"/>ENTERTAINMENT</label><br><br><br>   
  </div>
  <div class = "h_shadow animated flipInX" style="-webkit-animation-delay: 0.7s;animation-delay: 0.7s;">
    <label id="makeup_cb" class = "deselected"><input type="checkbox" name="cb_makeup" id="cb_makeup" style="visibility:hidden;" />MAKEUP</label><br><br><br>
</div>
<div class="hvr-underline-from-center animated flipInX" style="-webkit-animation-delay: 0.8s;animation-delay: 0.8s;
border-radius:1px;border-style:solid;border-width:0.2px;border-color:white;width:150px; height:30px;">
  <a href="#" class="cancel">DONE</a>
</div>
       <script src="data/bootstrap/js/planShaadi/venue_type.js"></script>
       <p id="instruction">&nbsp&nbsp*If you select a closed venue, decor and catering will be included in the budget</p><br><br><br>

</div>
</div>
<div class="hvr-underline-from-center " style="z-index:0;">
    <input type="submit" name="submit_button" id="submit_button" onclick="validateForm();" class="form_button flipInX animated delaymooore" value="PLAN" />
</div>
<input type="hidden" style="visibilty:hidden" id="bg_data" name="bg_data" value="<?php echo $data; ?>">
</form>
</div>
<div id="bgg"></div>

</body>
</html>  
