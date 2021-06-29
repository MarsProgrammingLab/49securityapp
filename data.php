<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
    $userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];
    $userContact          = $_POST['contact'];
   

	$to 			= "49thSecurityDivision@uncc.edu";
	$subject 		= "Message delivered.";
	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;
    $body .= "\r\n Contact NO: " . $userContact;
    $headers = "From: ".$name." <".$email."> \r\n";

	$success = mail($to, $subject, $body,  $headers);

    if($success){
        echo "Your message delivery was successful.";
    }else{
        http_response_code(405);
        echo "Your message could not be delivered. Please try again.";
    }
}
?>