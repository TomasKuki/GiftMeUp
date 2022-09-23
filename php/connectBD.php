<?php
$servername = "94.126.169.155";
$username = "GiftMeUp";
$password = "GiftMeUp1234";
$bd = "kukipt_GiftMeUpAdmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>