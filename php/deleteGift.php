<?php
include("./connectBD.php");

session_start();

if (!isset($_SESSION['userId'])) {
    echo "<script type='text/javascript'>window.location.replace('./index.php');</script>";
  }


//receive post variables php?
if(isset($_GET['id'])){
      
    //delete Gift

        
   //verificar o login '
   $sql = "DELETE FROM `gift` WHERE `Id` = ".$_GET['id']." and `UserId` = ".$_SESSION['userId']."";

   if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>window.location.replace('./../userGiftList.php');</script>";
  } else {
    echo "<script type='text/javascript'>alert('So im sorry but an error happen and you still get to show your gift to everyone Enjoy!!');</script>";
    //PARAR E MUDAR DE PAGINA
    echo "<script type='text/javascript'>window.location.replace('./../userGiftList.php');</script>";
  }
}else {
    echo "<script type='text/javascript'>alert('So im sorry but an error happen and you still get to show your gift to everyone Enjoy!!');</script>";
}



?>