<?php

$subject = $_POST['subject'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

$msg = "NAME: "  .$_POST['name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
$msg .= "WEBSITE: "  .$_POST['web']    ."<br>\n";
$msg .= "COMMENTS: "  .$_POST['comments']    ."<br>\n";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}

?>
