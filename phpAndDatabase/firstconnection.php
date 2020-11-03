<?php
//Create a database connection
$server = 'zj2x67aktl2o6q2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$dbusername = 'kec4kj9vpzbctojt';
    $dbpassword = 'apwya9mj52zmgse2';
        $dbname = 'llbur9yycltyjt3b';
            $conn = new mysqli($server, $dbusername, $dbpassword, $dbname,);
if ($conn->error){
    echo $conn->error;
}else{
    echo "Connected";
}

//Write a query
$sql = "select * from users";
//Excute the query
$result = mysqli_query($conn, $sql);

//Show my result
while ($row = $result->fetch_assoc()) {
    echo $row["id"];
}

