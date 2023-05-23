<?php

// Host
$host = "localhost";
// dbname
$dbname = "gallery";  
// user
$user = "root";
// password
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);

if($conn == true){
    // echo "It's working fine";
}else{
    echo "Not connected";
}



?>