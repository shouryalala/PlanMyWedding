@extends('layouts.head')
@section('content')

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
    body{
        background-image:url(http://memorableshaadi.com/data/image/photography/back2.jpg ),
            url(http://memorableshaadi.com/data/image/photography/black1.jpg ),
            url(http://memorableshaadi.com/data/image/photography/black1.jpg );
        width:100%;
        background-repeat: repeat-x, repeat;
    }
    .img:hover{
	-moz-opacity: all 1.0 !important;
  	filter:alpha(opacity=100);
	-khtml-opacity: all 1.0 !important;
        opacity: 1 !important;
    	-webkit-opacity: all 1.0 !important;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
    border-top: 1px solid gold !important;
    }
    .ope{
    	opacity: 0.8;
	-moz-opacity: all 1.0 !important;
	-khtml-opacity: all 1.0 !important;
    	-webkit-opacity: all 1.0 !important;
    }
</style>

<br/><br/><br/><br/>
<!-- categories menu ends -->
  <?php
  $list=0;
    foreach ($data as $datas) {
      $list=$list+1;
      $name = $datas->Service_img;
      $nm = explode('/',$name);
  ?>
<div class="col-sm-4 col-md-4" style="padding: 0px;">
    <a>
      <?php $test=$datas->Service_name; $test=str_replace(' ', '', $test) ;?>
<div class="thumbnail" style="border:0px;background-color: rgba(0,0,0,0.0);padding: 0px;">
    <button class="btn btn-default" data-toggle="modal" data-target="#<?php echo $test; ?>" style="border: 0px;padding: 0px;background-color: rgba(0,0,0,0.0">
	<a href='<?php echo"$datas->Service_name"; ?>'>
	    <p style="font-size:15px;width:80%;background-color:rgba(0,0,0,0.7);padding:10px;margin-top:95%;position: absolute"><a><b style="color: white"><?php echo"$datas->Service_name"; ?></b></p>
            <img style="background-color: rgba(0,0,0,0.0)" class="img lazy ope" src='{{ asset("$datas->Service_img".'Image1.jpg') }}'>
        </a>
    </button>
</div>
<div class="modal modal-transparent" id="<?php echo $test; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 15px">
                <span aria-hidden="true" class="modal_button"><b>&times;</b></span>
                <span class="sr-only">Close</span>
            </button>
            <div class="modal-body">
                  <?php
                            $n=$datas->Service_img;
                            $f= "../".$n."/Image1.jpg";
                        $m=0;
                        $dir=$n."/";
                        $files = glob($dir . '*.jpg');
                        if ( $files !== false )
                        {
                            $filecount = count( $files );
                        }
                        else
                        {
        
                        }
                    ?>
            <div class="container-fluid" style="border: 0px !important;border-radius: 0px">
              <div id="<?php echo $list;?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img responsive-img" src='<?php echo "$f" ;?>' style="width: auto !important;height: auto !important">
                    </div>
                    <?php
                        for ($i=2; $i < $filecount; $i++) { 
                        $f= "../".$n."/Image".$i.".jpg"
                    ?>
                    <div class="item">
                        <img class="img responsive-img" src='<?php echo "$f" ;?>' style="width: auto !important;height: auto !important">
                    </div>
                    <?php
                        }
                    ?>
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
    </a>
              
    <div>
          <div class="col-md-12 table-responsive" style="text-align:left;font-size:16px;padding: 20px">
          <table border="0" class="table table-condensed table-hover col-md-12" >
            <tr>
               <td class="text-left col-md-7">
                <button class="btn btn-warning btn-circle" style="border-radius:20px"><i class="fa fa-inr fa-2x" style="color:red"></i></button>
                <span class="text-warning" style="font-family:Verdana"><b>Starting From</b></span>
               </td>
               <td class="text-right">
                <span style="font-family:Verdana;color:gold">
                  <span style='font-size:10px'>INR</span><?php echo "$datas->Service_rate"; ?>
                </span>
               </td>
            </tr>
          </table>
          </div>
    </div>
      
        <span class="col-sm-12">
          <button class="btn btn-info col-md-12 btn-space" data-toggle="modal" data-target="#loginModal">Book Now</button>
      </span>
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
                    <font size="2"><font>
                    <b style="color: white"><i class="fa fa-tasks" style="color: white"></i>&nbsp;Request Memorable Shaadi Special price</b>
                  </strong>
                </div>
                <div class="panel-body">
                  <form id="contact" action="{{ asset('Email_d') }}" class="margin-bottom-10" method="post" role="form">
    			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="page" value="<?php echo "$datas->Service_name"; ?>">
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
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Venue"> Venue
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Catering"> Catering
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Photography"> Photography
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Decorator"> Decorator
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Band"> Wedding Band
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Choreography"> Choreography
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Makeup"> Makeup
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Entertainment"> Entertainment
                        </label>
                    </div>
                    <button type="submit" class="btn btn-danger" id="submit">Submit</button> 
                  </form>
                </div>
                <div class="panel-footer" style="background-color: #d9534f">
                    <div style="color: white">We Will contact You Soon!!</div>
                </div>
              </div><br><br>
            </div>
        </div>
      </div>
    </div>
      
  </div>
  <?php
    }
  ?>
    <div class="container" style="margin-top:65% !important;background-color: rgba(0,0,0,0.3);margin-bottom: 20px">
        <div class="col-md-12">
            <legend class= "text-center" style="font-family:Charlemagne Std;color:gold;margin-top: 20px">PHOTOGRAPHY & VIDEO STYLES</legend>
        <table class="table table-condensed table-hover col-md-12">
            <?php
              foreach ($menu as $show){
                  if($show->detail_head == 'PHOTOGRAPHY & VIDEO STYLES'){
            ?>
            <tr class="col-md-4">
               <td class="col-md-12">
                <span style="font-family:Verdana;color:black">
                  <b style="color:black;border-left-color: red"><?php echo"$show->detail_data";  ?></b>
                </span>
               </td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
        </div>
            <legend class= "text-center" style="font-family:Charlemagne Std;color:gold;font-size:30px">PHOTOGRAPHY SHOOT TYPE</legend>
        <div>
            <ul style="font-family:Verdana">
                <?php
              foreach ($menu as $show){
                    if($show->detail_head == 'PHOTOGRAPHY SHOOT TYPE'){
                ?>
                <li>
                    <b style="color:black;border-left-color: red"><?php echo"$show->detail_data";  ?></b>
                </li>
                <?php
                    }
              }
                ?>
            </ul>
        </div>
            <legend class= "text-center" style="font-family:Charlemagne Std;color:gold">Deliverables</legend>
        <ul class="text-danger" style="font-family:Verdana;font-size: 15px">
            <?php
              foreach ($menu as $show){
                    if($show->detail_head == 'Deliverables'){
            ?>
            <li style="color:black;border-left-color: red"><b><?php echo"$show->detail_data";  ?></b></li>
            <?php
                    }
              }
            ?>
        </ul>
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
@stop