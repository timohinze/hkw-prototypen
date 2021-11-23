<?php
function show_veranstaltungsseiten_program_element($program_posts) {

        foreach ($program_posts as $date => $day_group) {

            echo '<div class="program__day-group">';

            echo '<div class="program__date">' . $date . '</div>';


            foreach ($day_group as $program_post) {

                  echo '<div class="program__item">';


                if (!empty($program_post["topline"])) {
                    echo '<div class="program__topline">' . $program_post["topline"] . '</div>';
                }

                if (!empty($program_post["zeit"])) {
                    echo '<div class="program__time"><span class="program__time-wrap">'. $program_post["zeit"] .'</span></div>';
                }

                  if (!empty($program_post["titel"])) {
                      echo '<h3 class="program__title hyphens"><a href="#kalenderlink">' . $program_post["titel"] . '</a></h3>';
                  }
                  if (!empty($program_post["untertitel"])) {
                      echo '<div class="program__subtitle">' . $program_post["untertitel"] . '</div>';
                  }
                echo '</div>';


            }

            echo '</div>';
        }

}
?>
