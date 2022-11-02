<?php
include("./connectBD.php");


//receive post variables php?
if(isset($_POST['email']) && $_POST['password']){
     //login
     //verificar o login '
    $sql = "SELECT Id, Username, Email FROM users Where Email='".$_POST['email']."' and Password='".$_POST['password']."'";
    $result = $conn->query($sql);

    
    
    if (mysqli_num_rows($result) == 1) {
    // output login done
       // echo "<script type='text/javascript'>alert('Login done!');</script>";
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
     
      


}elseif(isset($_POST['emailRegister']) && $_POST['usernameRegister'] && $_POST['passwordRegister'] && $_POST['ageRegister'] && $_POST['sexRegister']){
    //register
    //echo "<script type='text/javascript'>alert('you got register');</script>";
    //verificar os parametros
    //criar utilizador
    
   //verificar o login '
   $sql = "INSERT INTO `users`(`Username`, `Password`, `Email`, `Age`, `Sex`) VALUES ('".$_POST['usernameRegister']."','".$_POST['passwordRegister']."','".$_POST['emailRegister']."','".$_POST['ageRegister']."','".$_POST['sexRegister']."')";


   if (mysqli_query($conn, $sql)) {
    //echo "User created successfully";
        //obter o username do utilizador
        //iniciar sessao
        $sql2 = "SELECT Id FROM users Where Email='".$_POST['emailRegister']."' and Password='".$_POST['passwordRegister']."'";
        $result = $conn->query($sql2);
        
        while($row = $result->fetch_assoc()) {
            //$_SESSION["username"] = x;
            session_start();
            $_SESSION["userId"] = $row["Id"];
          }
    echo "<script type='text/javascript'>window.location.replace('./../home.php');</script>";
  } else {
    echo "Error: <br>" . $conn->error;
    echo "<script type='text/javascript'>alert('Ops ERRO');</script>";
    //PARAR E MUDAR DE PAGINA
    echo "<script type='text/javascript'>window.location.replace('./login.php');</script>";
  }

}
else {
    echo "<script type='text/javascript'>alert('you got it all wrong Congrats Mate!!!!');</script>";
}

$conn->close();

// remove all session variables
//session_unset();

// destroy the session
//session_destroy();
