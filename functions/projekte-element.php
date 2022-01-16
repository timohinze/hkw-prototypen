<?php
function show_projekte_element($project_posts) {

  foreach ($project_posts as $project_post) {

    echo '<div class="project-item" style="background:' . $project_post["projektfarbe"] . '">';

    echo '<div class="project-item__media">';
      if (!empty($project_post["bild"])) {
        echo '<div class="project-item__image"><img src="' . $project_post["bild"] . '" alt="Alt Text Lorem Ipsum"/></div>';
      }
      echo '</div>';

      echo '<div class="project-item__text">';
        echo '<div class="project-item__header">';
          if (!empty($project_post["titel"])) {
            echo '<h3 class="project-item__title hyphenate"><a href="#projektlink">' . $project_post["titel"] . '</a></h3>';
          }
          if (!empty($project_post["untertitel"])) {
            echo '<div class="project-item__subtitle hyphenate">' . $project_post["untertitel"] . '</div>';
          }
        echo '</div>';

        echo '<div class="project-item__footer">';
          if (!empty($project_post["laufzeit"])) {
            echo '<div class="project-item__date ">' . $project_post["laufzeit"] . '</div>';
          }
          if (!empty($project_post["typ"])) {
            echo '<div class="project-item__category">' . $project_post["typ"] . '</div>';
          }
          if (!empty($project_post["information"])) {
            echo '<div class="project-item__information">' . $project_post["information"] . '</div>';
          }
        echo '</div>';
      echo '</div>';

    echo "</div>";

  }
}
?>
