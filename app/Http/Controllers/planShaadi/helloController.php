<?php 

namespace App\Http\Controllers\planShaadi;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class helloController extends Controller{
	public function index(Request $request){		
		$data = $request->input('us');
		//$current = $_GET[$current];
	    //return view('planShaadi.test',['img'=> $current]);
	    
	    return view('planShaadi.test',['data' => $data]);
    }
}
