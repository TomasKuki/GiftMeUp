
<ul class="cards">
    <li>
      <a href="<?=$link?>" class="card">
        <img
          src="./images/present.jpg"
          class="card__image"
          alt=""
        />
        <div class="card__overlay">
          <div class="card__header">
            <div class="card__header-text">
              <h3 class="card__title"><?=$text?></h3>
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