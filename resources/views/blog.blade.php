@extends('layouts.head')
@section('content')
<style type="text/css">
a {
    color: #0254EB
}
a:visited {
    color: #0254EB
}
a.morelink {
    text-decoration:none;
    outline: none;
}
.morecontent span {
    display: none;
}
.comment {
    width: 400px;
    background-color: #f0f0f0;
    margin: 10px;
}
div.card {
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.19);
  background-color: #FAFAFA;
  border-left: 3px solid #d9534f;
}
div.grey-text{
  font-color:#D9D9D9;
}
div.row{
  margin-left: 2%;
}
p.italic {
    font-style: italic;
}
.centered-form{
  margin-top: 60px;
}
.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
label.label-floatlabel {
    font-weight: bold;
    color: #46b8da;
    font-size: 11px;
}
div.dotted{
    border-top: 1px solid #D9D9D9 ;
}
div.jumbotron {
    position: relative;
    background: #000 url("{!! asset('data/img/photo.jpg') !!}") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}
.complete{
    display:none;
}
.more{
    background:lightblue;
    color:navy;
    font-size:13px;
    padding:3px;
    cursor:pointer;
}
</style>
<br/><br/><br/><br/><br/>
<div class="container">
  <div class="jumbotron">
  <center>
    <h1 style="color:white;"><u>Memorable Shaadi</u></h1>
    <!-- <h3>Follow for new features and updates.</h3> -->
    <p class="italic" style="color:white;">Know Your Wedding Stuff</p>
  </center>
  </div>
</div>
<div class="container" id="services"> 
  <div class="col-sm-8">
    <div class="row">
      <?php 
        foreach ($ab as $key) {
      ?>
          <div class="dotted">
            <h5><small>Posted on : <?php echo"$key->date";?></small></h5>
            <?php $len=str_word_count($key->Description);  $l=round($len/100);?>
            <h5><small><?php echo"$l"; ?> min read.</small></h5>
            <h2> {{ $key->Title }} </h2>
          <?php $temp=str_replace(' ', '', $key->Title); 
            $dat = 'data/images/blog/'.$temp.'.jpg';
          ?>
            <img class="img-thumbnail" src=<?php  echo "$dat";  ?>><br><br>
            <div id="demo" class="collapse in">
            <?php
              $des=$key->Description;
              $term=0; 
              $x=0;
                for (; $term<2; $x++) {
                  if ($des[$x]=='.') {
                    # code...
                    $term++;
                  };
                }
              $first=substr($des,0,$x);
              $second=substr($des,$x);
            ?>
            </div>
            <p class="text-justify"><?php echo"$first"; ?></p>
            <div id=<?php echo"$key->Title"; ?> class="accordion-body collapse text-justify"><?php echo"$second"; ?></div>
            <div class=<?php echo"$key->Title"; ?> data-toggle="collapse" href=<?php echo"#"."$key->Title"; ?>>
              <a href="#">Read more...</a><br><br>
            </div><br><br>
            <script>$(.<?php echo"$key->Title"; ?>).click(function(){
              var $this = $(this);
                $this.toggleClass(<?php echo"$key->Title"; ?>);
              });
            </script>
          </div>                
          <?php
          }
          ?>
        </div>
</div>
     
</div>
</div>
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