@extends('layouts.head')
@section('content')
<!-- categories menu ends -->
<div style="background-color:#fafafa"><br/><br/><br/><br/><br/>
<div class="container-fluid">
 <div class="jumbotron">
  <div class="page-header">
    <span class="text-right" style="font-family:Charlemagne Std; font-size:40px"><?php {{ echo "$name"; }} ?></span>
  </div><hr style="border:4px solid gray;border-radius:4px">


  <br>

  <?php
    foreach ($data as $datas) {
      $name = $datas->img_folder;
      $nm = explode('/',$name);
  ?>
  
  <div class="col-sm-4 col-md-4">
    <a href="data/{{ $datas->vendor_no }}">
      <div data-toggle="modal" data-target="#{{ $nm[2] }}">
        <div class="thumbnail" style="border:0px">
          <img class="img lazy" src={{ asset("$datas->img_folder".'Image4.jpg') }}>
            <div class="caption">
              <a class="text-success" href="" style="font-family:Verdana;font-size:20px;text-align:right !importent"><?php echo"$datas->name"; ?></a>
            </div>
        </div><hr style="border:1px solid gray">
      </div>
    </a>
  
    
    <div>
          <div class="col-md-12 table-responsive" style="text-align:left;font-size:16px">
          <table border="0" class="table table-condensed table-hover col-md-12" >
            <tr>
               <td class="text-left col-md-7">
                <button class="btn btn-warning btn-circle" style="border-radius:20px"><i class="fa fa-inr fa-2x" style="color:red"></i></button>
                <span class="text-warning" style="font-family:Verdana"><b>Starting From</b></span>
               </td>
               <td class="text-right">
                <span style="font-family:Verdana">
                  <span style='font-size:10px'>INR</span><?php echo "$datas->p_event"; ?>
                </span>
               </td>
            </tr>
          </table>
          </div>
      <span>
          <button class="btn btn-info col-md-12 btn-space" style="margin-bottom:30px" data-toggle="modal" data-target="#loginModal">Book Now</button>
      </span>
      
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content login-modal">
            <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #d9534f" >
                  <strong class="">
                    <font size="2"><font>
                    <b style="color: white"><i class="fa fa-tasks" style="color: white"></i>&nbsp;Request Memorable Shaadi Special price</b>
                  </strong>
                </div>
                <div class="panel-body">
                  <form id="contact" action="{{ asset('Email_d') }}" class="margin-bottom-10" method="post" role="form">
                      <input type="hidden" name="page" value="<?php echo"$datas->name"; ?>">
    			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
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
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Venue"> Venue
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Catering"> Catering
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Photography"> Photography
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Decorator"> Decorator
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Band"> Wedding Band
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Choreography"> Choreography
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Makeup"> Makeup
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Entertainment"> Entertainment
                        </label>
                    </div>
                    <button type="submit" class="btn btn-danger" id="submit">Submit</button> 
                  </form>
                </div>
                <div class="panel-footer" style="background-color: #d9534f">
                    <div style="color: white">We Will contact You Soon!!</div>
                </div>
              </div><br><br>
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
</div><br><br>
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