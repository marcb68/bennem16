<?php
//start a session
@session_start();
//get session's value
$username = $_SESSION["username"];
echo "username:".$username;
echo "password:".$password;