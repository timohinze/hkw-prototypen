<?php
function show_title_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);

  // title
  echo '<div class="element title-element">';
  echo '<h1 class="'.$data["classes"].'">'.$data["title"].'</h1>';
  echo '</div>';


}
?>
