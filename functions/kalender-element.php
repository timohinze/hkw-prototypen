
<?php
function show_kalender_element($calendar_posts) {

        foreach ($calendar_posts as $date => $day_group) {

            echo '<div class="calendar__day-group">';

            if(empty($day_group)){
              //Wenn Heute keine Veranstaltungen sind
              echo '<div class="calendar__date calendar__date--empty">'. $date. ' keine Veranstaltungen</div>';
            }else{
              echo '<div class="calendar__date">' . $date . '</div>';
            }

            foreach ($day_group as $calendar_post) {

                if($calendar_post["abgesagt"]==true){
                  echo '<div class="calendar__item calendar__item--canceld" style="background:' . $calendar_post["projektfarbe"] . '">';
                }else{
                  echo '<div class="calendar__item" style="background:' . $calendar_post["projektfarbe"] . '">';
                }

                if (!empty($calendar_post["schwerpunktprojekt-titel"])) {
                    echo '<div class="calendar__schwerpunktprojekt-titel hyphenate">' . $calendar_post["schwerpunktprojekt-titel"] . '</div>';
                }
                if (!empty($calendar_post["topline"])) {
                    echo '<div class="calendar__topline">' . $calendar_post["topline"] . '</div>';
                }

                // Info Group
                echo '<div class="calendar__group calendar__group1">';
                    if($calendar_post["abgesagt"]==true){
                      echo '<div class="calendar__time">Abgesagt<br><span class="calendar__time-wrap">'. $calendar_post["zeit"] .'</span> </div>';
                    }else{
                      if (!empty($calendar_post["zeit"])) {
                          echo '<div class="calendar__time"><span class="calendar__time-wrap">'. $calendar_post["zeit"] .'</span></div>';
                      }
                  }
                  if (!empty($calendar_post["ort"])) {
                      echo '<div class="calendar__place">' . $calendar_post["ort"] . '</div>';
                  }
                  if (!empty($calendar_post["bild"])) {
                      echo '<div class="calendar__image"><img src="' . $calendar_post["bild"] . '" alt="Alt Text Lorem Ipsum"/></div>';
                  }
                echo '</div>';

                // Info Group
                echo '<div class="calendar__group calendar__group2">';
                echo '<div class="calendar__group calendar__group2-1">';
                  if (!empty($calendar_post["titel"])) {
                      echo '<h3 class="calendar__title hyphens">' . $calendar_post["titel"] . '</h3>';
                  }
                  if (!empty($calendar_post["untertitel"])) {
                      echo '<div class="calendar__subtitle">' . $calendar_post["untertitel"] . '</div>';
                  }
                  if (!empty($calendar_post["typ"])) {
                      echo '<div class="calendar__category">' . $calendar_post["typ"] . '</div>';
                    }
                    if (!empty($calendar_post["werbeinfo"])) {
                        echo '<div class="calendar__werbeinfo">' . $calendar_post["werbeinfo"] . '</div>';
                      }

                  echo '<div class="calendar__show-details"><a href="#">Details anzeigen</a></div>';

                echo '</div>';

                // Info Group
                echo '<div class="calendar__group calendar__group2-2">';

                  if (!empty($calendar_post["information"])) {
                      echo '<div class="calendar__info">' . $calendar_post["information"] . '</div>';
                  }



                  if (!empty($calendar_post["sprache"])) {
                      echo '<div class="calendar__language">' . $calendar_post["sprache"] . '</div>';
                  }
                  if (!empty($calendar_post["eintritt"])) {
                      echo '<div class="calendar__price">' . $calendar_post["eintritt"] . '</div>';
                  }

                  if (!empty($calendar_post["ausverkauft"])) {
                    if ($calendar_post["ausverkauft"]==true) {
                      echo '<div class="calendar__ticket">Ausverkauft, Restkarten an der Abendkasse</div>';
                    }
                  }else{

                  echo '<div class="calendar__ticket"><a class="external-link" href="#">Tickets</a></div>';
                  }

                  echo '<div class="calendar__save-date"><a class="download-link" href="#">Termin speichern</a></div>';



                echo '</div>';

                echo '</div>';

                echo '</div>';
            }

            echo '</div>';
        }

}
?>
