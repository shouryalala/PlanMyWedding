@extends('layouts.head')
@section('content')

<link rel="stylesheet" href="{{ asset('data/bootstrap/mycss/homeshaadi.css') }}">


<!-- //////////////////////////////////              slider starts              //////////////////////// -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<center>
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->
   <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="lazy" src="data/head/bg2.jpg" alt="...">
      <div class="carousel-caption" id="tex">We are a Wedding Management Company <br/>
                    providing key services for your weddings/events</div>
    </div>
    <div class="item">
      <img class="lazy" src="data/head/bg1.jpg" alt="...">
      <div class="carousel-caption" id="tex">
          <h1>WE ARE HERE FOR YOU</h1>
          <p>
          		We are commited to <br/>
                    making your wedding memorable<br/>
                    OVER 100+ SATISFIED CUSTOMERS
          </p>
      </div>
    </div>
    <div class="item">
      <img class="lazy" src="data/head/Destination Memorable.jpg" alt="..." onclick="window.open( 'http://memorableshaadi.com/destination_wedding');">
      <div class="carousel-caption" id="tex">
      	<h1 class="desti">Destination Weddings</h1>
      </div>
    </div>
  </div>
</center>


</div>

  
    <div data-spy="affix" data-offset-top='460' class="container-fluid searc">
        <div class="panel-heading clearfix">
            <form method="GET" action={{ asset('search/')}}>
                <div class="input-group col-lg-4 col-lg-offset-4 ">
                    <input id="search_box" autocomplete="off" name="search" type="text" class="form-control" placeholder="What are you looking for ?">
                    <div class="input-group-btn">
                        <button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
   </div>



<!-- ////////////////////////////////////////  main_slider            /////////////////////////////////////////   -->
<div class="container" id="main_slider">
  <div id="main">
    <div class="">
        <div class="text-center line"><b>Making those special moments worth a lifetime for you!
</b></div><br/>
    </div>
        <p class="text-justify line-data">
          Memorable Shaadi provides you a complete assortment of services so that you can worry less and enjoy the wedding celebrations to your heart’s content. Our hand-picked partners provide the best-in-class services for all your wedding-related needs including Venues, Decorations, Catering, Photography, Invitations and Entertainment for you and your guests. <br/><br/>
At Memorable Shaadi, we truly understand how important this day is for you and your family. Our team is sincerely dedicated to make it memorable for the rest of your life. We know that a match is made in heaven but completed on earth.


          <br/><br/>
          <b class="fonts">Require our help in individual services? Don’t hesitate! <a href="#contact" class="call">Contact Us</a>  and we will get it done!</b>
          </p>
  </div>
</div>








<!-- //////////////                              our servicer                          /////////////  -->
<div class="container" id="services">
  <br/>
    <div class="">
    	<div class="text-center line"><b>Our Services</b></div>
    </div><br/>
  <div class="col-sm-4 col-md-4 col-lg-3">
      <div class="polaroid thumbnail">
      <a class="ban" href="service/VENUE">Venues</a>
      <a href="service/VENUE"><img class="lazy img" src= "{!! asset('data/images/services/venue.jpg') !!}" alt="Venue"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/CATERING">Catering</a>
      <a href="services/CATERING"><img class="lazy img" src= "{!! asset('data/images/services/catering.jpg') !!}" alt="Catering"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/PHOTOGRAPHY">Photography</a>
      <a href="services/PHOTOGRAPHY"><img class="lazy img" src= "{!! asset('data/images/services/photography.jpg') !!}" alt="Photography"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/GIFTS">Gifts</a>
      <a href="services/GIFTS"><img class="lazy img" src= "{!! asset('data/images/services/gifts.jpg') !!}" alt="Gifts"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/DECOR">Decorators</a>
      <a href="services/DECOR"><img class="lazy img" src= "{!! asset('data/images/services/decor.jpg') !!}" alt="Decorators"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="{{ url('services',['CARDS'=> 'c']) }}">Invitation Cards</a>
      <a href="services/CARDS"><img class="lazy img" src= "{!! asset('data/images/services/invitation cards.jpg') !!}" alt="Cards"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/COINS">Gold/Silver Coins</a>
      <a href="services/COINS"><img class="lazy img" src=  "{!! asset('data/images/services/gold coins.jpg') !!}" alt="Coins"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/BAND">Wedding Bands</a>
      <a href="services/BAND"><img class="lazy img" src= "{!! asset('data/images/services/band.jpg') !!}" alt="Bands"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/CHOREOGRAPHY">Choreography</a>
      <a href="services/CHOREOGRAPHY"><img class="lazy img" src= "{!! asset('data/images/services/coreography.jpg') !!}" alt="Choreography"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/SWEETS">Sweets</a>
      <a href="services/SWEETS"><img class="lazy img" src= "{!! asset('data/images/services/sweets.jpg') !!}" alt="Sweets"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/MAKE">Make Up</a>
      <a href="services/MAKE"><img class="lazy img" src="{!! asset('data/images/services/makeup.jpg') !!}" alt="Make Up"></a>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="polaroid thumbnail">
      <a class="ban" href="services/ENTERTAINMENT">Entertainment</a>
      <a href="services/ENTERTAINMENT"><img class="lazy img" src= "{!! asset('data/images/services/entertainment.jpg') !!}" alt="Entertainment"></a>
    </div>
  </div>
</div>





  <!-- /////////////////////                    location             ///////////////////////////// -->
  
  <div class="container" id="location"><br/>
    <div class="">
    	<div class="text-center line"><b>Locations</b></div>
    </div><br/><br/>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
       <div class="col-sm-12 thumbnail" style="background-color: rgba(0,0,0,0.0);">
        <a class="bane" href="{{ asset('location/VENUE' )}}">Delhi-NCR</a>
        <img class="lazy img-circle circle responsive-img" src="data/img/venue/delhi.jpg" alt="">
       </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
       <div class="col-sm-12 thumbnail" style="background-color: rgba(0,0,0,0.0);">
        <a class="bane" href="#">Mumbai</a>
        <img class="lazy img-circle circle responsive-img" src="data/img/venue/mumbai.jpg" alt="">
       </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
       <div class="col-sm-12 thumbnail" style="background-color: rgba(0,0,0,0.0);">
        <a class="bane" href="#">Goa</a>
        <img class="lazy img-circle circle responsive-img" src="data/img/venue/goa.jpg" alt="">
       </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
       <div class="col-sm-12 thumbnail" style="background-color: rgba(0,0,0,0.0);">
        <a class="bane" href="#">Bangkok</a>
        <img class="lazy img-circle circle responsive-img" src="data/img/venue/bangkok.jpg" alt="">
       </div>
      </div>        
    </div>
    <center>
    <a class="btn btn-danger" role="button" role="button" href="location">
      <i><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View all cities</i>
    </a>
    </center>
  </div>
  <br/><br/>







<!-- /////////////////////////////////////////       contact /////////////////////////  -->
<div class="container" id="contact"><br/>
      <div class="">
        <div class="text-center line"><b>Contact us</b></div>
      </div><br/>
        <div class="row">
            <div class="col-sm-6">
                <div id="maps">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="95%" height="200" src="https://maps.google.com/maps?hl=en&q=27,Community Center,Naraina Industrial Area,New Delhi-110028&ie=UTF8&t=roadmap&z=15&iwloc=B&output=embed"></iframe>
                    <br><br>
                </div>
                <p><span class="glyphicon glyphicon-home"></span><b> &nbsp;27,Community Center,Naraina Industrial Area,New Delhi-110028</b></p><br>
                <p><span class="glyphicon glyphicon-earphone"></span><b> &nbsp;011-64549945</b></p><br>
                <p><span class="glyphicon glyphicon-envelope"></span><b> &nbsp;contact@memorableshaadi.com</b></p><br>
                <p><span class="glyphicon glyphicon-heart"></span><b> &nbsp;www.memorableshaadi.com</b></p>
            </div>
            <div class="col-sm-6">
                <h3> We Would Love To Hear From You.</h3>
                <form id="contactForm" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label>Name</label>
    			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
                        <input class="form-control required" id="name" name="fullName" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
                    </div>
                    <div class="form-group">
                        <label>Message</label><textarea  id="message" class="form-control" name="content" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
                    </div>
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input class="form-control email" id="email" name="email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control phone" id="phone" name="phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="number">
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3" id="messages"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success pull-right">Submit   &nbsp;<span class="glyphicon glyphicon-thumbs-up"></span></button>
                        <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                    </div>
                </form>
            </div>
        </div>
</div>
    <!-- contact ends -->


      <br><br>
<!--  //////////////////////////////////////////          About                 /////////////////////// -->
<div id="about">
  <div class="container"><br/>
   <div class="">
        <div class= "text-center line"><b>About Us</b></div>
   </div><br/>
    <p class="text-justify line-data"> In India marriage is a ceremony where two souls, two families and two worlds come together to become one. It’s a celebration to be remembered and cherished for life long. And that’s exactly what we aspire to do for you, we want you and your family to enjoy the journey and not worry about the Venue or catering or decoration or for that matter any logistical requirement that goes into making it memorable. The biggest worry for most of us, “budget”; let’s just say, you tell us the limit and we’ll deliver the best. That’s what we are here for.<br><br>
    We at Memorable Shaadi will provide a complete buffet of services so that you can worry less, enjoy the celebrations and spend more time with the to-be bride/groom. We have hand-picked our partners who can provide the best in class services including venues, decoration, catering, photography, entertainment and travel arrangement for you and your family.<br><br>
    In case you want us to help you with individual services, don’t hesitate just call us and we’ll get it done.<br><br>
    We are a wedding management company run by a highly professional team of engineers from IIT, Chartered Accountant and MBA’s from Top Business Schools. Driven by the same passion of making the ever so confusing, ad-hoc wedding industry simpler and organized.</p>
  </div>
</div>


<br/><br/>








  <!--//////////////////////////////////////             Our Team                 ///////////////////////////////-->
<div class="container"><br/>
    <div class="">
      <div class= "text-center line meet"><b>Meet Our Team</b></div>
    </div><br/>
    <div class="col-sm-6 col-md-3 col-xs-12 team">
     <div class="col-md-12">
      <div id="f1_container" style="width:100%">
        <div id="f1_card" class="shadow">
          <div class="front face">
            <img class="lazy img-rounded responsive-img" src="data/img/team/ujwal.jpg" style="width:100%">                    
              <div class="caption">
                <a><b>Ujwal Kalra</b></a>
              </div>
          </div>
          <div class="back face center"><br/>
            <p><u><b>UJWAL KALRA</b></u></p>
            <p>Founder</p>
            <p class="text-justify ldata">An entrepreneur at heart, always yearning to do something out of the box and creating value for the society. He graduated from IIT Guwahati. He quit his fancy job at a leading MNC Consultancy to pursue his passion.</p>
          </div>
        </div>
      </div><br/>
     </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xs-12 team">
     <div class="col-md-12">
      <div id="f1_container" style="width:100%">
        <div id="f1_card" class="shadow">
          <div class="front face">
            <img class="lazy img-rounded" src="data/img/team/vishu.jpg" style="width:100%">                    
              <div class="caption">
                <a><b>Vishu Tanwar</b></a>
              </div>
          </div>
          <div class="back face center"><br>
            <p><u><b>VISHU TANWAR</b></u></p>
            <p>Partner</p>
            <p class="text-justify ldata">Vishu’s unique understanding in planning, management and finance is helping to create value for and position of Memorable Shaadi as a market leader. He holds a Masters and Bachelors degree from IIT Delhi.</p>
          </div>
        </div>
      </div><br>
     </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xs-12 team">
     <div class="col-md-12">
      <div id="f1_container" style="width:100%">
        <div id="f1_card" class="shadow">
          <div class="front face">
            <img class="lazy img-rounded responsive-img" src="data/img/team/swati.jpg" style="width:100%">                    
            <div class="caption">
              <a><b>Swati Kawatra</b></a>
            </div>
          </div>
          <div class="back face center"><br>
            <p><u><b>SWATI KAWATRA</b></u></p>
            <p>Partner</p>
            <p class="text-justify ldata">With over 3 years of experience in product management and business development, Swati is a strategist at heart. Her forte lies in effectively planning projects and getting them executed.</p>
          </div>
        </div>
      </div><br>
     </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xs-12 team">
     <div class="col-md-12">
      <div id="f1_container" style="width:100%">
        <div id="f1_card" class="shadow">
          <div class="front face">
            <img class="lazy img-rounded responsive-img" src="data/img/team/arvind.jpg" style="width:100%">                    
            <div class="caption">
              <a><b>Arvind Kalra</b></a>
            </div>
          </div>
          <div class="back face center"><br>
            <p><b><u>ARVIND KALRA</u></b></p>
            <p>Partner</p>
            <p class="text-justify ldata">A true strategist and a finance person, he is Chartered Accountant by profession. His rich and vastly diverse experience is echoed by the fact that he sits on the Board of leading listed companies of India.</p>
          </div>
        </div>
      </div><br>
     </div>
    </div>
    <center>
    <a class="btn btn-success span6 team-button" role="button" href="team">
      <span class="glyphicon glyphicon-eye-open"></span><span style="margin-top:3px">&nbsp;View our complete team</span>
    </a>
    </center>
</div>

    <!-- team ends -->

<br/><br/>

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
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/925163042/?value=10.00&amp;currency_code=USD&amp;label=6D3ACLLek2UQoryTuQM&amp;guid=ON&amp;script=0"/>
</div>

@stop