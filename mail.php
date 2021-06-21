<?php
// echo "Current version is PHP " . phpversion();
$to = "sreepadhraju@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$response = mail($to,$subject,$txt,$headers);
print_r($response);
?>
