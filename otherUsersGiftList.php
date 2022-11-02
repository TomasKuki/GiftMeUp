<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
include("./php/connectBD.php");

// see if a session variable is being use in php?
if (!isset($_SESSION['userId'])) {

  echo "<script type='text/javascript'>window.location.replace('./index.php');</script>";

}else {

  $sql = "SELECT Id, Name, Photo, Description FROM `gift` WHERE UserId = ".$_GET['id']."";
  $result = $conn->query($sql);

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
        
        <div class="showCaseCards">
        
          <?php
            if ($result->num_rows >= 1) {
              while($row = $result->fetch_assoc()) {
                ?> 
                  <div class="cases"><?php
                    $text = $row['Name'];
                    $link = "seeGift.php?id='".$row['Id']."'";
                    $description = $row['Description'];
                    include("./blocks/smallCards.php");
                    ?>
                  </div>
                <?php
              }
            } else {
              echo "<h1>Não Existem Presentes</h1>";
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

<?php
}
?>