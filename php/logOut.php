<?php

session_start();
$_SESSION["username"] = '';
session_destroy();

echo "<script type='text/javascript'>window.location.replace('../index.php');</script>";

?>