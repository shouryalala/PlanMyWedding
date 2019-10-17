@extends('layouts.head')
@section('content')
<br/><br/><br/><br/><br/>
<link href="{{ asset('data/bootstrap/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset('data/bootstrap/js/imagezoom.js') }}"></script>	
<?php
    foreach ($name as $datas) {
?>
    <div class="product">
	<div class="container">
            <div class="product-price1">
            <div class="top-sing">
            <div class="col-md-7 single-top">	
		<div class="flexslider">
                    <ul class="slides">
                        <?php
                            $img = $datas->product_img;
                            $files = glob($img . '*.jpg');
                                                        $co = count($files);
                            for($i=1 ; $i <= $co ; $i++){
                        ?>
                        <li data-thumb="{{ asset($datas->product_img.'Image'.$i.'.jpg') }} ">
                            <div class="thumb-image"> <img src="{{ asset($datas->product_img.'Image'.$i.'.jpg') }} " data-imagezoom="true" class="img-responsive" style="height:600px"> </div>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
		</div>
                
                <script defer src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="{{ asset('data/bootstrap/css/flexslider.css') }}" type="text/css" media="screen" />
                <script defer src="{{ asset('data/bootstrap/js/jquery.flexslider.js') }}"></script>
                <script>
                // Can also be used with $(document).ready()
                $(window).load(function() {
                  $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                  });
                });
                </script>

            <div class="clearfix"> </div>
            </div>	
            <div class="col-md-5 single-top-in simpleCart_shelfItem">
		<div class="single-para ">
                    <h4><?php echo $datas->product_name; ?></h4>
                    <br/>
                    <h5 class="item_price"><i class="fa fa-inr"></i> <?php echo "$datas->product_rate"; ?></h5>
                    <div class="table-responsive">
                            <table border="0"  class="table table-hover">
                            <?php foreach ($data as $key) {?>
                                <tr>
                                <h6 style="font-size: 15px">
                                    <td>
                                    <b><?php echo strtoupper($key->product_head); ?></b> 
                                    </td>
                                    <td>
                                    : <?php echo $key->product_detail ?>
                                    </td>
                                </h6>
                                </tr>
                            <?php }?>
                            </table>
                    </div>
                    <button href="#" class="btn">ADD TO CART</button>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
                
<?php
    }
?>
            <div class=" bottom-product container-fluid">
                <?php
                    foreach ($simi as $siiii){
                    if ($siiii->product_no == $datas->product_no) {
          		continue;
        		}
                ?>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem" style="height: 300px !important;">
                    <div class="product-at thumbnail">
                        <a href="{{$siiii->product_no }}">
                            <img class="img img-responsive" src="{{ asset($siiii->product_img.'Image1.jpg') }}" style="width: 100%;height: 300px" >
                            <div class="pro-grid">
                                <span class="buy-in">Buy Now</span>
                            </div>
                        </a>	
                    </div>
                    <p class="tun">
                        <span><?php echo $siiii->product_name ?></span><br>
                    </p>
                    <div class="ca-rt">
			<a href="#" class="item_add"><p class="number item_price">Rs <?php echo $siiii->product_rate ?></p></a>						
                    </div>
                </div>
                <?php
                    }
                ?>
		<div class="clearfix"> </div>
            </div>
<!--//content-->
<br/><br/><br/>
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