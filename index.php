<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=
    , initial-scale=1.0" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/cards.css" />
  <script src="https://kit.fontawesome.com/98f691c863.js" crossorigin="anonymous"></script>
  <title>Gift List</title>
</head>

<body>
  <?php
  include("./blocks/navBar.html")
  ?>
  <div class="container">
    <div class="showCase">
      <div class="cases">
        <?php
        include("./blocks/card.html")
        ?>
      </div>
      <div class="cases">
        <?php
        include("./blocks/card.html")
        ?>
      </div>
      <div class="cases">
        <?php
        include("./blocks/card.html")
        ?>
      </div>
    </div>
  </div>
  <div class="numbersDisplay">
    <?php
    include("./blocks/numbersDisplay.html")
    ?>
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