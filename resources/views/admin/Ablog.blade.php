@extends('layouts.head')
@section('content')
<br/><br/><br/><br/><br/><br/>
<style type="text/css">
.ta-editor {
  min-height: 200px;
  height: auto;
  overflow: auto;
  font-family: inherit;
  padding: -22px !important;
}
body{
	background-color: #ccf2ff
}
.container{
	padding: 0px
}
.tex{
	padding: 50px;
	border-radius: 10px;
	background-color: white;
	margin-left: 20px
}
.pub{
	margin-top: 10px;
	width: 120px
}
</style>
<body onload="iframeon()">
	<div class="container">
		<div class="col-lg-9 tex">
			<div>
				
			</div>
			<legend><h3>Blog</h3></legend>
			<form action="{{ asset('blog_post') }}" id="myform" method="post" role="form" enctype="multipart/form-data">
    			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" name="title" class="form-control" id="title"></input>
				</div>
				<div class="form-group">
					<label for="Description">Description:</label><br/>
					<div id="wysiwyg_cp" style="padding:8px; width:700px;">
					  <input class="btn" type="button" onClick="iBold()" value="B"> 
					  <input class="btn" type="button" onClick="iUnderline()" value="U">
					  <input class="btn" type="button" onClick="iItalic()" value="I">
					  <input class="btn" type="button" onClick="iFontSize()" value="Text Size">
					  <input class="btn" type="button" onClick="iForeColor()" value="Text Color">
					  <input class="btn" type="button" onClick="iHorizontalRule()" value="HR">
					  <input class="btn" type="button" onClick="iUnorderedList()" value="UL">
					  <input class="btn" type="button" onClick="iOrderedList()" value="OL">
					  <input class="btn" type="button" onClick="iLink()" value="Link">
					  <input class="btn" type="button" onClick="iUnLink()" value="UnLink">
					  <input class="btn" type="button" onClick="iImage()" value="Image">
					</div>
					<input type="hidden" style="display: none;" class="form-control" name="mytext" id="mytext">
					<iframe name="richtext" style="height: 200px" class="form-control" id="richtext" ></iframe>
				</div>
				<div class="form-group">
					<label for="Remarks">Remarks:</label>
					<textarea class="form-control" name="remark" id="Remarks"></textarea>
				</div>
		</div>
		<div class="col-lg-2 tex">
			<legend>Publish</legend>
			<button class="btn btn-md btn-info pub">Preview</button>
			<input onClick="javascript:submit_for()" type="button" class="btn btn-md btn-primary pub" value="Save">
			<button class="btn btn-md btn-default pub">Publish</button>
			</form>
		</div>
	</div>
</body>
	<br/><br/><br/>
	<script type="text/javascript" src="{{ asset('data/bootstrap/myjs/texteditor.js') }}"></script>
	<script type="text/javascript">
		function iImage(){

		}
		function submit_for(){
			var theForm = document.getElementById("myform");
			var a =  document.getElementById("mytext").value = window.frames["richtext"].document.body.innerHTML;
			theForm.submit();
		}
	</script>
@stop