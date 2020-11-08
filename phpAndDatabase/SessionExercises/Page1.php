<?php
//start a session
@session_start();
//get session's value
$username = $_SESSION["username"];
echo "username:".$username;
$password = $_SESSION["password"];
echo "password:".$password;