<?php
session_start();
// see if a session variable is being use in php?
if (isset($_SESSION['userId'])) {
?>

  <nav class="navbar">
    <div class="navbarContainer">
      <div class="navbarRow">
        <a href="">
          <div class="navbarLogoBox"><img class="navbarLogo" src="./images/logo.png" alt=""></div>
        </a>
      </div>
      <div class="navbarRow">
        <a href="">
          <div class="navbarItem">About Us??</div>
        </a>
        <a href="./php/logOut.php">
          <div class="navbarItem">Log Out</div>
        </a>
      </div>
    </div>
  </nav>

<?php

} else{
  ?>

  <nav class="navbar">
    <div class="navbarContainer">
      <div class="navbarRow">
        <a href="">
          <div class="navbarLogoBox"><img class="navbarLogo" src="./images/logo.png" alt=""></div>
        </a>
      </div>
      <div class="navbarRow">
        <a href="">
          <div class="navbarItem">About Us??</div>
        </a>
        <a href="./login.php">
          <div class="navbarItem">Login</div>
        </a>
      </div>
    </div>
  </nav>

<?php
}


?>