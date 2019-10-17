<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use App\Http\Controllers\Controller;
class ServicesController extends Controller{
    public function index($data){
        $users = DB::select('select * from `category` INNER JOIN `service` on `category`.idcategory = `service`.idService where `category`.category_name = ?', [$data]);
        if(strcmp($data, 'CATERING')==0){
            $show = DB::select('select * from `category` INNER JOIN `service` on `category`.idcategory = `service`.idService inner JOIN `catering_menu` on `service`.service_no=`catering_menu`.id_category where `category`.category_name = ?', [$data]);
            return view('service.our_catering',['dataa' =>$users,'sho'=>$show,'name'=>$data]);
        }else if(strcmp($data, 'PHOTOGRAPHY')==0){
            $menu = DB::select('select * from `category` INNER JOIN `service_detail` on `category`.idcategory=`service_detail`.id_detail where `category`.category_name =?', [$data]);
            return view('service.our_photo',['data' =>$users ,'name'=>$data,'menu'=>$menu]);
        }else if(strcmp($data, 'CHOREOGRAPHY')==0){
            $menu = DB::select('select * from `category` INNER JOIN `service_detail` on `category`.idcategory=`service_detail`.id_detail where `category`.category_name =?', [$data]);
            return view('service.our_choreo',['data' =>$users ,'name'=>$data,'menu'=>$menu]);
        }else if(strcmp($data, 'MAKE')==0){
            $menu = DB::select('select * from `category` INNER JOIN `service_detail` on `category`.idcategory=`service_detail`.id_detail where `category`.category_name =?', [$data]);
            return view('service.our_makeup',['data' =>$users ,'name'=>$data,'menu'=>$menu]);
        }else if(strcmp($data, 'ENTERTAINMENT')==0){
            $menu = DB::select('select * from `category` INNER JOIN `service_detail` on `category`.idcategory=`service_detail`.id_detail where `category`.category_name =?', [$data]);
            return view('service.our_entertainment',['data' =>$users ,'name'=>$data,'menu'=>$menu]);
        }elseif (strcmp($data, 'BAND')==0) {
            $users = DB::select('select * from `vendor` INNER JOIN `band` on `vendor`.vendor_no = `band`.vendor_no AND `vendor`.category= ?', [$data]);
            return view('service.our_band',['data' => $users ,'name'=>$data]);
        }else if(strcmp($data, 'GIFTS')==0){
            $ecom = DB::select('select * from `category` INNER JOIN `product` on `category`.idcategory = `product`.idecom where `category`.category_name = ?', [$data]);
            return view('service.our_ecom',['data' =>$ecom ,'name'=>$data]);
        }else if(strcmp($data, 'DECOR')==0){
            return view('service.our_decor',['data' =>$users ,'name'=>$data]);
        }else if(strcmp($data, 'CARDS')==0){
        	$user = DB::table('card')->paginate(15);
            return view('service.our_cards',['data' =>$user ,'name'=>$data]);
        }else if(strcmp($data, 'SWEETS')==0){
            return view('service.our_ecom',['data' =>$users ,'name'=>$data]);
        }
    }
    public function venue($data){
		$users =  DB::select('select * from `vendor` INNER JOIN `venues` on `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.category= ?', [$data]);
		return view('venue',['data' => $users ,'name'=>$data]);
    }
    public function venue_display($data){
    	$users = DB::select('select * from `vendor` INNER JOIN `venues` on `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.vendor_no = ?', [$data]);
		return view('our_venue',['data'=>$users]);
    }
    public function data($dat){
    	$users = DB::select('select * from `vendor` INNER JOIN `band` on `vendor`.vendor_no = `band`.vendor_no AND `vendor`.vendor_no= ?', [$dat]);
        return view('service.band_pro',['data' => $users ,'name'=>$dat]);
    }
    /*public function gift($data){
        $user = DB::select('select * from `product` INNER JOIN `product_detail` on `product`.product_no = `product_detail`.product_no AND `product`.product_no= ?', [$data]);
        return view('service.ecom_detail',['data' => $user]);
    }*/
    
    public function gift($data){
        $dat=DB::select('select * from `product` where `product`.product_no=?',[$data]);
        $def=$dat[0]->product_rate;
        $user=DB::select('select * from `product_detail` where `product_detail`.product_no=?',[$data]);
        $similiar= DB::table('product')
                ->orderBy(DB::raw('ABS(product_rate- '.(float)$def.')') ,'ASC' )
                ->limit(3)
                ->get();
        return view('service.ecom_detail',['data' => $user ,'name' =>$dat , 'simi' =>$similiar]);
    }
    public function card($data){
        $dat=DB::select('select * from `card` where product_no=?',[$data]);
        $def=$dat[0]->product_rate;
        $user=DB::select('select * from `card` where product_no=?',[$data]);
        $similiar= DB::table('card')
                ->orderBy(DB::raw('ABS(product_rate- '.(float)$def.')') ,'ASC' )
                ->limit(4)
                ->get();
        return view('service.card_detail',['data' => $user ,'name' =>$dat , 'simi' =>$similiar]);
    }
}