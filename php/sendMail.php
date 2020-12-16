<?php

if(isset($_POST['sendMail'])){
    $to = "work12alson@gmail.com";
    $from = $_POST['email'];
    $sender = $_POST['name'];
    $mssg = $_POST['mssg'];
    $mssgBody = "From: ".$from."<br/>".$mssg;

    if(mail($to, "From my website" ,$mssgBody)){
        header("location: ../pages/contact.php?mssg=Sendsuccess");
    }else{
        header("location: ../pages/contact.php?error=Senderror");
    }
}else{
    header("location: ../pages/contact.php?error=Enterwrong");
}