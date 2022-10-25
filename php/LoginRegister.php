<?php
include("./connectBD.php");


//receive post variables php?
if(isset($_POST['email']) && $_POST['password']){
     //login
     echo "<script type='text/javascript'>alert('you got login');</script>";
     //verificar o login '
    $sql = "SELECT Id, Username, Email FROM users Where Email='".$_POST['email']."' and Password='".$_POST['password']."'";
    $result = $conn->query($sql);

    
    
    if (mysqli_num_rows($result) == 1) {
    // output login done
        echo "<script type='text/javascript'>alert('Login done!');</script>";
    } else {
        // output login fale
        echo "<script type='text/javascript'>alert('wrong login data');</script>";
        echo "<script type='text/javascript'>window.location.replace('../login.php');</script>";
        die();
    }
     //obter o username do utilizador que deu login

     while($row = $result->fetch_assoc()) {
        //$_SESSION["username"] = x;
        if ($_POST["email"] ==  $row["Email"]) {
            session_start();
            $_SESSION["userId"] = $row["Id"];
            //mandar para o perfil do utilizador
            echo "<script type='text/javascript'>window.location.replace('../home.php');</script>";
        }else {
            echo "<script type='text/javascript'>alert('Hey mate you got the wrong credenciais OOOORRRRR maybe you don't have an acount why dont you create one?');</script>";
            //mandar para o login novamente
            echo "<script type='text/javascript'>window.location.replace('../login.php');</script>";
          }
      }
     
      


}elseif(isset($_POST['emailRegister']) && $_POST['usernameRegister'] && $_POST['passwordRegister']){
    //register
    echo "<script type='text/javascript'>alert('you got register');</script>";
    //verificar os parametros
    //criar utilizador
    
    $sql = $mysqli->prepare("INSERT INTO users (?, ?, ?)");
    $sql->bind_param('sss', $_POST['usernameRegister'], $_POST['emailRegister'], $_POST['passwordRegister']);
    $sql->execute();

    if ($sql->num_rows == 1) {
    echo "User created successfully";
        //obter o username do utilizador
        //iniciar sessao
        $_SESSION["userId"] = $_POST['Id'];
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error; //MUDAR DEPOIS
    //PARAR E MUDAR DE PAGINA
    }
    
    //mandar para o perfil do utilizador

}
else {
    echo "<script type='text/javascript'>alert('you got it all wrong Congrats Mate!!!!');</script>";
}

$conn->close();

// remove all session variables
//session_unset();

// destroy the session
//session_destroy();
