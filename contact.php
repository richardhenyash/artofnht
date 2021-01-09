<?php

if (isset($_POST['submit'])) {
    $name= $_POST['inputname'];
    $mailFrom= $_POST['inputemail'];
    $message= $_POST['inputmessage'];

    $mailTo = "rash@pipelinedatasolutions.com";
    $headers = "From: Art Of NHT Contact Form".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location:about.html?mailsend");
}
