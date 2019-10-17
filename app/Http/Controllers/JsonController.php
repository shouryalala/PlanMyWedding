<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Storage;
use response;
use Illuminate\Contracts\Routing\ResponseFactory;
class JsonController extends Controller{
	function index($data){
		if($data=='VENUE'){
			$users =  DB::select('select * from `vendor` INNER JOIN `venues` on `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.category= ?', [$data]);
			$ab = array();
			foreach ($users as $user) {
		    	$name = $user->img_folder;
	      		$nm = explode('/',$name);
		    	$no = $user->vendor_no;
	      		$n = $nm[2];
		    	$nam = public_path('data/' . $name . DIRECTORY_SEPARATOR . '*');
		    	$ab[$no] = collect(\Illuminate\Support\Facades\File::glob($nam))->map(function ($path){
            		return asset(str_replace(public_path(), '', $path));
        		})->filter(function ($path){return $path;})->values()->toArray();
			}
			return response()->json(['img'=>$ab,'detail'=>$users]);
		}else if($data == 'CARD'){
		    	$nam = public_path('data/image/card' . DIRECTORY_SEPARATOR . '*');
		    	$ab[] = collect(\Illuminate\Support\Facades\File::glob($nam))->map(function ($path){
            		return asset(str_replace(public_path(), '', $path));
        		})->filter(function ($path){return $path;})->values()->toArray();
			return response()->json(['img'=>$ab]);
		}else if($data == 'DECOR'){
		    	$nam = public_path('data/image/decor' . DIRECTORY_SEPARATOR . '*');
		    	$ab = collect(\Illuminate\Support\Facades\File::glob($nam))->map(function ($path){
            		return asset(str_replace(public_path(), '', $path));
        		})->filter(function ($path){return $path;})->values()->toArray();
			return response()->json(['img'=>$ab]);
		}
		else{
			$users = DB::select('select * from `title` INNER JOIN `title_img` on `title`.title_no = `title_img`.title_no AND `title`.title_name = ?', [$data]);
			//return view('json',['data'=>$users]);
			$ab = array();
			foreach ($users as $user) {
		    	$name = $user->img_folder;
	      		$nm = explode('/',$name);
	      		$n = $nm[2];
		    	$nam = public_path('data/' . $name . DIRECTORY_SEPARATOR . '*');
		    	$ab[$n] = collect(\Illuminate\Support\Facades\File::glob($nam))->map(function ($path){
            		return asset(str_replace(public_path(), '', $path));
        		})->filter(function ($path){return $path;})->values()->toArray();
			}
			return response()->json($ab);
		}
	}
	function users(){
            return view('j');
	}
	public function data(Request $dat){
		$user = $dat->username;
		$pass = $dat->password;
		$email = $dat->email;
		DB::table('user')->insert([
    			'user_name' => $user,
    			'user_email' => $pass, 
    			'user_password' => $email
		]);
		echo($user.$pass.$email);
	}
        function user(){
            $inp = \Illuminate\Support\Facades\Request::all();
            $user = \Illuminate\Support\Facades\Request::get('username');
            $pass = \Illuminate\Support\Facades\Request::get('password');
            $email = \Illuminate\Support\Facades\Request::get('email');
		DB::table('user')->insert([
    			'user_name' => $user,
    			'user_email' => $pass, 
    			'user_password' => $email
		]);
            echo "$user"."$pass"."$email";
            return "done";
        }
        function usrrr(){
            $n = json_decode(file_get_contents('http://memorableshaadi.com/j'), true);
            for($i= 1 ; $i<=96; $i++){
                $data = $n[$i];
                $name = $data['name'];
                $Price = $data['Price'];
                $description = $data['description'];
                $Categories = $data['Categories'];
                $Additional = $data['Additional Info'];
                $add = implode(",",$Additional);
                DB::insert('insert into `card` (product_name,product_rate,description,Categories,Additional) values (?,?,?,?,?)',  ["$name","$Price","$description","$Categories","$add"]);
            }
        }
        function email(){
            //$inp = \Illuminate\Support\Facades\Request::all();
            $user = \Illuminate\Support\Facades\Request::get('username');
            $phone = \Illuminate\Support\Facades\Request::get('phone');
            $email = \Illuminate\Support\Facades\Request::get('email');
            $gathering = \Illuminate\Support\Facades\Request::get('gathering');
            $services = \Illuminate\Support\Facades\Request::get('services');
            $date = \Illuminate\Support\Facades\Request::get('date');
            $message = \Illuminate\Support\Facades\Request::get('message');
		DB::table('query')->insert([
    			'user_name' => $user,
    			'user_phone' => $phone,
    			'user_email' => $email, 
    			'user_gathering' => $gathering,
    			'user_services' => $services,
    			'user_date' => $date,
    			'user_message' => $message
		]);
            echo "$user"."$phone"."$email"."$gathering"."$services"."$date"."$message";
            return "done";
        }
}