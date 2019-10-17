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
    <a href="#">
      <div class="thumbnail" style="border:0px">
          <button style="border:0px" class="btn" data-toggle="modal" data-target="#<?php echo"$datas->Service_name"; ?>">
          <img class="img lazy" src={{ asset("$datas->Service_img".'Image4.jpg') }} style="width: 100%">
            <div class="caption">
              <a class="text-success" style="font-family:Verdana;font-size:20px;text-align:right !importent"><?php echo"$datas->Service_name"; ?></a>
            </div>
          </button>
          <div class="modal modal-transparent fade" id="<?php echo"$datas->Service_name"; ?>" role="dialog">
            <div class="modal-dialog modal-lg">
    
            <!-- Modal content-->
              <div class="modal-content" style="margin-left:14%; width: 640px; height:480px;">
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
        
        
       
      <span>
          <button class="btn btn-info col-md-12 btn-space" data-toggle="modal" data-target="#loginModal">Book Now</button>
      </span>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
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
                    <button type="submit" class="btn btn-danger" id="submit">Submit</button> 
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
  </div>
  <?php
    }
  ?>
 </div>
</div>
    <div class="container">
        <div class="col-md-12">
            <legend class="btn-warning" style="font-family:Verdana;font-size: 17px;padding: 5px;border-radius: 5px">
                Nothing gets bigger than celebrating your memorable wedding with reknown Entertainment Artist to add more joy and fun. 
            </legend>
            <div style="font-family:Verdana;font-size: 15px;">
                Entertainment always adds a magical touch to make any occasion joyful and grand. We at Memorable Shaadi brings along with us a bucket full of entertainment to make your wedding a memorable one. The entertainment services include wedding artists, wedding entry, varmala themes and more.
            </div>
        </div>
        <div class="col-md-4">
            <div class="page-header">
                <legend class= "text-center bg-success" style="font-family:Charlemagne Std;border-radius: 15px">Artists</legend>
            </div>
            <table class="table table-condensed table-hover col-md-12" style="font-family:Verdana">
                <?php
                    foreach ($menu as $show){
                        if($show->detail_head == 'Artists'){
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
        <div class="col-md-4">
            <div class="page-header">
                <legend class= "text-center bg-success" style="font-family:Charlemagne Std;border-radius: 15px">Wedding Entries</legend>
            </div>
            <table class="table table-condensed table-hover col-md-12" style="font-family:Verdana">
                <?php
                    foreach ($menu as $show){
                        if($show->detail_head == 'Wedding Entries'){
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
        <div class="col-md-4">
            <div class="page-header">
                <legend class= "text-center bg-success" style="font-family:Charlemagne Std;border-radius: 15px">Varmala Themes</legend>
            </div>
            <table class="table table-condensed table-hover col-md-12" style="font-family:Verdana">
                <?php
                    foreach ($menu as $show){
                        if($show->detail_head == 'Varmala Themes'){
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