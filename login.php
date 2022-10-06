<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <title>Login Page</title>
</head>

<body>
  <div class="container">
    <div class="formContainer">
      <div class="logo">
        <img src="./images/logo.png" alt="" srcset="">
      </div>
      <div id="loginForm" class="form">
        <form action="./php/LoginRegister.php">
          <div class="formCamps">
            <div class="field">
              <label for="email"></label>
              <input type="text" name="email" id="">
            </div>
            <div class="field">
              <label for="password"></label>
              <input type="text" name="password" id="">
            </div>
          </div>
        </form>
      </div>
      <div id="registerForm" class="form hiddenForm">
        <form action="./php/LoginRegister.php">
          <div class="formCamps">
            <div class="field">
              <label for="email"></label>
              <input type="text" name="email" id="">
            </div>
            <div class="field">
              <label for="username"></label>
              <input type="text" name="username" id="">
            </div>
            <div class="field">
              <label for="password"></label>
              <input type="text" name="password" id="">
            </div>
          </div>
        </form>
      </div>
      <div class="options">
        <h1>forget Button Here</h1>
        <button id="flipFormBtn" onclick="flipForms()">Register</button>
      </div>
    </div>
  </div>
  <script src="./js/loginRegister.js"></script>
</body>

</html>