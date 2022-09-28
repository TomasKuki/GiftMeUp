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
        include("./blocks/smallCards.html")
        ?>
        </div>
        <div class="cases">
        <?php
        include("./blocks/smallCards.html")
        ?>
        </div>
        <div class="cases">
        <?php
        include("./blocks/smallCards.html")
        ?>
        </div>
      </div>
    </div>
    <footer>
    <div class="footerContainer">
      <?php
      include("./blocks/footer.html")
      ?>
    </div>

  </footer>
  </body>
</html>
