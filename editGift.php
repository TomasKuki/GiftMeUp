<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=
    , initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/giftForms.css" />
    <link rel="stylesheet" href="./css/cards.css" />
    <title>Personal List</title>
</head>

<body>
    <?php
    include("./blocks/navBar.htphpml")
    ?>
    <div class="container">
        <div class="giftForm">
            <div class="title">
                <h2>Edit your Gift</h2>
            </div>
            <form action="">
                <div class="fields">
                    <div class="FormFields">
                        <img class="imagePreview" id="output" />
                        <label class="inputImage" for="image">Upload Image</label>
                        <input name="image" id="image" type="file" accept="image/*" onchange="loadFile(event)">


                    </div>
                    <div class="FormFields">
                        <div class="formRow">
                            <div class="field">
                                <label for="giftName">Name</label>
                                <input class="inputGlass" type="text" name="giftName" id="">
                            </div>

                        </div>
                        <div class="formRow">
                            <div class="field">
                                <label for="description">Description</label>
                                <textarea class="inputGlass" name="description" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="smallField">
                                <label for="stars">Preferencia</label>
                                <div class="rating">
                                    <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                </div>
                            </div>
                            <div class="smallField">
                                <label for="price">Price</label>
                                <input class="inputGlass" type="number" name="price" id="">
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="field">
                                <label for="link">Store Link</label>
                                <input class="inputGlass" type="text" name="link" id="">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="formSubmit">
                    <button type="submit" class="glassButton">Edit Gift</button>
                    <button class="glassButton"> Cancel</button>
                </div>
            </form>
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

<script src="./js/previewImage.js"></script>
<script>
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>