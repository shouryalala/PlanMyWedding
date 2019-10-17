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
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
      background-color: black;
    }
</style>




<!-- categories menu ends -->
<div style="background-color:#fafafa;background-image:url(http://memorableshaadi.com/data/image/caterer/back1.jpg ),url(http://memorableshaadi.com/data/image/caterer/back2.jpg );width:100%;background-repeat: repeat-x, repeat;"><br/><br/><br/><br/><br/>
<div class="container-fluid">
    <div class="jumbotron" style="background-color: rgba(0,0,0,0.0)">
  <div class="page-header">
    <span class="text-right" style="font-family:Charlemagne Std; font-size:40px;color: white">{{ $name }}</span>
  </div>
  
  
        

  <br>
  <?php
  $list=0;
    foreach ($dataa as $datas) {
      $list=$list+1;
      $name = $datas->Service_img;
      $nm = explode('/',$name);
  ?>
  <div class="col-sm-12 col-md-4">
  <div class="col-sm-11 col-md-12 col-xs-12" style="background-color: rgba(0,0,0,0.4);border-radius: 10px;margin: 1px;padding-top: 10px;padding-bottom: 20px">
    <a>
        <div class="thumbnail" style="border:0px;background-color: rgba(0,0,0,0.0);">
          <button style="border: 0px;background-color: rgba(0,0,0,0.0);" class="btn btn-default" data-toggle="modal" data-target="#<?php echo"$datas->Service_name"; ?>">
	    <a href='<?php echo"$datas->Service_name"; ?>'>
	      <p style="font-size:15px;width:80%;background-color:rgba(0,0,0,0.7);padding:10px;margin-top:50%;position: absolute"><a><b style="color: white"><?php echo"$datas->Service_name"; ?></b></p>
              <img class="img lazy" src='{{ asset("$datas->Service_img".'Image4.jpg') }}' style="width: 100%">
            </a>
          </button>
            
            
        </div>
            
        
        
        
        
<div class="modal modal-transparent" id="<?php echo"$datas->Service_name"; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 15px">
                <span aria-hidden="true" class="modal_button"><b>&times;</b></span>
                <span class="sr-only">Close</span>
            </button>
            <div class="modal-body">
                  <?php
                            $n=$datas->Service_img;
                            $f= "../".$n."/Image1.jpg"
                  ?>
                    <?php
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
          <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" style="text-align:left;font-size:16px">
          <table border="0" class="table table-condensed table-hover col-md-12" >
            <tr>
               <td class="text-left col-md-7">
                <button class="btn btn-warning btn-circle" style="border-radius:20px"><i class="fa fa-inr fa-2x" style="color:red"></i></button>
                <span class="text-warning" style="font-family:Verdana;color: white"><b>Starting From</b></span>
               </td>
               <td class="text-right">
                <span style="font-family:Verdana;color: white">
                  <span style='font-size:10px;color: white'>INR</span>
                  <span style='color: white'><?php echo "$datas->Service_rate"; ?></span>
                </span>
               </td>
            </tr>
            <tr>
               <td class="col-md-7">
               <button class="btn btn-warning" style="border-radius:20px;color: white"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i></button>
                <span class="text-warning" style="font-family:Verdana;color: white">
                  <b>Menu</b>
                </span>
               </td>
               <td class="text-right">
                   <?php 
                        if($datas->Service_name== 'Standard'){
                   ?>
                <span style="font-family:Verdana;color: white" class="align-right">             
                  100+ Served Dishes
                </span>
                   <?php
                        }
                   ?>
                   <?php 
                        if($datas->Service_name== 'Premium'){
                   ?>
                <span style="font-family:Verdana;color: white" class="align-right">             
                  200+ Served Dishes
                </span>
                   <?php
                        }
                   ?>
                   <?php 
                        if($datas->Service_name== 'Luxury'){
                   ?>
                <span style="font-family:Verdana;color: white" class="align-right">             
                  300+ Served Dishes
                </span>
                   <?php
                        }
                   ?>
               </td>
            </tr>
            </table>
          </div>
    </div>
      <br/>.<br/>
      <span>
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
                      <input type="hidden" value="<?php echo "$datas->Service_name"; ?>">
                      <input type="hidden" name="page" value="
		          	<?php	echo"$datas->Service_name"; ?>
		      ">
    			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
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
      <div>
        <button style="margin-top: 10px" class="btn btn-warning col-md-12 btn-space" onmouseover='<?php $da = str_replace(" ", '', $datas->Service_name); echo "$da"."()"; ?>'>SAMPLE MENU</button>
      <div id="<?php echo "$datas->Service_rate"; ?>" style="text-align:left;visibility:hidden;display:none">
        <table class="table table-condensed table-hover">
          <?php
            foreach ($sho as $key) {
                  if($key->Service_name == $datas->Service_name){
          ?>
          <tr>
              <td style="color: white">
              <?php echo "$key->data"; ?>
            </td>
          </tr>
          <?php
                  }
                }
          ?>
        </table>
      </div>
    </div>
  </div>
  </div>
    <script type="text/javascript">
      function <?php echo "$da"."()"; ?>{
        if(document.getElementById('<?php echo "$datas->Service_rate"; ?>').style.visibility=="visible"){
          document.getElementById('<?php echo "$datas->Service_rate"; ?>').style.visibility="hidden";
          document.getElementById('<?php echo "$datas->Service_rate"; ?>').style.display="none";
        }else{
          document.getElementById('<?php echo "$datas->Service_rate"; ?>').style.visibility="visible";
          document.getElementById('<?php echo "$datas->Service_rate"; ?>').style.display="inline";
        }
      }
    </script>
                <?php 
                    $mml = $name;
                    $ab = glob($mml."*jpg");
                    $m = count($ab);
                    for($i=1;$i<count($ab);$i++) { 
                    $ml = '../'."$mml".'Image'."$i".'.jpg';
                        echo"<im src='$ml'></a>";
                    }
                ?>
  <?php
    }
  ?>
 </div>
</div><br/>
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


</div>


@stop