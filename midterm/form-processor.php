<?php

// set some variables
$emailFrom = "mhoover123@gmail.com";
$emailTo = "mhoover123@gmail.com";
$subject = "240 Midterm";

// grab the data being passed from the method="post" in the HTML form
// and hold it in a variable
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['tele'])); 

$checkFirefox = $_POST['firefox']; 
$checkChrome = $_POST['chrome']; 
$checkSafari = $_POST['safari']; 
$checkIe = $_POST['exploder']; 

$browserSelect = $_POST['internet']; 

$message = Trim(stripslashes($_POST['message'])); 

// prepare email body text
$body = ""; //initialize the variable

$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Phone: ";
$body .= $phone;
$body .= "\n\n";

$body .= "Browsers used: \n";
$body .= $checkFirefox;
$body .= "\n";

$body .= $checkChrome;
$body .= "\n";

$body .= $checkSafari;
$body .= "\n";

$body .= $checkIe;
$body .= "\n\n";

$body .= "Favorite browser: ";
$body .= $browserSelect;
$body .= "\n\n";

$body .= "Message: \n";
$body .= $message;
$body .= "\n";

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");

// send the user to the thank you webpage
header("Location: contact-thanks.html");

?>