<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int) $_GET['user'] :0;

echo $_SESSION['user'];
?>