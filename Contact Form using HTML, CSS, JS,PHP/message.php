<?php
//first get the values from form
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$website = $_POST['Website'];
$message = $_POST['message'];

//if email and message is not empty and email is valid
if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $reciever = "neginshahany@gmail.com"; //reciever of the info is my email
        $subject = "From:  $name <$email>"; //the subject of the email
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message";
        $sender = "From: $email"; //the email of the sender
        //mail is an in-build function to send eamil
        if(mail($reciever, $subject, $body, $sender)){
            echo "Your message has been sent!";
        }else{
            echo "Sorry, failed to send your message!";
        }
    }else{
        echo "Enter a valid Email address!";
    }
}else{
    echo "Email and password feild is required!";
}

?>