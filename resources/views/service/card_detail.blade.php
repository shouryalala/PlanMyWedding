@extends('layouts.head')
@section('content')
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{!! asset('imagezoom.js') !!}"></script>

<style type="text/css">
  /* Main carousel style */


.article-slide .carousel-indicators {
    bottom: 0;
    left: 0%;
    margin-left: 0px;
    width: 100%;
}
/* Indicators list style */
.article-slide .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: center;
    height: 54px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 20px;
    width: 100px;
}
/* Indicators images style */
.article-slide .carousel-indicators img {
    border: 2px solid #FFFFFF;
    float: left;
    height: 100%;
    left: 0;
    width: 100px;
}
/* Indicators active image style */
.article-slide .carousel-indicators .active img {
    border: 2px solid #428BCA;
    opacity: 0.8;
}
</style>
<?php

foreach ($name as $datas) {
?>
<br><br><br><br><br>
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content login-modal">
          <div class="modal-header login-modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="loginModalLabel">Buy Now</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="product"> Product : </label><?php echo $datas->product_name; ?>
              </div>
              <div class="form-group">
                <label for"produt_quantity">No. of Items : <input class="form-control phone" name="product_no" placeholder="0" data-placement="top" data-trigger="manual" data-content="Must be an integer" type="number"></label>
              </div>
              <div class="form-group">
                        <label>Delievery Address</label><textarea class="form-control" name="content" placeholder="Your Address here.." data-placement="top" data-trigger="manual"></textarea>
              </div>
              <div class="form-group">
                        <label>Phone</label>
                          <input class="form-control phone" name="phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="number">
                    </div>
              <button type="submit" id="submit" value="enquire" class="btn btn-danger bt-login" data-loading-text="Submitting">Enquire</button>
            </form>
          </div>
      </div>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col-sm-4">
    <div class="polaroid thumbnail">
      <div id="carousel-example-generic" class="carousel slide article-slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators" style="position: relative;left: auto;right: auto;">
          <li data-target="#carousel-example-generic" onmouseover="bigImg(this)" data-slide-to="0" class="active" id="target">
            <?php 
            $g ='data/image/cards/'.$datas->product_name.'_1.jpg';
            $r=str_replace(' ', '%20', $g);
            ?>
            <img src={{ asset($r)}} >
          </li>
          <?php
            $n='data/image/cards/'.$datas->product_name;
            $filecount=1;
            while ( glob($n.'_'.$filecount.'*.jpg')!=false) {
              $filecount++;
            }
            for ($i=2; $i < $filecount; $i++) { 
              $g ='data/image/cards/'.$datas->product_name.'_'.$i.'.jpg';
              $r=str_replace(' ', '%20', $g);
            ?>
              <li data-target="#carousel-example-generic" onmouseover="bigImg(this)" data-slide-to="<?php echo $i-1;?>">
                <img src={{ asset($r) }}>
              </li>
              <?php
            }
          ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
          <?php 
          $g ='data/image/cards/'.$datas->product_name.'_1.jpg';
          $r=str_replace(' ', '%20', $g);
          ?>
            <img src={{ asset($r) }} data-imagezoom="true" alt="" style="height:400px">
          </div>
          <?php
          for ($i=2; $i <= $filecount; $i++) { 
            $g ='data/image/cards/'.$datas->product_name.'_'.$i.'.jpg';
            $r=str_replace(' ', '%20', $g);
            ?>
            <div class="item">
              <img src={{ asset($r) }} alt="Chania" data-imagezoom="true" style="height:400px" >
            </div>
          <?php
          }?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-5"><br><br><br><br>
    <h2><b><u><?php echo $datas->product_name ;?></u></b></h2><br><br><br>
      <h4><b></b> <?php echo $datas->description ?></h4><br>
      <h4><b></b><?php echo $datas->Categories ?></h4><br>
      <h4><b>Additional</b> : <?php echo $datas->Additional ?></h4>
    <h2><b>Price : <?php echo $datas->product_rate;?></b></h2>
    <button type="button" class="btn btn-info btn-l g btn-danger" data-toggle="modal" data-target="#bookModal">Book/Enquire</button>
  </div>
  <div class="col-sm-3 label label-danger">
  <br><br><br><br><br>
    Sold By:<br><br>
    <img style="width:99%;height:200px" src={{ asset('seller.jpeg') }}><br><br>
    <b><center><h2>Memorable Shaadi!
  </div>
  </div>
  <div class="row ">
    <h4><b><u>Similiar Products</u></b></h4><nr>
      <?php
      foreach ($simi as $siiii) {
        $g ='data/image/cards/'.$siiii->product_name.'_1.jpg';
        $r=str_replace(' ', '%20', $g);
        if ($siiii->product_no == $datas->product_no) {
          continue;
        }?>
        <div class="col-sm-3">
          <a href="{{ $siiii->product_no }}">
            <img style="width:70% ;height:200px" class="img-thumbnail lazy" src={{ asset($r) }}>
            <h6><?php echo $siiii->product_name ?> </h6>
            <h4><b><?php echo $siiii->product_rate ?>  </b></h4>  
          </a>
        </div>
      <?php 
      }?>
</div>
<br><br>

</div>
<script type="text/javascript">
  $("#target").hover(function(){
  $(this).click();
}).click(function(){
  //common function
});
function bigImg(x) {
    x.click();}
</script>
<script type="text/javascript">
  $('[data-imagezoom]').image<a href="http://www.jqueryscript.net/zoom/">Zoom</a>({
    cursorcolor:'255,255,255',
    opacity:0.5,
    cursor:'crsshair',
    zindex:2147483647,
    zoomviewsize:[500,500],
    zoomviewposition:'right',
    zoomviewmargin:10,
    zoomviewborder:'1px solid #000',
    magnification:4
    });


</script>
<?php
}
?>
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