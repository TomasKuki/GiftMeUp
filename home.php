<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
include("./php/connectBD.php");

// see if a session variable is being use in php?
if (!isset($_SESSION['userId'])) {
  echo "<script type='text/javascript'>window.location.replace('./index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=
    , initial-scale=1.0"
    />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="./css/cards.css" />
    <script src="https://kit.fontawesome.com/98f691c863.js" crossorigin="anonymous"></script>
    <title>Gift List</title>
  </head>
  <body>
  <?php
  include("./blocks/navBar.php")
  ?>
    <div class="container">
      <div class="showCase">
        <div class="cases">
        <?php
        $text = 'A sua lista';
        $link = 'userGiftList.php';
        include("./blocks/smallCards.php")
        ?>
        </div>
        <div class="cases">
        <?php
        $text = 'Veja as listas feitas por outras pessoas';
        $link = 'usersList.php';
        include("./blocks/smallCards.php")
        ?>
        </div>
        <div class="cases">
        <?php
        $text = 'Perfil Pessoal';
        $link = 'perfil.php';
        include("./blocks/smallCards.php")
        ?>
        </div>
      </div>
    </div>
    <footer>
    <div class="footerContainer">
      <?php
      include("./blocks/footer.php")
      ?>
    </div>

  </footer>
  </body>
</html>
