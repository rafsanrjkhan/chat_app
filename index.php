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
    
</body>
</html>