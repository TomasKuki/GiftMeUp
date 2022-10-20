<?php
include("./php/connectBD.php");

session_start();

//receive post variables php?
if(isset($_POST['email']) && $_POST['password']){
     //login
     echo "<script type='text/javascript'>alert('you got login');</script>";
     //verificar o login 
    $sql = "SELECT email, password FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows = 1) {
    // output login done
        echo "<script type='text/javascript'>alert('Login done!');</script>";
    } else {
        // output login fale
        echo "<script type='text/javascript'>alert('wrong login data');</script>";
    }
     //obter o username do utilizador que deu login
     while($row = $result->fetch_assoc()) {
        //$_SESSION["username"] = x;
        $_SESSION["username"] = $row["username"];
      }
     //mandar para o perfil do utilizador


}elseif(isset($_POST['emailRegister']) && $_POST['usernameRegister'] && $_POST['passwordRegister']){
    //register
    echo "<script type='text/javascript'>alert('you got register');</script>";
    //verificar os parametros
    //criar utilizador
    
    $sql = "INSERT INTO users (username, email, password)
    VALUES (".$_POST['usernameRegister'].", ".$_POST['emailRegister'].", ".$_POST['passwordRegister'].")";

    if ($conn->query($sql) === TRUE) {
    echo "User created successfully";
        //obter o username do utilizador
        //iniciar sessao
        $_SESSION["username"] = $_POST['usernameRegister'];
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error; //MUDAR DEPOIS
    //PARAR E MUDAR DE PAGINA
    }
    
    //mandar para o perfil do utilizador

}

$conn->close();

// remove all session variables
//session_unset();

// destroy the session
//session_destroy();
