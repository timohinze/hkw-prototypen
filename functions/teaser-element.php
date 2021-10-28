<?php
function show_teaser_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);


  // title
  echo '<div class="element teaser-element" style="background: '.$data["color"].'">';
    if(isset($data["column1"])){
      echo '<div class="teaser-element__column">'.$data["column1"].'</div>';
    }
    if(isset($data["column2"])){
      echo '<div class="teaser-element__column">'.$data["column2"].'</div>';
    }
    if(isset($data["column3"])){
      echo '<div class="teaser-element__column">'.$data["column3"].'</div>';
    }
  echo '</div>';
}

 ?>
