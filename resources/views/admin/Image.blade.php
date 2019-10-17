@extends('layouts.head')
@section('content')
<br/><br/><br/><br/><br/><br/>
	<div class="container-fluid">
		<div class="col-lg-4">
			<form action="{{ asset('upload') }}" method="post" role="form" enctype="multipart/form-data">
    			<input type="hidden" id="csrf-token" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<input type="file" name="file" multiple="multiple" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit">
				</div>
			</form>
		</div>
	</div>
	<div class="container-fluid">
			<div class="col-lg-12 col-md-3">
		<?php foreach ($data as $key): ?>
				<img style='width: 200px;height: 200px' src='{{ asset("$key->image_path") }}'>
		<?php endforeach ?>
			</div>
	</div>
<br/><br/><br/><br/><br/><br/>
@stop