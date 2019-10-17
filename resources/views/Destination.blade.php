@extends('layouts.head')
@section('content')
<style type="text/css">
    .d{
        padding: 2px;
        border: 3px;
    }
    .des{
        position: absolute;
        text-align: center;
        font-family: vardana;
        width: 99%;
        background-color: rgba(0,0,0,0.3);
    }
    .des:hover{
        background-color: rgba(0,0,0,0.8);
    }
    h2{
        margin-top: 30%;
        font-size: 30px;
        color: white
    }    
    p{
        color: white
        font-size: 40px;
    }
    .affix{
      visibility: hidden;
      display: none;
    }
</style>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-spy="affix" data-offset-top='5'>
<h3 style="color:black;margin-left: 35%;font-family: Brush Script MT;text-align: center;margin-top: 70px;border: 2px solid white;background-color: rgba(217,199,7,0.8);width: 30%;font-size: 50px;border-radius: 20px;position: fixed;z-index: 20000">Destination Wedding</h3>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
<center>
   <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="lazy" src="{{ asset('data/img/destianation/dubai.jpg') }}" alt="...">
      <div class="carousel-caption" id="tex"><p class="text-justify" style="color: white;background-color: rgba(0,0,0,0.5);margin-top: 40px;font-size: 20px;padding:15px">
            Do you plan to have your wedding in the forts of Jaipur and Jodhpur or in the wilderness of Jim Corbett? Do the backwaters of Kerala excite you or the sand-filled beaches of Goa arouse the feeling of love in you?
            Fancy a wedding abroad in the skyscrapers of Dubai or the island nation of Indonesia or do you expect a royal treatment in the city of Lucknow on your wedding day? We have plenty of options for the perfect destination wedding! Explore...
            </p></div>
    </div>
    <div class="item">
      <img class="lazy" src="{{ asset('data/img/destianation/India_Wedding.jpg') }}" alt="...">
      <div class="carousel-caption" id="tex">
          <h1>WE ARE HERE FOR YOU</h1>
          <p>
                We are commited to <br/>
                    making your wedding memorable.<br/>
                    OVER 100+ SATISFIED CUSTOMERS
          </p>
      </div>
    </div>
    <div class="item">
      <img class="lazy" src="{{ asset('data/img/destianation/reethi_rah_maldives_pool_beach_13_01_2011_9025_0.jpg') }}" alt="...">
      <div class="carousel-caption" id="tex">
        <h1 class="desti">Destination Weddings</h1>
      </div>
    </div>
  </div>
</center>
</div>
 
<div class="container-fluid" style="padding: 0px">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d">
        <span class="des"><h2>Royal Wedding</h2></span>
        <img class="lazy responsive-img" src="data/img/venue1/udaipur.jpg" width="100%">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d">
        <span class="des"><h2>Beach Wedding</h2></span>
        <img class="lazy responsive-img" src="data/img/venue1/dubai wedding.jpg" width="100%">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d">
        <span class="des"><h2>Hilly Wedding</h2></span>
        <img class="lazy responsive-img" src="data/img/venue1/ladak.jpg" width="100%">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d">
        <span class="des"><h2>Cruise Wedding</h2></span>
        <img class="lazy responsive-img" src="data/img/venue1/bangkok wedding.jpg" width="100%">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d">
        <span class="des"><h2>5 Star Wedding</h2></span>
        <img class="lazy responsive-img" src="data/img/venue1/Lebua-Sky-Bar-Best-Rooftop.jpg" width="100%">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d">
        <span class="des"><h2>Forest Wedding</h2></span>
        <img class="lazy responsive-img" src="data/img/venue1/kerala.jpg" width="100%">
    </div>
</div>





  <!-- /////////////////////                    location             ///////////////////////////// -->
  
  <div class="container-fluid" id="location"><br/>
    <div class="">
        <div class="text-center line"><b>Locations</b></div>
    </div><br/><br/>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ asset('location/VENUE' )}}">Bangkok</a>
        <img class="lazy responsive-img" src="data/img/venue/bangkok.jpg" alt="" width="100%">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ asset('location/VENUE' )}}">Indonesia</a>
        <img class="lazy responsive-img" src="data/img/venue/indonesia.jpg" alt="" width="100%">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ asset('location/VENUE' )}}">Jodhpur</a>
        <img class="lazy responsive-img" src="data/img/venue/jodhpur.jpg" alt="" width="100%">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ asset('location/VENUE' )}}">Dubai,UAE</a>
        <img class="lazy responsive-img" src="data/img/venue/dubai.jpg" alt="" width="100%">
      </div>       
    </div>
  </div>
  <br/><br/>







@stop