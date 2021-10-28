<?php
function show_text_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);

  echo '<div class="element text-element '.$data["classes"].'">';
  echo $data["text"];
  echo '</div>';
}
?>
