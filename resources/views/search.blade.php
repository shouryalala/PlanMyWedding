@extends('layouts.head')
@section('content')
<br/><br/><br/><br/>



    <div class="container-fluid" style="background: rgba(129, 1, 1, 0.7);position:fixed;z-index:900">
        <div class="panel-heading clearfix">
            <form method="GET" action="#">
                <div class="input-group col-lg-4 col-lg-offset-4 ">
                    <input id="search_box" name="search" type="text" class="form-control" placeholder="What are you looking for ?">
                    <div class="input-group-btn">
                        <button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
   </div>
<br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="container-fluid">
            <div class="col-lg-8 col-lg-offset-4">
            <?php
            for ($i=0;$i<count($data);$i++){
                foreach ($data[$i] as $datas) {
                    if(isset($datas->category)=='venue' ){
            ?>
            <div class="col-sm-6 col-md-6">
            <a href="public/venue_disp/{{ $datas->vendor_no }}">
	        <div class="thumbnail" style="border:0px">
	          <a href="public/venue_disp/{{ $datas->vendor_no }}">
	          <p style="font-size:15px;width:80%;background-color:rgba(0,0,0,0.7);padding:10px;margin-top:40%;position: absolute"><a href="../venue_disp/{{ $datas->vendor_no }}"><b style="color:white">{{ $datas->name }}</b></p>
                      <img class="img lazy" src=<?php echo 'data/'."$datas->img_folder"."img1.jpg"; ?>>
                  </a>
	        </div>
	    </a>
            </div>
	    <?php
                    }
                    else {
                        ?>
            <div class="col-sm-6 col-md-6">
            <a href="/services/gift/{{ $datas->product_no }}">
	        <div class="thumbnail" style="border:0px">
	          <a href="/services/gift/{{ $datas->product_no }}">
	          <p style="font-size:15px;width:80%;background-color:rgba(0,0,0,0.7);padding:10px;margin-top:40%;position: absolute"><a href="../services/gift/{{ $datas->product_no }}"><b style="color:white">{{ $datas->product_name }}</b></p>
                      <img class="img lazy" src={{ asset("$datas->product_img"."Image1.jpg") }}>
                  </a>
	        </div>
	    </a>
            </div>
                
                <?php
                        
                    }
                }
            }
	    ?>
            </div>
	</div>
@stop