@extends('layouts.head')
@section('content')
<!-- categories menu ends --><br/><br/><br/><br/>
<style type="text/css">

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
    
  }
  .modal-transparent {
  background: transparent;
}
.modal-transparent .modal-content {
  background: transparent;
}
</style>

<style>
div.card {
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);
  background-color: #FAFAFA;
  border-left: 3px solid #d9534f;
  
}
div.row{
  margin-left: 2%;
}
</style><br/>
<div class="container" id="services"> 
  <div class="col-sm-8">

    <div class="card">
      <?php
        foreach ($data as $datas) {
      ?>
        <div class="profile-bio tag-box tag-box-v2 box-shadow shadow-effect-1">
          <div class="row">
                    <div class="col-sm-6">
                      <?php 
                        $temp= $datas->img_folder;
                        $na = $temp.'*.jpg';
                        $m = glob($na);
                      ?>
                        <img style="margin-top:20%" class="img-responsive" src={{ asset($temp."/Image1.jpg") }} alt="">
                    </div>
                    <div class="col-sm-6">
                        <h2><u><?php echo "$datas->name" ; ?></u></h2>
                        <strong>Band</strong>
                        <hr>
                        <p class="col-sm-12 text-justify"><?php echo"$datas->description" ?></p>
                        <br>
                        <p><b>For Exclusive Prices,</b><br>
                        </p><p class="btn btn-danger">Contact us:011-64549945</p><p></p>
                    </div>
                </div>    
            </div>
           </div>

           <br><br>

          <div class="card">         
              <div class="row"><h2><u>SERVICES</u></h2>
                 <div class="col-xs-4 col-sm-4">
                   <h5><b>Name:</b></h5>
                 </div>  
                 <div class="col-xs-8 col-sm-8">
                  <h5><?php echo"$datas->name"; ?></h5>
                 </div>  <br>              
                 <div class="col-xs-4 col-sm-4">
                   <h5><b>Type:</b></h5>
                 </div>
                 <div class="col-xs-8 col-sm-8">
                  <h5>Band</h5>
                 </div> 
                 <div class="col-xs-4 col-sm-4">
                   <h5><b>Location</b></h5>
                 </div> 
                 <div class="col-xs-8 col-sm-8">
                  <h5><?php echo"$datas->location"; ?></h5>
                 </div>  
                 <div class="col-xs-4 col-sm-4">
                   <h5><b>Inclusive :</b></h5>
                 </div> 
                 <div class="col-xs-8 col-sm-8">
                  <h5><?php echo"$datas->package_details"; ?></h5>
                 </div> 
                 <div class="col-xs-4 col-sm-4">
                   <h5><b>Add ons:</b></h5>
                 </div> 
                 <div class="col-xs-8 col-sm-8">
                  <h5><?php echo"$datas->addons"; ?></h5>
                 </div>
              </div>
          </div>
<br><br>
<div class="card col-sm-12">
  <div class="row"><h2><u>PHOTOS</u></h2></div>
  <div class="row  margin-bottom-30 margin-top-20">
    <?php
    $list=0;
      for ($i=1; $i <=count($m) ; $i++) {
        $list=$list+1;
        ?>
        <div class="col-sm-6 " style="margin-top:2%;margin-bottom:2%">
          <button class="btn btn-default" style="border:0px" data-toggle="modal" data-target="#<?php echo'class'.$i; ?>">
            <span><img class="img-responsive" src={{ asset($temp."/Image".$i.".jpg") }}></span> 
          </button>
          <div class="modal modal-transparent fade" id="<?php echo'class'.$i; ?>" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: 95%; height:80%;">
              <div class="modal-body">
                <div class="container" style="width: 100%; height:100%;">
                  <div id="<?php echo $list;?>" class="carousel slide" style="width: 100%; height:100%;" data-ride="carousel" data-interval="false">
                   
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <?php for($k=1;$k<=count($m);$k++){
                        if($k==$i){?>
                          <div class="item active">
                            <img src={{ asset($temp."/Image".$k.".jpg") }} alt="Chania" style="width: 100%; height:100%;">
                          </div>
                        <?php 
                        }
                        else{?>
                          <div class="item">
                            <img src={{ asset($temp."/Image".$k.".jpg") }} alt="Chania" style="width: 100%; height:100%;">
                          </div>
                          <?php
                        }
                      }?>
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
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #d9534f" >
        <strong class="">
          <font size="2"><font color="white">
          <b><i class="fa fa-tasks"></i>&nbsp;Request Memorable Shaadi Special price</b>
        </strong>
      </div>
      <div class="panel-body">
        <form id="contact" class="margin-bottom-10" method="post" role="form">
          <div class="form-group">
            <input type="text" name="uname" class="form-control" id="name" placeholder="Enter Name" required="">
          </div>
          <div class="form-group">
            <input type="email" name="uemail" class="form-control" id="email" placeholder="Enter Email" required="">
          </div>
          <div class="form-group">
            <input type="date" name="udate" class="form-control" id="date" required="">
          </div>z               
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
        <font color="white">We Will contact You Soon!!</font>
      </div>
    </div><br><br>
  </div>
</div>
<br/>
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