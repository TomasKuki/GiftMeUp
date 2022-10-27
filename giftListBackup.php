<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=
    , initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/giftList.css" />
    <link rel="stylesheet" href="./css/cards.css" />
    <script src="https://kit.fontawesome.com/98f691c863.js" crossorigin="anonymous"></script>
    <title>Personal List</title>
</head>

<body>
    <?php
    include("./blocks/navBar.php")
    ?>
    <div class="container">
    <div class="showCaseGifts">
            <div class="categoria">
                <div class="categoriaName">Tech</div>
                <div class="gifts">
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