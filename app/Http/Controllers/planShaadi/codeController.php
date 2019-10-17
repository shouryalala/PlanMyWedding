<?php
namespace App\Http\Controllers\planShaadi;
use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class codeController extends Controller{
	
	public function index(){	
		$denom_sum = 0;
		$venue = 5;
		$decor = 4;
		$catering = 5;
		$photography = 2;
		$invites = 1;
		$wedding_band = 1;
		$entertainment = 1;
		$makeup = 1;
		$cap = 150000;
		$bg_data = $_GET['bg_data'];
		$budget = $_GET['budget'];
		$shaadi_size = $_GET['shaadi_size'];
		
		#configuring checkbox variables
		$cb_venue = isset($_GET['cb_venue']) && $_GET['cb_venue']  ? "1" : "0";
		$cb_venue_o = (isset($_GET['venue_oc']) && $_GET['venue_oc'] =='open')?"1":"0";
		$cb_venue_c = isset($_GET['venue_oc']) && $_GET['venue_oc'] == 'close';
		$cb_decor = isset($_GET['cb_decor']) && $_GET['cb_decor']  ? "1" : "0";
		$cb_catering = isset($_GET['cb_catering']) && $_GET['cb_catering']  ? "1" : "0";
		$cb_photography = isset($_GET['cb_photography']) && $_GET['cb_photography']  ? "1" : "0";
		$cb_invites = isset($_GET['cb_invites']) && $_GET['cb_invites']  ? "1" : "0";
		$cb_wedding_band = isset($_GET['cb_wedding_band']) && $_GET['cb_wedding_band']  ? "1" : "0";
		$cb_enter = isset($_GET['cb_enter']) && $_GET['cb_enter']  ? "1" : "0";
		$cb_makeup = isset($_GET['cb_makeup']) && $_GET['cb_makeup']  ? "1" : "0";			

		#GLOBAL $denom_sum,$cb_venue,$cb_decor,$cb_catering,$cb_photography,$cb_invites,$cb_wedding_band,$cb_enter,$cb_makeup;
		#calculating the denominator
		if($cb_venue_c){
			$cb_catering = 1;
			$cb_decor = 1;
		}
		if($cb_venue)$denom_sum+= $venue;
		if($cb_decor)$denom_sum+= $decor;
		if($cb_catering)$denom_sum+= $catering;
		if($cb_photography)$denom_sum+= $photography;
		if($cb_invites)$denom_sum+= $invites;
		if($cb_wedding_band)$denom_sum+= $wedding_band;
		if($cb_enter)$denom_sum+= $entertainment;
		if($cb_makeup)$denom_sum+= $makeup;

		#splitting the budget
		if($cb_venue)$bud_venue = ($venue/$denom_sum)*$budget;
		else $bud_venue = -1;
		if($cb_decor)$bud_decor = ($decor/$denom_sum)*$budget;
		else $bud_decor = -1;
		if($cb_catering)$bud_catering = ($catering/$denom_sum)*$budget;
		else $bud_catering = -1;
		if($cb_photography)$bud_photography = ($photography/$denom_sum)*$budget;
		else $bud_photography = -1;
		if($cb_invites)$bud_invites = ($invites/$denom_sum)*$budget;
		else $bud_invites = -1;
		if($cb_wedding_band)$bud_wedding_band = ($wedding_band/$denom_sum)*$budget;
		else $bud_wedding_band = -1;
		if($cb_enter)$bud_enter = ($entertainment/$denom_sum)*$budget;
		else $bud_enter = -1;
		if($cb_makeup)$bud_makeup = ($makeup/$denom_sum)*$budget;
		else $bud_makeup = -1;
		
		#distribute budget if cap crossed
		if($bud_wedding_band>$cap || $bud_makeup>$cap)
		{
			if($bud_wedding_band > $cap && $bud_makeup == -1)	
			{
				$denom = $denom_sum - 1;
				$extra = $bud_wedding_band - $cap;
				if($cb_venue)$bud_venue += ($venue/$denom)*$extra;		
				if($cb_decor)$bud_decor += ($decor/$denom)*$extra;		
				if($cb_catering)$bud_catering += ($catering/$denom)*$extra;
				if($cb_photography)$bud_photography += ($photography/$denom)*$extra;
				if($cb_invites)$bud_invites += ($invites/$denom)*$extra;
				if($cb_enter)$bud_enter += ($entertainment/$denom)*$extra;				
				$bud_wedding_band = $cap;	
			}
			else if($bud_wedding_band == $bud_makeup)
			{
				$denom = $denom_sum -2;	
				$extra = $bud_wedding_band - $cap;
				$extra *= 2;
				if($cb_venue)$bud_venue += ($venue/$denom)*$extra;		
				if($cb_decor)$bud_decor += ($decor/$denom)*$extra;		
				if($cb_catering)$bud_catering += ($catering/$denom)*$extra;
				if($cb_photography)$bud_photography += ($photography/$denom)*$extra;
				if($cb_invites)$bud_invites += ($invites/$denom)*$extra;
				if($cb_enter)$bud_enter += ($entertainment/$denom)*$extra;				
				
				$bud_wedding_band = $bud_makeup = $cap;
			}
			else
			{
				$denom = $denom_sum - 1;
				$extra = $bud_makeup - $cap;
				if($cb_venue)$bud_venue += ($venue/$denom)*$extra;		
				if($cb_decor)$bud_decor += ($decor/$denom)*$extra;		
				if($cb_catering)$bud_catering += ($catering/$denom)*$extra;
				if($cb_photography)$bud_photography += ($photography/$denom)*$extra;
				if($cb_invites)$bud_invites += ($invites/$denom)*$extra;
				if($cb_enter)$bud_enter += ($entertainment/$denom)*$extra;								
				$bud_makeup = $cap;
			}
		}

		///CLASSIFY ALL DATA

		//VENUE
		
		$cl_venue;
		$changed = 0;
		$venue_flag = 0;
		if($bud_venue == -1){
			$changed = 0;
			$cl_venue = 0;
		}
		else{
			if($cb_venue_c){
				$list = DB::select('select * from venue_budget  where type = "closed" order by `price`');				
				$x = 0;
				$y = $bud_venue + $bud_catering;
				$ppp = $y / $shaadi_size;
				foreach ($list as $key){
					if($ppp > $key->price){
						$changed=0;
						$x = $key;						
					}	
					else if($ppp == $key->price){
						$cl_venue = $key;
						$changed++;						
						break;
					}
					else if($ppp<900){
						$venue_flag = 1;
						$changed = 0;
						$cl_venue = 0;
					}
					else{
						$changed++;
						$cl_venue = $x;																
						break;
					}
				}
				if($changed==0)$cl_venue=$x;				
			}
			else{
				$list = DB::select('select * from venue_budget where type = "open" order by `price`');
				$x = 0;
				foreach ($list as $key){
					if($bud_venue > $key->price){
					$x = $key;
					$changed = 0;					
					}	
					else if($bud_venue == $key->price){
						$cl_venue = $key;
						$changed++;						
						break;
					}
					else if($bud_venue<140000){
						$venue_flag =1;
						$cl_venue = 0;
						$changed++;
					}
					else{
						$cl_venue = $x;										
						$changed++;
						break;						
					}
				}
				if($changed==0)$cl_venue=$x;				
			}
		}		
		//echo "$cl_venue->venue_name";
		if($cb_venue==1 && $venue_flag!=1){
		$cl_venue_info = DB::select('select * from `vendor` NATURAL JOIN `venues` where `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.vendor_no = ?',[$cl_venue->vendor_no]);
		}
		else $cl_venue_info = 0;
		
		//DECOR
		if($bud_decor == -1){$cl_decor = 5;$dataa = 0;}
		else{
			if($bud_decor<=200000 && $bud_decor>50000){
				$dataa = DB::select('select * from `image_type_decor` where `type` ="standard"');
				$cl_decor = 0;
			}
			else if($bud_decor>200000 && $bud_decor<=900000){
				$dataa = DB::select('select * from `image_type_decor` where `type` ="premium"');
				$cl_decor = 1;
			}
			else if($bud_decor>900000){
				$dataa = DB::select('select * from `image_type_decor` where `type` ="luxury"');
				$cl_decor = 2;
			}
			else{
				$cl_decor = 4;
				$dataa = 0;	
			}
		}

		if ($bud_photography == -1) {
			$cl_photo = 5;
			$no_of_albums = 0;
			$no_of_camera = 0;
			$package = 5;
		}
		else
		{
			$no_of_albums = ($shaadi_size / 250) + 1;
		    $no_of_camera = ($shaadi_size / 250) + 1;
			$x = $bud_photography - ($no_of_albums * 9000);
		    $x = $x / $no_of_camera;
		    
		    if ($x > 13000 && $x <= 15000) {
		    	$cl_photo = DB::select('select * from `image_type_photography` where `type` ="standard"');
		    	$package = 0;
		    }
		    else if ($x > 15000 && $x <= 30000) {
		    	$cl_photo = DB::select('select * from `image_type_photography` where `type` ="premium"');
		    	$package = 1;		    	
		    }
		    else if ($x > 30000){ 
		    	$cl_photo = DB::select('select * from `image_type_photography` where `type` ="luxury"');
		    	$package = 2;
		    }
		    else {$cl_photo = 0; $package = 3;}

		}
		        
		        //invitations
		if ($bud_invites == -1) {
			$cl_invites = 5;
			$invite_pic = 0;
			$no_of_invites = 0;
			
		}
		else
		{
			$no_of_invites = $shaadi_size / 4;
		    $y = $bud_invites / $no_of_invites;
		    if ($y > 150 && $y <= 600){
		    $invite_pic = DB::select('select * from `image_type_invite` where `category` ="standard"');	
		     $cl_invites = 0;
		 	}
		    else if ($y > 600 && $y < 2000) {
		    	$invite_pic = DB::select('select * from `image_type_invite` where `category` ="premium"');
		    	$cl_invites = 1;
		    }
		    else if ($y > 2000){
		     $invite_pic = DB::select('select * from `image_type_invite` where `category` ="luxury"');
		     $cl_invites = 2;
		 	}
		    else {
		    	$invite_pic = 0;
		    	$cl_invites = 4;
		    }
		}

		        //catering
		if ($bud_catering == -1) {
			$cl_cater_up = 5;
			$cl_cater_down = 5;
		}
		else
		{
			$z = $bud_catering / $shaadi_size;
		    if ($z > 800 && $z <= 1600){
		    	$cl_cater_up = "10 Starters<br>2 soups<br>6 chaat stall items<br>8 salads(seasonal)<br>
		    	mughlai food(2 paneer items and 5 vegetables)<br>any 2 chinese main course<br>
		    	Italian main course(pasta with 3 different types of sauces)<br>2 north indian rasoi dishes<br>
		    	2 rice dishes<br>5 Indian breads<br>1 raita dishes<br>";
		    	$cl_cater_down = "3 mocktails<br>3 shakes<br>aerated drinks<br>tea and coffee<br>packed mineral water glasses<br>
		    	Fruit stall(5 fresh seasonal indian fruits <br>4 desserts<br>";
		    	 
		 	}
		    else if ($z > 1600 && $z <= 3000){
		    	 $cl_cater_up = "15 Starters<br>2 soups<br>8 chaat stall items<br>8 salads(seasonal)<br>
		    	 mughlai food(2 paneer items and 7 vegetables)<br>any 2 chinese main course<br>
		    	 Italian main course(pasta with 3 different types of sauces)<br>3 south indian dishes<br>
		    	 5 north indian rasoi dishes<br>2 rice dishes<br>7 Indian breads<br>1 raita dishes<br>4 mocktails";
		    	 $cl_cater_down = "<br>4 shakes<br>2 fresh fruit juices<br>aerated drinks<br>tea and coffee<br>
		    	 packed mineral water glasses<br>Fruit stall(5 fresh seasonal indian fruits and 5 imported fruits)<br>
		    	 6 desserts<br>";
		 	}
		    else if ($z > 3000) {
		    	$cl_cater_up = "20 Starters<br>2 soups<br>9 chaat stall items<br>15-20 salads(Indian and Continental)<br>
		    	 mughlai food(3 paneer items and 8 vegetables)<br>any 2 chinese main course<br>
		    	 Italian main course(pasta with 3 different types of sauces)<br>3 south indian dishes<br>
		    	 5 north indian rasoi dishes<br>3 rice dishes<br>8 Indian breads<br>2 raita dishes<br>pizza counter(4 dishes)<br>";
		    	 $cl_cater_down = "kids’ corner<br>4 mocktails<br>4 shakes<br>2 fresh fruit juices<br>
		    	 aerated drinks<br>tea and coffee<br>packed mineral water glasses<br>
		    	 Fruit stall(5 fresh seasonal indian fruits and 5 imported fruits)<br>6 desserts<br>";
		    }
		    else {
		    	$cl_cater_up = 4;
				$cl_cater_down = 4;
				}
		}

		        //wedding band
		if ($bud_wedding_band == -1) {
			$wb_package = 5;
			$cl_wedding_band = 0;
			$wedding_text = "null";
		}
		else
		{
			if (true)
		    {             //if(onseason())
		    	if ($bud_wedding_band >= 50000 && $bud_wedding_band <= 75000) {
		    		$wb_package = 0;
		    		$cl_wedding_band = DB::select('select * from `image_type_wb` where `category` ="standard"');
		    		$wedding_text = "15 Bandwala<br>10  Light (Jhoomer)<br> 1- Ghori with Chhattar<br> 2 dhol";
		    	}
		        else if ($bud_wedding_band > 75000 && $bud_wedding_band <= 100000){
		        	$wb_package = 1;
		        	$cl_wedding_band = DB::select('select * from `image_type_wb` where `category` ="premium"');
		        	$wedding_text = "15 Bandwala<br>10  Light (Jhoomer)<br> 1- Ghori with Chhattar<br> 2 dhol<br> Baggi<br> fireworks";
		        } 
		        else if ($bud_wedding_band > 100000){
		        	$wb_package = 2;
			         $cl_wedding_band = DB::select('select * from `image_type_wb` where `category` ="luxury"');
			         $wedding_text ="15 Bandwala<br>10  Light (Jhoomer)<br> 1- Ghori with Chhattar<br> 2 dhol<br> Baggi<br> fireworks<br>Led Trolley Light with silent generator";
		     	}
		        else {
		        	$wb_package = 3;
		        	$cl_wedding_band = 4;
		        	$wedding_text = "No package available at this budget. Contact us at +919811791095. We can work out a package";
		        }
		    }
		    else
		    {	
		    	if ($bud_wedding_band > 35000 && $bud_wedding_band <= 55000) $cl_wedding_band = 0;
		        else if ($bud_wedding_band > 55000 && $bud_wedding_band <= 80000) $cl_wedding_band = 1;
		        else if ($bud_wedding_band > 80000) $cl_wedding_band = 2;
		        else $cl_wedding_band = 4;
		    }
		}
		        //entertainment
		if ($bud_enter == -1) {
			$cl_enter = 5;
			$ent_img = 0;
		}
		else
		{
			if ($bud_enter > 30000 && $bud_enter <= 150000){
			 $cl_enter = 0;
			 $ent_img = DB::select('select * from `image_type_entertainment` where `category` ="standard"');
			}
		    else if ($bud_enter > 150000 && $bud_enter <= 400000){
		    	$cl_enter = 1;
		    	$ent_img = DB::select('select * from `image_type_entertainment` where `category` ="premium"');
		    } 
		    else if ($bud_enter > 400000){
		    $ent_img = DB::select('select * from `image_type_entertainment` where `category` ="luxury"');	
		     $cl_enter = 2;
		 }
		    else {
		    	$cl_enter = 4;
		    	$ent_img = 0;
		    }
		}

		return view(
			'planShaadi.handler',['no_camera'=>$no_of_camera,'no_albums'=>$no_of_albums,'photo_package'=>$package,'venue_flag'=>$venue_flag,'data'=>$dataa,'open'=>$cb_venue_o,
			'venue'=>$bud_venue,'venue_des'=>$cl_venue_info,'venue_nm'=>$cl_venue,'decor'=>$cl_decor,
					'photoz'=> $cl_photo,'img_invite'=>$invite_pic,'invites'=>$cl_invites,'bud_invite'=>$bud_invites,'no_of_invites'=>$no_of_invites,'cater_up'=>$cl_cater_up,'cater_down'=> $cl_cater_down,
					'wedding_band'=>$wb_package,'wb_photo'=>$cl_wedding_band,'wb_budget'=>$bud_wedding_band,'wb_text'=>$wedding_text,'makeup'=>$bud_makeup,'bud_decor'=>$bud_decor,
					'bud_cater'=>$bud_catering,'bud_enter'=>$bud_enter,'ent_package'=>$cl_enter,'ent_img'=>$ent_img,'bud_photo'=>$bud_photography,'bg'=>$bg_data]
			);

	}	
}
?>