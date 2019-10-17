<?php 
if(isset($_GET['submit_contact'])){
    $to = "shouryalala@gmail.com"; // this is your Email address
    $from = $_GET['email_id']; // this is the sender's Email address
    $name = $_GET['name_id'];
    $mobile = $_GET['mobile_id'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " mobile number:" . $mobile."\n\n"."email:\n\n";
    $headers = "From:" . $from;    
        
    echo "Mail Sent. Thank you , we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
