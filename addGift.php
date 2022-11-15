<?php
if(!isset($_SESSION)) { 
    session_start(); 
  } 
// see if a session variable is being use in php?
if (isset($_SESSION['userId'])) {
    include("./php/connectBD.php");

//receive post variables php?
if(isset($_POST['giftName']) && $_FILES['image'] && $_POST['description'] && $_POST['stars'] && $_POST['price'] && $_POST['link']){


    //Upload Image
    $imageName = '';
    $target_dir = "imageUploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_FILES["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }
    // Gera um nome único para a imagem
    $imageName = md5(uniqid(time())) . "." . $imageFileType;
    // Caminho de onde ficará a imagem
    $caminho_imagem = "./imageUploads/" . $imageName;
    

    // Check if file already exists
    if (file_exists($imageName)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your Image was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $caminho_imagem)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
      

    //add gift with user id
    //$sql = "INSERT INTO `gift` (`Id`, `UserId`, `Name`, `Link`, `Photo`, `Preference`, `Price`, `Description`, `CategoryId`, `Public`) VALUES (NULL, '2', '1', 'kuki.pt', 'a.pmg', '1', '1', '1', '1', '1');";
    //$sql = "INSERT INTO `gift` (`UserId`, `Name`, `Link`, `Photo`, `Preference`, `Price`, `Description`, `CategoryId`, `Public`) VALUES (".$_SESSION['userId'].", '".$_POST['giftName']."', '".$_POST['link']."', '".$imageName."', '".$_POST['stars']."', '".$_POST['price']."','".$_POST['description']."', '1', '1');";
    $sql = 'INSERT INTO `gift` (`UserId`, `Name`, `Link`, `Photo`, `Preference`, `Price`, `Description`, `CategoryId`, `Public`) VALUES ('.$_SESSION['userId'].', "'.$_POST["giftName"].'", "'.$_POST["link"].'", "'.$imageName.'", "'.$_POST["stars"].'", "'.$_POST["price"].'","'.$_POST["description"].'", "1", "1");';

    if (mysqli_query($conn, $sql)) {
        echo "Gift added successfully";
        echo "<script type='text/javascript'>window.location.replace('./userGiftList.php');</script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script type='text/javascript'>alert('Ops ERRO');</script>";
        echo "<script type='text/javascript'>window.location.replace('./addGift.php');</script>";
      }

    //move to home or list gift page
   // echo "<script type='text/javascript'>window.location.replace('./listGift.php');</script>";
}
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
    include("./blocks/navBar.php")
    ?>
    <div class="container">
        <div class="giftForm">
            <div class="title">
                <h2>Create your Gift</h2>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" class="glassButton">Add Gift</button>
                    
                    <a class="glassButton" href="./userGiftList.php">Cancel</a>
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

<?php
}else {
    echo "<script type='text/javascript'>window.location.replace('./login.php');</script>";
}
?>

