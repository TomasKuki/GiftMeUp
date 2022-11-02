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
    <link rel="stylesheet" href="./css/userGiftList.css" />
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
          <button class="SecondBtn" onclick="history.back()"> Back</button>
        </div>
        <div class="showCaseCards">
          <div class="cases">
          <?php
            $text = 'Still in Development';
            $link = '#.php';
            include("./blocks/smallCards.php")
          ?>
          </div>
          <div class="cases">
          <?php
            $text = 'Still in Development';
            $link = '#.php';
            include("./blocks/smallCards.php")
          ?>
          </div>
          <div class="cases">
          <?php
            $text = 'Still in Development';
            $link = '#.php';
            include("./blocks/smallCards.php")
          ?>
          </div>
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
