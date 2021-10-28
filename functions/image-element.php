<?php
function show_image_element($src){
$directory = BASE_URL.dirname($src);
$data = get_content_of_file($src);

  // image
echo '<figure class="element image-element '.$data["classes"].'">';
  echo '<img class="image-element__img" src="'.$directory."/".$data["src"].'"/>';
  echo '<figcaption class="image-element__caption">'.$data["caption"].'</figcaption>';
echo "</figure>";
} ?>
