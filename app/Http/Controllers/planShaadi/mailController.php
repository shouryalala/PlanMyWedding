<?php 
namespace App\Http\Controllers\planShaadi;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;

class mailController extends controller{
    public function index(){
    if(isset($_GET['submit_contact'])){
        $to = "shouryalala@gmail.com"; // this is your Email address
        $from = $_GET['email_id']; // this is the sender's Email address
        $name = $_GET['name_id'];
        $mobile = $_GET['mobile_id'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " mobile number:" . $mobile."\n\n"."email:".$from."\n\n";
        $headers = "From:" . $from; 
        //return view('planShaadi.mailme');
        return Redirect::back();    
        }
    }
}
?>
