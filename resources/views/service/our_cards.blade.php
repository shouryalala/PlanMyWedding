@extends('layouts.head')
@section('content')
<br><br><br><br><br><br><br>
<style type="text/css">
    .col-lg-4{
        padding: 1px;
    }
    .img-wrapper {
    display: inline;
    overflow: hidden;
        top:0;   
    }

    .img-wrapper img {        
        vertical-align: middle;
    }
    body{
    background-color: #fdfed5;
    }
.article-slide .carousel-indicators {
    bottom: 0;
    left: 0%;
    margin-left: 0px;
    margin-top: 100%;
    width: 100%;
}
/* Indicators list style */
.article-slide .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 54px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    width: 100px;
    background-color: rgba(0,0,0,0);
}
/* Indicators images style */
.article-slide .carousel-indicators img {
    border: 0px;
    float: left;
    height: 100%;
    left: 0;
    width: 100px;
    margin-top: 75%;
    background-color: rgba(0,0,0,0);
    box-shadow: 5px 5px 5px #888888;
}

</style>


<div class="container-fluid">
    <div class="col-md-8 col-md-offset-1">
        <div id="carousel-example-generic" class="carousel slide article-slide" data-ride="carousel" style="box-shadow: 5px 5px 5px #888888;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li id="abc" data-target="#carousel-example-generic" data-slide-to="0">
                <img alt="" src="{{ asset('data/image/gifts/slid5.jpg') }}">
              </li>
              <li id="abc" data-target="#carousel-example-generic" data-slide-to="1" class="active">
                <img alt="" src="{{ asset('data/image/gifts/slid1.jpg') }}">
              </li>
              <li id="abc" data-target="#carousel-example-generic" data-slide-to="2">
                <img alt="" src="{{ asset('data/image/gifts/slid2.jpg') }}">
              </li>
              <li id="abc" data-target="#carousel-example-generic" data-slide-to="3">
                <img alt="" src="{{ asset('data/image/gifts/slid3.jpg') }}">
              </li>
              <li id="abc" data-target="#carousel-example-generic" data-slide-to="4">
                <img alt="" src="{{ asset('data/image/gifts/slid4.jpg') }}">
              </li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{ asset('data/image/gifts/slid5.jpg') }}" alt="Flower">
              </div>
              <div class="item">
                <img src="{{ asset('data/image/gifts/slid1.jpg') }}" alt="Chania">
              </div>

              <div class="item">
                <img src="{{ asset('data/image/gifts/slid2.jpg') }}" alt="Chania">
              </div>

              <div class="item">
                <img src="{{ asset('data/image/gifts/slid3.jpg') }}" alt="Flower">
              </div>
              
              <div class="item">
                <img src="{{ asset('data/image/gifts/slid4.jpg') }}" alt="Flower">
              </div>
              
            </div>
        </div><br>
    </div>
<script type="text/javascript">
$('.carousel-indicators  li').on('mouseover',function(){
    $(this).trigger('click');
})
</script>
</div>


<div class="container" style="margin-top: 100px">
        <?php foreach($data as $dat) 
        	{ 
        ?>
    <div class="col-lg-4 img-wrapper">
        <div style="margin-top: 5px">
        <a href="{{ 'CARDS/'.$dat->product_no }}">
            <span style="position: absolute;margin-top: 2%;z-index: 89;margin-left: 75%;background-color: rgba(0,0,0,0.2)">
                <button class="btn btn-warning btn-circle" style="border-radius:20px"><i class="fa fa-inr fa-2x" style="color:red"></i></button>
                <span style="font-size: 20px;color: white"><?php echo $dat->product_rate;  ?></span>
            </span>
            <img class="img-responsive" src="{{ asset('data/image/cards/'.$dat->product_name.'_1.jpg') }}">
        </a>
        </div>
    </div>
        <?php
        	}
        ?>
        <center>{!! $data->render() !!}</center>
</div>
<br><br><br><br><br><br><br>
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