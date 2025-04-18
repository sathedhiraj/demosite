<?php


if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sele = $_POST['select'];


    $sendemail ="nick20178@gmail.com";
    $msg = "cliend order is Received";
    $from = "Name:" .$name."\n"."email".$email."\n"."the masssage is recieved"."\n".$phone;
    $dhiaj = "Type of website:".$sele;

    if(mail($sendemail,$msg ,$from ,$dhiaj)) {

        echo "The order place";
        
       
    }

    else{
      
        echo "sometime is wrong";

    }

   
}




?>