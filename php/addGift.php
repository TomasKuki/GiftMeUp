<?php
include("./connectBD.php");

session_start();

//receive post variables php?
if(isset($_POST['email']) && $_POST['password']){
      
    //veify variables content

    //add gift with user id

    //move to home or list gift page

}else {
    echo "<script type='text/javascript'>alert('Hey mate you got the wrong credenciais OOOORRRRR maybe you don't have an acount why dont you create one?');</script>";
}

?>