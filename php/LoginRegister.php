<?php
include("./php/connectBD.php");

session_start();

//receive post variables php?
if(isset($_POST['email']) && $_POST['password']){
     //login
     echo "<script type='text/javascript'>alert('you got login');</script>";
     //verificar o login 
     //obter o username do utilizador que deu login
     //$_SESSION["username"] = x;
     //mandar para o perfil do utilizador

}elseif(isset($_POST['emailRegister']) && $_POST['usernameRegister'] && $_POST['passwordRegister']){
    //register
    echo "<script type='text/javascript'>alert('you got register');</script>";
    //verificar os parametros
    //criar utilizador
    //obter o username do utilizador
    //iniciar sessao
    //mandar para o perfil do utilizador
}

// remove all session variables
//session_unset();

// destroy the session
//session_destroy();

?>