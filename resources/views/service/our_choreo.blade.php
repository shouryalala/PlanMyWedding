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

      <div data-toggle="modal" data-target="#{{ $nm[2] }}">
        <div class="thumbnail" style="border:0px">
          <button class="btn btn-default" data-toggle="modal" data-target="#<?php echo"$datas->Service_name"; ?>">
          <img class="img lazy" src={{ asset("$datas->Service_img".'Image4.jpg') }} style="width: 100%"></a>
            <div class="caption">
              <a class="text-success" style="font-family:Verdana;font-size:20px;text-align:right !importent"><?php echo"$datas->Service_name"; ?></a>
            </div>
          </button>

          <div class="modal modal-transparent fade" id="<?php echo"$datas->Service_name"; ?>" role="dialog">
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
      </div>
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
          
          
          
      <span class="col-sm-12" style="margin-bottom: 30px;">
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
  </div>
    
  <?php
    }
  ?>
 </div>
</div>
    <div class="container">
        <div>
            <p style="font-family:Verdana;">
                Make it Memorable with a special couple dance , watch family and friends shed their inhibitions and perform to celebrate at  your wedding .
                <br><br>We at Memorable Shaadi  provide you choreography services, by the well-known choreographers, to frame and bring out the hidden passion in you and make you dance with your heart’s out in your wedding.  
            </p>
        </div><br><br><br>
        <div class="col-md-12">
            <h4 class="btn-danger " style="font-family:Verdana;">You can pick from the elements below to add that extra spunk, that personal touch to your Sangeet…</h4>
        </div>
        <div class="col-md-6">
            <legend class= "text-center bg-warning" style="font-family:Charlemagne Std;border-radius: 15px">Featured</legend>
        <table class="table table-condensed table-hover">
            <?php
              foreach ($menu as $show){
                  if($show->detail_head == 'Featured'){
            ?>
            <tr>
                <td><?php echo"$show->detail_data";  ?></td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
        </div>
        <div class="col-md-6">
            <legend class= "text-center bg-info" style="font-family:Charlemagne Std;border-radius: 15px">Dance Forms/ Style</legend>
        <table class="table table-condensed table-hover">
            <?php
              foreach ($menu as $show){
                  if($show->detail_head == 'Dance Forms/ Style' & $show->detail_position == 1){
            ?>
            <tr>
                <td><?php echo"$show->detail_data";  ?></td>
            </tr>
            <?php
                    }
                }
            ?>
            <tr onmouseover=sho();>
            <?php
              foreach ($menu as $show){
                  if($show->detail_head == 'Dance Forms/ Style' & $show->detail_position == 2){
            ?>
                <td><?php echo"$show->detail_data";  ?></td>
            <?php
                    }
                }
            ?>
            </tr>
            <tr class="col-md-12" id="dat" style="visibility: hidden;display: none">
                <td>
                    <table class="table table-condensed table-hover">
                    <?php
                        foreach ($menu as $show){
                            if($show->detail_head == 'Dance Forms/ Style' & $show->detail_position == 3){
                    ?>
                        <tr>
                            <td><?php echo"$show->detail_data";  ?></td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
                    </table>
                </td>
            </tr>
            <tr onmouseover=show();>
                <?php
                    foreach ($menu as $show){
                    if($show->detail_head == 'Dance Forms/ Style' & $show->detail_position == 4){
                ?>
                    <td><?php echo"$show->detail_data";  ?></td>
                <?php
                        }
                    }
                ?>
            </tr>
            <tr class="col-md-12" id="data" style="visibility: hidden;display: none">
                <td>
                <table class="table table-condensed table-hover">
                    <?php
                        foreach ($menu as $show){
                        if($show->detail_head == 'Dance Forms/ Style' & $show->detail_position == 5){
                    ?>
                    <tr>
                        <td><?php echo"$show->detail_data";  ?></td>
                    </tr>
                    <?php
                        }
                        }
                    ?>
                </table>
                </td>
            </tr>
        </table>
        </div>
        <div class="page-header">
            <legend class= "text-center bg-danger" style="font-family:Charlemagne Std;border-radius: 15px">Deliverables</legend>
        </div>
        <ul class="text-danger" style="font-family:Verdana;font-size: 18px">
            <?php
                foreach ($menu as $show){
                    if($show->detail_head == 'Deliverables'){
            ?>
            <li><?php echo"$show->detail_data";  ?></li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
</div><br><br>
    <script type="text/javascript">
      function show(){
        if(document.getElementById('data').style.visibility=="visible"){
          document.getElementById('data').style.visibility="hidden";
          document.getElementById('data').style.display="none";
        }else{
          document.getElementById('data').style.visibility="visible";
          document.getElementById('data').style.display="inline";
        }
      }function sho(){
        if(document.getElementById('dat').style.visibility=="visible"){
          document.getElementById('dat').style.visibility="hidden";
          document.getElementById('dat').style.display="none";
        }else{
          document.getElementById('dat').style.visibility="visible";
          document.getElementById('dat').style.display="inline";
        }
      }
    </script>
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