<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int) $_GET['user'] :0;
// echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Chat App</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="chat">
        <div class="messages">

            <div class="message">
                <a href="#">alex</a> says:
                <p>This message will display here.</p>
            </div>

        </div>
        <textarea class="entry" placeholder="Type here and hit return."></textarea>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/chat.js"></script>
</body>
</html>