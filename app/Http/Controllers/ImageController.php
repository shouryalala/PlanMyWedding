<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Storage;
use Illuminate\Support\Facades\Redirect;
use DB;
class ImageController extends Controller{
	public function index(){
		$data = DB::select('select * from `galary`');
		return view('admin.Image',['data'=>$data]);
	}
	public function upload(Request $request){
		$file = $request->file('file');
		$filename = $file->getClientOriginalName();
		$destination = config('app.fileDestinationPath').'/'.$filename;
		$uploded = Storage::put($destination,file_get_contents($file->getRealPath()));
		if(isset($uploded)){
			$path = '../storage/app/'.$destination;
			DB::table('galary')->insert(
				[
					'image_path' => $path,
					'visible' => 1
				]
			);
		}
		return Redirect::back();
	}
}