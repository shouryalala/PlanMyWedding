@extends('layouts.head')
@section('content')
<!-- categories menu ends --><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
  <div class="page-header">
    <legend class= "text-center bg-danger"><?php {{ echo "$name"; }} ?></legend>
  </div><br>
  <?php
    foreach ($data as $datas) {
      $name = $datas->img_folder;
      $nm = explode('/',$name);
  ?>
    <a href="">
      <div class="col-sm-4 col-md-4" data-toggle="modal" data-target="#{{ $nm[2] }}">
        <div class="thumbnail">
          <a><img class="img-thumbnail lazy" src={{ asset('data/'."$datas->img_folder".'Image4.jpg') }}></a>
            <div class="caption">
              <a>{{ $nm[2] }}</a>
            </div>
        </div>
      </div>
    </a>
    <div class="modal fade" id={{ $nm[2] }} role="dialog">
      <div class="modal-dialog modal-lg" style="width:100%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><?php echo"$nm[2]"; ?></h4>
          </div>
          <div class="modal-body">
            <?php 
              $mmn = 'data/'.$name;
              $ab = glob($mmn."*jpg");
              $m = count($ab);
              for($i=1;$i<count($ab);$i++) { 
              $ml = '../'."$mmn".'Image'."$i".'.jpg';
                echo"
                  <div class='col-sm-4 col-md-4 col-lg-3'>
                   <div class='polaroid'>
                    <div class='thumbnail'>
                      <a><img class='img-rounded lazy' src='$ml' ></a>
                    </div>
                   </div>
                  </div>";
              }
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php
    }
  ?>
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