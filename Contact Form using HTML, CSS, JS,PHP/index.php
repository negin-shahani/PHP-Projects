<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- FontAwesome and Google for icones -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a92e90b9cb.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <header>Send me a message!</header>
        <form action="#">
            <div class="feilds">
                <div class="feild">
                    <input type="text" class="text" name="Name" placeholder="Enter your Name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="feild">
                    <input type="text" class="text" name="Email" placeholder="Enter your Email">
                    <i class="fa fa-envelope"></i>
                </div>
            </div>
            <div class="feilds">
                <div class="feild">
                    <input type="text" class="text" name="Phone" placeholder="Enter your Phone">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="feild">
                    <input type="text" class="text" name="Website" placeholder="Enter your Website">
                    <i class="fa fa-globe"></i>
                </div>
            </div>
            <div class="message">
                <textarea name="message" placeholder="Write your message!"></textarea>
                <i class="material-icons">message</i>
            </div>
            <div class="buttons">
                <button type="submit">Send</button>
                <span>Sending your message...</span>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>