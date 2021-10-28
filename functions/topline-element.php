<?php
function show_topline_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);
  $directory = BASE_URL.dirname($src);

  echo '<div class="element topline-element '.$data["classes"].'">';
    echo $data["text"];
  echo '</div>';


}
?>
