<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ChatBot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">My Online ChatBot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello dear, How can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-feild">
            <div class="input-data">
                <input type="text" id="textFeild" required placeholder="Type Here... ♥">
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
</body>
</html>