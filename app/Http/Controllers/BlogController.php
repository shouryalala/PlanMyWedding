<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class BlogController extends Controller{
	function index(){
		$users = DB::select('Select * from `blog`');	
		return view('blog',['ab'=>$users]);
	}
	function admin(){
		return view('admin/Ablog');
	}
	function publish(Request $request){
		$title = $request->input('title');
		$html = $request->input('mytext');
		$remark = $request->input('remark');
		$date = date('Y-m-d H:i:s');
		$img ="sahbasj";
		DB::table('blog')->insert([
				'Title' => $title,
				'Description' => $html,
				'remarks' => $remark,
				'date' => $date,
				'img' =>$img
			]);
		return "as";
	}
}