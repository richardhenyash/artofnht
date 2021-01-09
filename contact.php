<?php

if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $mailFrom= $_POST['email'];
    $message= $_POST['message'];

    $mailTo = "nickht@artofnht.com";
    $headers = "From: Art Of NHT Contact Form".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location:about.html?mailsend");
}
