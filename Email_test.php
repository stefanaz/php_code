
<?php $to = "youremailhere@gmail.com";
$subject = "Successful Email Setup";
$message = "Woop! Emails works";
$headers = "From: <my local email>";
mail($to, $subject, $message, $headers); echo "Mail sent."; ?>

