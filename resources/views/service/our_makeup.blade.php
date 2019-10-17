@extends('layouts.head')
@section('content')

<style type="text/css">

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  .modal-transparent {
  background: transparent;
}
.modal-transparent .modal-content {
  background: transparent;
}
  .img-responsive {
   /* This needs to be half of the height */
    margin-left:30%;
    margin-right:60%; /* This needs to be half of the width */
}
</style>

<!-- categories menu ends -->
<div style="background-color:#fafafa"><br/><br/><br/><br/><br/>
<div class="container-fluid">
 <div class="jumbotron">
  <div class="page-header">
    <span class="text-right" style="font-family:Charlemagne Std; font-size:40px"><?php {{ echo "$name"; }} ?></span>
  </div><hr style="border:4px solid gray;border-radius:4px">


  <br>
  <?php
  $list=0;
    foreach ($data as $datas) {
      $list=$list+1;
      $name = $datas->Service_img;
      $nm = explode('/',$name);
  ?>
  <div class="col-sm-4 col-md-4">
    <a>
        <?php $test=$datas->Service_name; $test=str_replace(' ', '', $test); ?>
        <div class="thumbnail" style="border:0px">
          <button class="btn btn-default" data-toggle="modal" data-target="#<?php echo $test; ?>">
          <img class="img lazy responsive-img" src={{ asset("$datas->Service_img".'Image1.jpg') }} style="width: 100%">
            <div class="caption">
              <a class="text-success" style="font-family:Verdana;font-size:20px;text-align:right !importent"><?php echo"$datas->Service_name"; ?></a>
            </div>
          </button>
          <div class="modal modal-transparent fade" id="<?php echo"$test"; ?>" role="dialog">
            <div class="modal-dialog modal-lg">
    
            <!-- Modal content-->
              <div class="modal-content">
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
                  <div class="container">
                    <div id="<?php echo $list;?>" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#<?php echo $list;?>" data-slide-to="0" class="active"></li>
                      <?php for ($i=1; $i < $filecount; $i++) { ?>
                        <li data-target="#<?php echo $list;?>" data-slide-to="<?php echo $i; ?>"></li>
                      <?php
                      }
                      ?>
                    </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src=<?php echo $f ;?> alt="Chania" width="460" height="445">
                    </div>
                    <?php
                    for ($i=2; $i < $filecount; $i++) { 
                        $f= "../".$n."/Image".$i.".jpg"
                      ?>
                      <div class="item">
                      <img src=<?php echo $f ;?> alt="Chania" width="460" height="445">
                      </div>
                      
                    <?php }
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
        </div><hr style="border:1px solid gray">
    </a>
    <div>
          <div class="col-md-12 table-responsive" style="text-align:left;font-size:16px">
          <table border="0" class="table table-condensed table-hover col-md-12" >
            <tr>
               <td class="text-left col-md-7">
                <button class="btn btn-warning btn-circle" style="border-radius:20px"><i class="fa fa-inr fa-2x" style="color:red"></i></button>
                <span class="text-warning" style="font-family:Verdana"><b>Starting From</b></span>
               </td>
               <td class="text-right">
                <span style="font-family:Verdana">
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
 </div>
</div>
    <div class="container">
        <div class="col-md-12">
            <legend class="btn-warning" style="font-family:Verdana;font-size: 18px;padding: 5px;border-radius: 5px">
                Memorable Shaadi provides you with the most prominent make-up artist in the city for your wedding. 
            </legend>
            <div style="font-family:Verdana;font-size: 15px;">
                Bridal makeup should bring out the bride’s best features, and make them look the most beautiful version of themselves in her wedding.
            </div>
        <div class="page-header">
            <legend class= "text-center bg-success" style="font-family:Charlemagne Std;border-radius: 15px">Make up STYLES</legend>
        </div>
        <table class="table table-condensed table-hover col-md-12" style="font-family:Verdana">
            <?php
              foreach ($menu as $show){
                  if($show->detail_head == 'Make up STYLES'){
            ?>
            <tr>
               <td class="col-md-12">
                  <?php echo"$show->detail_data";  ?>
               </td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
        </div>
        <br>
    </div><br><br>
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