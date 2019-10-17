<?php
namespace  App\Http\Controllers;
use DB;
class LocationController extends Controller {
    function index($data){
	$users =  DB::select('select * from `vendor` INNER JOIN `venues` on `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.category= ?', [$data]);
	return view('location.delhi',['data' => $users ]);
    }
}
