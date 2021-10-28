<?php
function show_service_info_element($src){
  $content = file_get_contents($src);
  $data = get_content_of_file($src);


  // title
  echo '<div class="element service-info-element '.$data["classes"].'" style="background: '.$data["color"].'">';

  if(!empty($data["header"])){     echo '<div class="service-info-element__header">'.$data["header"].'</div>'; }

  echo '<div class="service-info-element__columns">';
    if(!empty($data["column1"])){     echo '<div class="service-info-element__column">'.$data["column1"].'</div>'; }
    if(!empty($data["column2"])){     echo '<div class="service-info-element__column">'.$data["column2"].'</div>'; }
    if(!empty($data["column3"])){     echo '<div class="service-info-element__column">'.$data["column3"].'</div>'; }
  echo '</div>';

  echo '</div>';
}

 ?>
