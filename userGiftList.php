<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
include("./php/connectBD.php");

// see if a session variable is being use in php?
if (isset($_SESSION['userId'])) {

  $sql = "SELECT Id, Name, Photo FROM `gift` WHERE UserId = '".$_SESSION['userId']."'";
  $result = $conn->query($sql);


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
    <link rel="stylesheet" href="css/userGiftList.css" />
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
        <div class="showCaseBtn">
          <a href="./addGift.php">
            <button class="SecondBtn">ADD GIFT</button>
          </a>
          <button class="SecondBtn" onclick="history.back()"> Back</button>
        </div>
        
        <div class="showCaseCards">
        
          <?php
              
            while($row = $result->fetch_assoc()) {
              ?> <div class="cases"><?php
              $text = $row['Name'];
              $link = "editGift.php?id='".$row['Id']."'";
              include("./blocks/smallCards.php");
              ?></div><?php
            } 
          
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
