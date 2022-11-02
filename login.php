<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <script src="https://kit.fontawesome.com/98f691c863.js" crossorigin="anonymous"></script>
  <title>Login Page</title>
</head>

<?php
include("./php/connectBD.php")
?>
<body>
  <div class="container">
    <div class="formContainer">
      <div class="logo">
        <img src="./images/logo.png" alt="" srcset="">
      </div>
      <div id="loginForm" class="form">
        <form action="./php/LoginRegister.php" method="POST">
          <div class="formCamps">
            <div class="field">
              <label class="labelsform" for="email">Email:</label>
              <input class="LoginInput" type="text" name="email" id="" placeholder="Email">
            </div>
            <div class="field">
              <label class="labelsform" for="password">Password:</label>
              <input class="LoginInput" type="password" name="password" id="" placeholder="Password">
            </div>
          </div>
          <button class="submitBtn" id="submitBtn">Login</button>
          <button class="forgetBtn" id="submitBtn">Forgot the Password</button>
        </form>
      </div>
      <div id="registerForm" class="form hiddenForm">
        <form action="./php/LoginRegister.php" method="POST">
          <div class="formCamps">
            <div class="field">
              <label  class="labelsform" for="email">Email:</label>
              <input class="LoginInput" type="text" name="emailRegister" id="" placeholder="Email">
            </div>
            <div class="field">
              <label class="labelsform" for="username">Username:</label>
              <input class="LoginInput" type="text" name="usernameRegister" id="" placeholder="Username">
            </div>
            <div class="field">
              <label class="labelsform" for="password">Password:</label>
              <input class="LoginInput" type="password" name="passwordRegister" id="" placeholder="Password">
            </div>
            <div class="field">
              <label class="labelsform" for="password">Age:</label>
              <input class="LoginInput" type="number" name="ageRegister" id="" placeholder="Age">
            </div>
            <div class="field">
              <label class="labelsform" for="password">Sex:</label>
              <select name="sexRegister" id="">
                <option value="none">Género......</option>
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
                <option value="outro">Outro</option>
              </select>
            </div>
          </div>
          <button class="submitBtn" id="submitBtn">register</button>
        </form>
      </div>
      <div class="options">
        
        <button class="flipBtn" id="flipFormBtn" onclick="flipForms()">Go to Register Page</button>
      </div>
    </div>
  </div>
  <script src="./js/loginRegister.js"></script>
</body>

</html>