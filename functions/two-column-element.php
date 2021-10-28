<?php
function show_two_column_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);
if(empty($data["color"])){$data["color"]="";}
  echo '<div class="element two-column-element '.$data["classes"].'" style="background: '.$data["color"].'">';
    echo '<div class="two-column-element__column">'.$data["column1"].'</div>';

    echo '<div class="two-column-element__column">'.$data["column2"].'</div>';
  echo '</div>';
}

 ?>
