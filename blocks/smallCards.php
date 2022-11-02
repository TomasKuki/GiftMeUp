
<ul class="cards">
    <li>
      <a href="<?=$link?>" class="card">
      <?php
        if (isset($row['Photo']) && $row['Photo'] != '') {?>
          <img
          src="./imageUploads/<?=$row['Photo']?>"
          class="card__image"
          alt=""
        /><?php
        }else {?>
          <img
          src="./images/present.jpg"
          class="card__image"
          alt=""
        /><?php
        }
      ?>
        
        <div class="card__overlay">
          <div class="card__header">
            <div class="card__header-text">
            <?php
              if (isset($text) && $text != '') {?>
                <h3 class="card__title"><?=$text?></h3><?php
              }else {?>
                <h3 class="card__title">Titulo</h3><?php
              }
            ?> 
            </div>
          </div>
<?php
if (isset($description)) {
  ?>
        <p class="card__description">
          <?=$description?>
          </p>
        </div>
<?php
}else{
  
  echo'<p class="card__description">
  Add items to your list and share it! <br>
  You ll never have to
  worry about people not knowing what to give you again.
  </p>
  </div>';
}         
?>
      </a>
    </li>
  </ul>