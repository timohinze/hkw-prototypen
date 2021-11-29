<?php
function show_veranstaltungsseiten_schedule_element($program_posts) {

        foreach ($program_posts as $date => $day_group) {

            echo '<div class="schedule__day-group">';

            echo '<div class="schedule__date">' . $date . '</div>';


            foreach ($day_group as $program_post) {

                  echo '<div class="schedule-item">';


                if (!empty($program_post["topline"])) {
                    echo '<div class="schedule-item__topline">' . $program_post["topline"] . '</div>';
                }

                if (!empty($program_post["zeit"])) {
                    echo '<div class="schedule-item__time"><span class="schedule-item__time-wrap">'. $program_post["zeit"] .'</span></div>';
                }

                  if (!empty($program_post["titel"])) {
                      echo '<h3 class="schedule-item__title hyphens"><a href="#kalenderlink">' . $program_post["titel"] . '</a></h3>';
                  }
                  if (!empty($program_post["untertitel"])) {
                      echo '<div class="schedule-item__subtitle">' . $program_post["untertitel"] . '</div>';
                  }
                echo '</div>';


            }

            echo '</div>';
        }

}
?>
