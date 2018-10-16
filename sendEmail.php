<?php 
$ToEmail = 'info@almuhandis-hydraulic.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."\r\n"; 
$MESSAGE_BODY .= "phone: ".$_POST["phone"]."\r\n"; 
$MESSAGE_BODY .= "Country: ".$_POST["country"]."\r\n"; 
$MESSAGE_BODY .= "Job: ".$_POST["job"]."\r\n"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["body"])."\r\n"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
echo("your message has been sent we will contact you as soon as we can.");
?>
