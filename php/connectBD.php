<?php

//locao connection

$servername = "localhost";
$username = "root";
$password = "";
$bd = "kukipt_GiftMeUp";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


//bd connection

/** 
$servername = "kuki.pt";
$username = "kukipt_GiftMeUpAdmin";
$password = "GiftMeUpAdmin1234";
$bd = "kukipt_GiftMeUp";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/?>
