<?php
$username = $_POST["username"]; //in the square bracket, it should be the username.
$password = $_POST["password"];
$number = $_POST["myNumber"];
$color = $_POST["myColor"];
$select = $_POST["mySelect"];

echo "Username: ".$username;
echo "<br>Password: ".$password;
echo "<br>Number: ".$number;
echo "<br>Color: ".$color;
echo "<br>Selection: ".$select;