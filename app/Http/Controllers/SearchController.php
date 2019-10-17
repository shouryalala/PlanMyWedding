<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use File;
use Storage;
use response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
class SearchController extends Controller{
    function search(){
        $usee = \Illuminate\Support\Facades\Request::get('ar');
        $user= DB::select('SELECT name FROM `vendor` WHERE name LIKE ? AND category="venue"',['%'.$usee.'%']);
        $userr= DB::select('SELECT * FROM `product` WHERE product_name LIKE ? ',['%'.$usee.'%']);
        $data = array();
        foreach ($user as $an){
            $data[] = $an->name;
        }
        foreach ($userr as $am){
            $data[] = $am->product_name;
        }
        return $data;
    }
    function data(){
        $url = $_GET['search'];
        $query[] = DB::select('SELECT * FROM `vendor` inner join `venues` on `vendor`.vendor_no = `venues`.vendor_no WHERE `vendor`.name = ?',[$url]);
        foreach ($query[0] as $q){
            if(isset($q->category)){
                $mm = $q->location;
            }
        }
        if(isset($mm)){
            $que[] = DB::select('SELECT * FROM `vendor` inner join `venues` on `vendor`.vendor_no = `venues`.vendor_no WHERE `vendor`.location = ? and `vendor`.name != ?',[$mm,$url]);
            $query = array_merge($query,$que);
            return view('search',['data' => $query,'name'=>$url]);
        }  else {
            $query[] = DB::select('SELECT * FROM `product` where product_name LIKE ?',["%".$url."%"]);
            return view('search',['data' => $query,'name'=>$url]);
        }
    }
}