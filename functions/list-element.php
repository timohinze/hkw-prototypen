<?php
function show_list_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);


  echo '<div class="element list-element '.$data["classes"].'">';
    echo '<h2>'.$data["title"].'</h2>';
    echo $data["list"];
  echo '</div>';


}
?>
