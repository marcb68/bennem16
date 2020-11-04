<?php
$username = $_GET["username"]; //in the square bracket, it should be the username.
$password = $_GET["password"];
$number = $_GET["myNumber"];
$color = $_GET["myColor"];
$select = $_GET["mySelect"];

echo "Username: ".$username;
echo "<br>Password: ".$password;
echo "<br>Number: ".$number;
echo "<br>Color: ".$color;
echo "<br>Selection: ".$select;