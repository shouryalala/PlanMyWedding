@extends('layouts.head')
@section('content')
<br/><br/><br/><br/><br/>
<?php
	$from="Memorable Shaadi";
	$email="contact@memorableshaadi.com";
	$indiCC="";
	$path="attachment/";
?>
<script src={{ asset('data/bootstrap/ckeditor/ckeditor.js') }}></script>
<script src={{ asset('data/bootstrap/ckeditor/samples/js/sample.js') }}></script>
<link rel="stylesheet" href={{ asset('data/bootstrap/ckeditor/samples/css/samples.css') }}>
<link rel="stylesheet" href={{ asset('data/bootstrap/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}>
	
<script type="text/javascript">
	var div = document.getElementById('richtext');
</script>
<div class="container-fluid container-table">
	<div class="jumbotron">
	    <div class="row">
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<div class="col-xs-6 col-sm-12 col-md-8 col-offset-12" id="send">
				<table style="width: 100%;background: url(http://memorableshaadi.com/data/email/back.jpg);">
					<tr>
						<td style="max-width:auto"><a href="http://memorableshaadi.com"><img style="width: 100%" src="http://memorableshaadi.com/data/email/header1.jpg"></a></td>
					</tr>
					<tr>
						<td style="width:100%;max-height:400px;display: block;height: 100%;background-repeat:no-repeat"> 
							<table border="0" cellpadding="0" cellspacing="0" class="deviceWidth" style="margin-left:30px;">
				                <tr>
				                    <td valign="top" bgcolor="#ffffff" style="font-size: 12px; color: #687074; font-weight: bold; font-family: Arial, Helvetica, sans-serif;  padding: 20px 50px 0px 50px; ">
				                    	<div id="mailbody" style="min-width:600px;max-width: 600px;background-color: white;margin-bottom: 40px"></div>
				                    </td>
				                </tr>
				            </table>
				        </td>
					</tr>
					<tr>
						<td style="max-width:800px;display: block;background-size: 140%;width:200%;background-repeat:no-repeat;height:300px; ">
							<img alt="" src="http://memorableshaadi.com/data/email/footer1.jpg" width="100%" style="margin-top: -2%">
						</td>
					</tr>
				</table>
			</div>
		</body>
			<script type="text/javascript">
				function wri(){
					var mesgs = document.getElementById("richtext").value;
					mesgs = mesgs.replace(/(?:\r\n|\r|\n)/g, "<br />");
					var bod = document.getElementById("mailbody");
					bod.innerHTML = mesgs;
					document.getElementById("abc").value = document.getElementById("send").innerHTML;
				}
			</script>
		</html>
			<div class="col-xs-12 col-sm-12 col-md-4 bg-info col-offset-2">
				<form role='form' method="POST" action='Email_data' autocomplete="off" enctype="multipart/form-data" accept-charset="utf-8">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div><h2 class="bg-success">Compose Mail : </h2></div>
					<div class="form-group col-md-12" >
						<label for="email-form" for="lg">From Name:</label>
						<input type="text" value='<?php echo"$from"; ?>' name="from" class="form-control" placeholder="From Name" required="required" id="email-form" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="email-to">From Email Address</label>
						<input type="text" value='<?php echo"$email"; ?>' name="address" class="form-control" placeholder="From Email Address" id="email-to" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="name-to">To Name:</label>
						<input type="text" class="form-control" name="to_name" placeholder="To Name" id="name-to" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="email">To Email Address</label>
						<input type="text" class="form-control" name="to_email" placeholder="To Email Address" id="email" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="cc">CC Recipients<small>(separate with commas)</small></label>
						<input type="text" value='<?php echo"$indiCC"; ?>' name="cc" class="form-control" placeholder="CC Recipients" id="cc" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="sub">Subject</label>
						<input type="text" class="form-control" name="subject" placeholder="Subject" id="sub" autocomplete="off">
					</div>
					<div class="form-group col-md-12">
						<label for="richtext">Message</label>
						<textarea class="form-control custom-control" rows="3" cols="3" name="richtext" id="richtext" oninput="wri()" ></textarea>
					</div>
					<div class="form-group col-md-12">
						<label for="Attach"><strong>Add Attachment</strong><br></label>
						<input type="file" class="btn btn-default btn-file" name="atta[]" id="Attach" multiple="multiple"> 
					</div>
					<div><input type="hidden" name="start" id="abc"></div>
					<div class="form-group col-md-6">
						<input type="submit" class="form-control btn-warning">
					</div>
				</form>
			</div>
		</div>
	</div>
</div><br/>
<div class="adjoined-bottom">
	<div class="grid-container">
		<div class="grid-width-100">
			<div id="editor"></div>
		</div>
	</div>
</div>
<script>
	initSample();
</script><br/><br/><br/>
@stop