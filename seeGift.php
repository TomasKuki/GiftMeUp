<?php
if(!isset($_SESSION)) { 
    session_start(); 
  } 
// see if a session variable is being use in php?
if (isset($_SESSION['userId'])) {
    include("./php/connectBD.php");

    //receive post variables php?
    if(isset($_GET['id'])){
        
        $sql = "SELECT * FROM `gift` WHERE `Id` = ".$_GET['id']."";

        if ($result = mysqli_query($conn, $sql)) {
            while($row = $result->fetch_assoc()) {
                ?> 
                
    
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
    <script src="https://kit.fontawesome.com/98f691c863.js" crossorigin="anonymous"></script>
    <title>Personal List</title>
</head>

<body>
    <?php
    include("./blocks/navBar.php");
    ?>
    <div class="container">
        <div class="giftForm">
            <div class="title">
                <h2>Edit your Gift</h2>
            </div>
                <div class="fields">
                    <div class="FormFields">
                        <img class="imagePreview" id="output" src="<?=(isset($row['Photo']) ? $row['Photo'] : ' ')?>" />
                        


                    </div>
                    <div class="FormFields">
                        <div class="formRow">
                            <div class="field">
                                <label for="giftName">Name</label>
                                <input class="inputGlass" type="text" name="giftName" id="" value="<?=(isset($row['Name']) ? $row['Name'] : ' ')?>"disabled>
                            </div>

                        </div>
                        <div class="formRow">
                            <div class="field">
                                <label for="description">Description</label>
                                <textarea class="inputGlass" name="description" id="" cols="30" rows="2" disabled> <?=(isset($row['Description']) ? $row['Description'] : ' ')?> </textarea>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="smallField">
                                <label for="stars">Preferencia</label>
                                <div class="rating">
                                    <label>
                                        <input type="radio" name="stars" value="1" <?php echo ($row['Preference'] == "1") ? 'checked="checked"' : ''; ?> disabled/>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="2" <?php echo ($row['Preference'] == "2") ? 'checked="checked"' : ''; ?>disabled/>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="3" <?php echo ($row['Preference'] == "3") ? 'checked="checked"' : ''; ?>disabled/>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="4" <?php echo ($row['Preference'] == "4") ? 'checked="checked"' : ''; ?>disabled/>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="5" <?php echo ($row['Preference'] == "5") ? 'checked="checked"' : ''; ?>disabled/>
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
                                <input class="inputGlass" type="number" name="price" id="" value="<?=(isset($row['Price']) ? $row['Price'] : ' ')?>"disabled>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="field">
                                <label for="link">Store Link</label>
                                <input class="inputGlass" type="text" name="link" id="" value="<?=(isset($row['Link']) ? $row['Link'] : ' ')?>" disabled>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="formSubmit">
                        <button class="glassButton" onclick="history.back()"> Back</button>
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

<script src="./js/previewImage.js"></script>
<script>
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>

<?php
         }
        } else {
            echo "Error: Ao obter o presente!";
            echo "<script type='text/javascript'>window.location.replace('./addGift.php');</script>";
        }

        //move to home or list gift page
    // echo "<script type='text/javascript'>window.location.replace('./listGift.php');</script>";
    }
}
?>