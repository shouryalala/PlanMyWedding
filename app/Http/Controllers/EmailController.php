<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller{
	public function index()
	{
		return view('vendor.email');
	}
	public function email(Request $data){
		$from = 	$data->input('from');	
		$address = 	$data->input('address');
		$ton = 	$data->input('to_name');
		$to = $data->input('to_email');
		$cc = 		$data->input('cc');
		$subje = 	$data->input('subject');
		$mesg = 	$data->input('richtext');
		$headers = "From: marwhasachin@gmail.com" . "\r\n" .
            "CC: marwhasachin@gmail.com";
            mail($to,$subje,$mesg,$headers);
            return Redirect::back();
	}
}