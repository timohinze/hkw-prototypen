<?php
function show_subhead_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);

  // title
  echo '<div class="element subhead-element '.$data["classes"].'">';
  echo $data["text"];
  echo '</div>';


}
?>
