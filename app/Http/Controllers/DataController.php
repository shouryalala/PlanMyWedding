<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
class DataController extends Controller{
	public function index(){	
	    return view('welcome');
    }
    public function team(){
    	return view('team');
    }
}