<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
class VenueController extends Controller{
	public function index($data){
		$users =  DB::select('select * from `vendor` INNER JOIN `venues` on `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.vendor_no= ?', [$data]);
		$exact=$users[0]->location;
		$similiar=DB::select('select * from `vendor` INNER JOIN `venues` on `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.location= ?', [$exact]);	
	    return view('venue_page',['venue' => $users,'simi' => $similiar]);
    }
}