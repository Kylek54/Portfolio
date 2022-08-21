<?php 
if(isset($_POST['submit'])){
    $to = "kylekohli549@gmail.com"; // this is your Email address
    $from = "kylekohli549@gmail.com"; // this is the sender's Email address
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name']; 
    $phone = $_POST['phone'];
    $subject = "kylekohli.com Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . "Phone Number: " . $phone . "\n\n" . "Email Address: " . $email ."\n\n" . $_POST['message'];
    
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>