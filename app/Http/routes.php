
<!-- Created by Shourya Lala
    15-7-2016-->


<?php

Route::get('/',function(){      
      return view('planShaadi.home');
});
Route::get('test','planShaadi\helloController@index');      
Route::get('handler','planShaadi\codeController@index');
Route::get('mailme','planShaadi\mailController@index');
//Route::get('handler',function(){
//$budget = $_GET['budget'];
//$shaadi_size = $_GET['shaadi_size'];
//            return view('planShaadi.handler',['size'=> $shaadi_size,'']);
//      });
/*
Route::get('/','DataController@index');
Route::get('services/{data}','ServicesController@index');
Route::get('team','DataController@team');
Route::get('service/{data}','ServicesController@venue');

Route::get('destination_wedding',  function () {
    return view('Destination');
});

Route::get('services/data/{dat}','ServicesController@data');
Route::get('services/gift/{data}','ServicesController@gift');
Route::get('services/CARDS/{data}','ServicesController@card');
Route::get('venue/{data}','ServicesController@venue_display');
Route::get('location',function(){
	return view ("locations");
});
Route::get('location/{data}','LocationController@index');



Route::get('venue_disp/{data}','VenueController@index');
Route::get('idea','BlogController@index');
Route::get('Email','EmailController@index');
//Route::post('Email_data','EmailController@email');
Route::post('Email_data',  function (){
            $phone = \Illuminate\Support\Facades\Request::get('email1');
            $email = \Illuminate\Support\Facades\Request::get('msg');
            $gathering = \Illuminate\Support\Facades\Request::get('name1');
            $services = \Illuminate\Support\Facades\Request::get('phone1');
            $to = "memorableshaadi@gmail.com";
            $subject = "My subject";
            $txt = "Email Add-"." ".$phone." "."Name-"." ".$gathering." "."Message-"." ".$email." "."Phone No-"." ".$services;
            $headers = "From: contact@memorableshaadi.com" . "\r\n" .
            "CC: vishu.tanwar@gmail.com";
            mail($to,$subject,$txt,$headers);
});



Route::post('Email_d',  function (){
            $phone = \Illuminate\Support\Facades\Request::get('uname');
            $email = \Illuminate\Support\Facades\Request::get('uemail');
            $email = \Illuminate\Support\Facades\Request::get('udate');
            $gathering = \Illuminate\Support\Facades\Request::get('ugath');
            $services = \Illuminate\Support\Facades\Request::get('uphone');
            $messg = \Illuminate\Support\Facades\Request::get('umessage');
            $page = \Illuminate\Support\Facades\Request::get('page');
            $cat[] = \Illuminate\Support\Facades\Request::get('cat');
            $to = "memorableshaadi@gmail.com";
            $subject = $page;
            $txt = "Email Add-"." ".$phone.", "."Name-"." ".$gathering.", "."Message-"." ".$email.", "."Phone No-"." ".$services.", "."Message-"." ".$messg.", "."Query-"." ".$page;
            $headers = "From: contact@memorableshaadi.com" . "\r\n" .
            "CC: marwhasachin@gmail.com";
            mail($to,$subject,$txt,$headers);
            return Redirect::back();
});



//------------------- REST JSON Response------------------
Route::get('json_img/{data}','JsonController@index');
Route::get('j','JsonController@users');
Route::get('us','JsonController@user');
Route::get('ja', 'JsonController@usrrr');
Route::post('users','JsonController@data');
Route::get('semail','JsonController@email');

Route::get('js',function(){
    return view('json/json');
});





Route::get('Image','ImageController@index');
Route::post('upload','ImageController@upload');

//======== search ======================
Route::POST('site/ajax','SearchController@search');
Route::GET('search','SearchController@data');


Route::GET('admin_blog','BlogController@admin');
Route::POST('blog_post','BlogController@publish');

*/