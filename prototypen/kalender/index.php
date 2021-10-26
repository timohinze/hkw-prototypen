<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/kalender-element.php"); ?>



<?php
$calendar_posts = array(
  'Morgen' => array(
     array(
         'schwerpunktprojekt' => true,
         'schwerpunktprojekt-titel' => "Illiberal Arts",
         'projektfarbe' => "#89B6A5",
         'datum' => "Heute",
         'zeit' => "12&ndash;20h",
         'ort' => "Ausstellungshalle 1, Dachterrasse",
         'bild' => "https://www.hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg",
         'abgesagt' => false,

         'topline' => "",
         'titel' => "",
         'untertitel' => "Wie frei ist die Kunst im Kapitalismus?",
         'typ' => "Ausstellung",

         'sprache' => "Sprache Lorem",
         'information' => "Weitere Informationen Ipsum",
         'ticketlink' => "",
         'freiereintritt' =>false,
         'eintritt' =>"Eintrittspreise Lorem",

     ),
     array(
       'schwerpunktprojekt' => true,
       'schwerpunktprojekt-titel' => "Archiv der Flucht",

       'projektfarbe' => "rgb(239 170 170)",
       'zeit' => "12&ndash;20h",
       'ort' => "Foyer",
       'bild' => "https://www.hkw.de/media/bilder/2021/archiv_der_flucht_1/installationsansichten/installation_archiv_der_flucht_imgsize_buehne.jpg",
       'abgesagt' => false,

       'topline' => "",
       'titel' => "Archiv der Flucht - Installationen",
       'untertitel' => "Eine Installation im Foyer macht die 42 filmischen Interviews kollektiv erfahrbar",
       'typ' => "Installation",

       'sprache' => "Sprache Lorem",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "",
       'freiereintritt' =>true,
       'eintritt' =>"Eintrittspreise Lorem",
     ),
     array(
       'schwerpunktprojekt' => false,
       'schwerpunktprojekt-titel' => "",
       'projektfarbe' => "rgba(239, 170, 170, 0.5)",
       'zeit' => "17&ndash;20h",
       'ort' => "<span class='icon-extern'></span> Externer Ort Lorem",
       'bild' => "https://www.hkw.de/media/bilder/2021/archiv_der_flucht_1/caroline_scheidt_imgsize_M.jpg",
       'abgesagt' => false,

       'topline' => "Archiv der Flucht",
       'titel' => "Kritisches Hören",
       'untertitel' => "Schreibwerkstatt für Erwachsene",
       'typ' => "Typ lorem",
       'sprache' => "Auf Deutsch und Englisch",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "https://tickets.kbb.eu/hkw.webshop/webticket/bestseatselect?eventId=12388",
       'freiereintritt' =>true,
       'eintritt' =>"<span class='icon-eintritt-frei'></span> Eintritt frei, mit Einlassticket",
     )
   ),
     'Samstag 09.10.' => array(
     array(
         'schwerpunktprojekt' => false,
         'schwerpunktprojekt-titel' => "",
         'projektfarbe' => "rgba(137, 182, 165, 0.5)",
         'zeit' => "12&ndash;20h",
         'ort' => "Ausstellungshalle 1, Dachterrasse",
         'bild' => "https://www.hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg",
         'abgesagt' => false,

         'topline' => "Topline Lorem Ipsum",
         'titel' => "Illiberal Arts",
         'untertitel' => "Wie frei ist die Kunst im Kapitalismus?",
         'typ' => "Ausstellung",

         'sprache' => "Sprache Lorem",
         'information' => "Weitere Informationen Ipsum",
         'ticketlink' => "",
         'freiereintritt' =>false,
         'eintritt' =>"Eintrittspreise Lorem",

     ),
     array(
       'schwerpunktprojekt' => false,
       'schwerpunktprojekt-titel' => "",
       'projektfarbe' => "rgba(239, 170, 170, 0.5)",
       'zeit' => "16&ndash;15h",
       'ort' => "Ort Lorem",
       'bild' => "https://www.hkw.de/media/bilder/2021/archiv_der_flucht_1/hkw_schools_day_david_gauffin.jpg",
       'abgesagt' => false,

       'topline' => "Archiv der Flucht",
       'titel' => "Zwischen Weimarer Republik und heute",
       'untertitel' => "Schreibwerkstatt für Erwachsene",
       'typ' => "Typ lorem",
       'sprache' => "Auf Deutsch und Englisch",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "https://tickets.kbb.eu/hkw.webshop/webticket/bestseatselect?eventId=12388",
       'freiereintritt' =>true,
       'eintritt' =>"<span class='icon-eintritt-frei'></span> Eintritt frei, mit Einlassticket",

     ),
     array(
       'schwerpunktprojekt' => false,
       'schwerpunktprojekt-titel' => "Investigative Commons",
       'projektfarbe' => "#FFFB65",
       'datum' => "Samstag 09.10.",
       'zeit' => "16h&ndash;21.30h",
       'ort' => "Auditorium, Livestream",
       'bild' => "https://www.hkw.de/media/bilder/2021/investigative_commons__forensic_architecture/decolonize_this_place_2021_imgsize_S.png",
       'abgesagt' => false,

       'topline' => "",
       'titel' => "Socializing Evidence",
       'untertitel' => "Untertitel Lorem Ipsum",
       'typ' => "Konferenz",
       'sprache' => "Auf Englisch mit deutscher Simultanübersetzung",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "https://tickets.kbb.eu/hkw.webshop/webticket/bestseatselect?eventId=12388",
       'freiereintritt' =>true,
       'eintritt' =>"Eintritt 5€/3€",
     )
   ),

   'Donnerstag 21.10.' => array(
   array(
     'schwerpunktprojekt' => true,
     'schwerpunktprojekt-titel' => "",
     'projektfarbe' => "rgba(239, 170, 170, 0.5)",

     'zeit' => "12&ndash;20h",
     'ort' => "Foyer",
     'bild' => "https://www.hkw.de/media/bilder/2021/archiv_der_flucht_1/installationsansichten/installation_archiv_der_flucht_imgsize_buehne.jpg",
     'abgesagt' => false,

     'topline' => "",
     'titel' => "Archiv der Flucht - Installationen",
     'untertitel' => "Eine Installation im Foyer macht die 42 filmischen Interviews kollektiv erfahrbar",
     'typ' => "Installation",

     'sprache' => "Sprache Lorem",
     'information' => "Weitere Informationen Ipsum",
     'ticketlink' => "",
     'freiereintritt' =>true,
     'eintritt' =>"Eintrittspreise Lorem",
   ),
   array(
     'schwerpunktprojekt' => true,
     'schwerpunktprojekt-titel' => "Counter Gravity",
     'projektfarbe' => "rgb(180 178 163)",
     'zeit' => "12&ndash;20h",
     'ort' => "",
     'bild' => "https://www.hkw.de/media/bilder/2021/counter_gravity/heinz_emigholz_bickels_socialism_filmstill_imgsize_buehne.jpg",
     'abgesagt' => false,

     'topline' => "",
     'titel' => "",
     'untertitel' => "Die Filme von Heinz Emigholz",
     'typ' => "Werkschau",
     'sprache' => "Auf Deutsch und Englisch, ohne Übersetzung",
     'information' => "Streetscapes",
     'ticketlink' => "",
     'freiereintritt' =>false,
     'eintritt' =>"Tagesticket: 7€/5€ 3-Tage-Ticket: 15€",
   ),
   array(
     'schwerpunktprojekt' => true,
     'schwerpunktprojekt-titel' => "",
     'projektfarbe' => "rgba(137, 182, 165, 0.5)",
     'zeit' => "12&ndash;20h",
     'ort' => "Ausstellungshalle 1, Dachterrasse",
     'bild' => "https://www.hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg",
     'abgesagt' => false,

     'topline' => "",
     'titel' => "Illiberal Arts",
     'untertitel' => "Wie frei ist die Kunst im Kapitalismus?",
     'typ' => "Ausstellung",

     'sprache' => "Sprache Lorem",
     'information' => "Weitere Informationen Ipsum",
     'ticketlink' => "",
     'freiereintritt' =>false,
     'eintritt' =>"Eintrittspreise Lorem",
     'ausverkauft' => true
   ),

   array(
     'schwerpunktprojekt' => true,
     'schwerpunktprojekt-titel' => "The Sound of Distance",
     'projektfarbe' => "#4F81DA",
     'zeit' => "16h",
     'ort' => "Ausstellungshalle 1, Dachterrasse",
     'bild' => "https://www.hkw.de/media/bilder/2021/the_sound_of_distance/simon_keckeisen_the_sound_of_distance_imgsize_buehne.jpg",
     'abgesagt' => false,

     'topline' => "",
     'titel' => "",
     'untertitel' => "Neue Ideen für Musik, Raum und Architektur",
     'typ' => "Konzerte, Klanginstallationen, Talks",

     'sprache' => "Sprache Lorem",
     'information' => "Weitere Informationen Ipsum",
     'ticketlink' => "",
     'freiereintritt' =>false,
     'eintritt' =>"Abendtickets: 13€/10€  Festivalpass: 30€",
   )
 ),

 'Freitag 22.10.' => array(
 array(
     'schwerpunktprojekt' => true,
     'schwerpunktprojekt-titel' => "",
     'projektfarbe' => "rgba(180, 178, 163, 0.5)",
     'zeit' => "12&ndash;20h",
     'ort' => "",
     'bild' => "https://www.hkw.de/media/bilder/2021/counter_gravity/heinz_emigholz_bickels_socialism_filmstill_imgsize_buehne.jpg",
     'abgesagt' => false,

     'topline' => "Das neue Alphabet",
     'titel' => "Counter Gravity – Monologische Dialoge",
     'untertitel' => "Die Filme von Heinz Emigholz",
     'typ' => "Werkschau",
     'sprache' => "Auf Deutsch und Englisch",
     'information' => "Weitere Informationen Ipsum",
     'ticketlink' => "",
     'freiereintritt' =>false,
     'eintritt' =>"Tagesticket: 7€/5€ 3-Tage-Ticket: 15€",

    ),
 array(
   'schwerpunktprojekt' => true,
   'schwerpunktprojekt-titel' => "",
   'projektfarbe' => "rgba(239, 170, 170, 0.5)",

   'zeit' => "12&ndash;20h",
   'ort' => "Foyer",
   'bild' => "https://www.hkw.de/media/bilder/2021/archiv_der_flucht_1/installationsansichten/installation_archiv_der_flucht_imgsize_buehne.jpg",
   'abgesagt' => true,

   'topline' => "",
   'titel' => "Archiv der Flucht - Installationen",
   'untertitel' => "Eine Installation im Foyer macht die 42 filmischen Interviews kollektiv erfahrbar",
   'typ' => "Installation",

   'sprache' => "Sprache Lorem",
   'information' => "Weitere Informationen Ipsum",
   'ticketlink' => "",
   'freiereintritt' =>true,
   'eintritt' =>"Eintrittspreise Lorem",

 ),

array(
  'schwerpunktprojekt' => false,
  'schwerpunktprojekt-titel' => "",
  'projektfarbe' => "rgba(137, 182, 165, 0.5)",
  'zeit' => "12&ndash;20h",
  'ort' => "Ausstellungshalle 1, Dachterrasse",
  'bild' => "https://www.hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg",
  'abgesagt' => false,

  'topline' => "Topline Lorem Ipsum",
  'titel' => "Illiberal Arts",
  'untertitel' => "Wie frei ist die Kunst im Kapitalismus?",
  'typ' => "Ausstellung",

  'sprache' => "Sprache Lorem",
  'information' => "Weitere Informationen Ipsum",
  'ticketlink' => "",
  'freiereintritt' =>false,
  'eintritt' =>"Eintrittspreise Lorem",

),

 array(
   'schwerpunktprojekt' => true,
   'schwerpunktprojekt-titel' => "The Sound of Distance",
   'projektfarbe' => "rgba(79, 129, 218, 0.5)",
   'zeit' => "16h",
   'ort' => "Ausstellungshalle 1, Dachterrasse",
   'bild' => "https://www.hkw.de/media/bilder/2021/the_sound_of_distance/simon_keckeisen_the_sound_of_distance_imgsize_buehne.jpg",
   'abgesagt' => true,

   'topline' => "",
   'titel' => "",
   'untertitel' => "Neue Ideen für Musik, Raum und Architektur",
   'typ' => "Konzerte, Klanginstallationen, Talks",

   'sprache' => "Sprache Lorem",
   'information' => "Weitere Informationen Ipsum",
   'ticketlink' => "",
   'freiereintritt' =>false,
   'eintritt' =>"Abendtickets: 13€/10€ Festivalpass: 30€",


 ),

),
     'Dienstag 2.11.' => array(

      array(
          'schwerpunktprojekt' => true,
          'schwerpunktprojekt-titel' => "Lorem Ipsum Projektschwerpunkt Titel ",
          'projektfarbe' => "#89B6A5",
          'datum' => "Heute",
          'zeit' => "ab 12h, den ganzen Tag",
          'ort' => "<span class='icon-Livestream'></span> Livestream",
          'bild' => "https://www.hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg",
          'abgesagt' => false,

          'topline' => "",
          'titel' => "",
          'untertitel' => "Wie frei ist die Kunst im Kapitalismus?",
          'typ' => "Ausstellung",

          'sprache' => "Sprache Lorem",
          'information' => "Weitere Informationen Ipsum",
          'ticketlink' => "",
          'freiereintritt' =>false,
          'eintritt' =>"Eintrittspreise Lorem",

      ),
      array(
          'schwerpunktprojekt' => true,
          'schwerpunktprojekt-titel' => "Lorem Ipsum Projektschwerpunkt Titel ",
          'projektfarbe' => "#89B6A5",
          'datum' => "Heute",
          'zeit' => "12 noon&ndash;12 midnight",
          'ort' => "Ausstellungshalle 1, Dachterrasse",
          'bild' => "https://www.hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg",
          'abgesagt' => false,

          'topline' => "",
          'titel' => "Titel steht hier, keine Topline",
          'untertitel' => "Wie frei ist die Kunst im Kapitalismus?",
          'typ' => "Ausstellung",

          'sprache' => "Sprache Lorem",
          'information' => "Weitere Informationen Ipsum",
          'ticketlink' => "",
          'freiereintritt' =>false,
          'eintritt' =>"Eintrittspreise Lorem",

      ),

      array(
          'schwerpunktprojekt' => false,
          'schwerpunktprojekt-titel' => "",
          'projektfarbe' => "#E9F0F5",
          'datum' => "",
          'zeit' => "14&ndash;17h",
          'ort' => "HKW Auditorium",
          'bild' => "",
          'abgesagt' => false,

          'topline' => "Why Are We Here Now?",
          'titel' => "Unsaft gebrochner Fluss des Reisens",
          'untertitel' => "",
          'typ' => "Vorträge, Performances",
          'werbeinfo' => "
          <p> Boris Buden: <i>From Orient to Archaeology: A Railway through Time,</i> Vortrag</p>
          <p> Zeynep Çelik: <i>Railways and Politics of Archaeology,</i> Vortrag</p>
          <p> Yazid Anani: <i>an imaginary train ride, 1926,</i> Lecture Performance</p>
          <p> Shahana Rajani & Zahra Malkani: <i>Afterlives of Imperial Formations,</i> Lecture Performance</p>

          ",

          'sprache' => "",
          'information' => "",
          'ticketlink' => "",
          'freiereintritt' =>false,
          'eintritt' =>"Nachmittagsticket: 6€/4€<br> Tagesticket: 10€/6€",

      ),

    )




);









?>
<main class="calendar-page">
<div class="calendar-filter-toggle-btn">
  <form>
      <input type="checkbox" name="show-filter" id="show-filter">
      <label for="show-filter">Filter <span>&#65291;</span></label>

      <input type="checkbox" name="show-date-picker" id="show-date-picker">
      <label for="show-date-picker">Kalender <span>&#65291;</span></label>

      <input type="button" name="reset-filter" id="reset-filter">
      <label for="reset-filter">Zurücksetzen</label>


  </form>
</div>

<div class="calendar-filter">

  <form>
    <fieldset>
      <input type="checkbox" name="category-method" id="filter__category--ausstellungen">
      <label for="filter__category--ausstellungen">Ausstellungen</label>

      <input type="checkbox" name="category-method" id="filter__category--diskurs">
      <label for="filter__category--diskurs">Diskurs</label>

      <input type="checkbox" name="category-method" id="filter__category--literatur">
      <label for="filter__category--literatur">Literatur</label>

      <input type="checkbox" name="category-method" id="filter__category--musik">
      <label for="filter__category--musik">Musik</label>

      <input type="checkbox" name="category-method" id="filter__category--performacing-arts">
      <label for="filter__category--performacing-arts">Performing Arts</label>

      <input type="checkbox" name="category-method" id="filter__category--fuerungen">
      <label for="filter__category--fuerungen">Führungen</label>

      <input type="checkbox" name="category-method" id="filter__category--workshops">
      <label for="filter__category--workshops">Workshops</label>
  </fieldset>

  <fieldset>
    <span class="filter_subgroup">
      <input type="checkbox" name="filter-method" id="filter--berlin">
      <label for="filter--berlin">Berlin</label>

      <input type="checkbox" name="filter-method" id="filter--international">
      <label for="filter--international">International</label>

      <input type="checkbox" name="filter-method" id="filter--digital">
      <label for="filter--digital">Digital</label>
    </span>
    <span class="filter_subgroup">
      <input type="checkbox" name="filter-method" id="filter--eintritt-frei">
      <label for="filter--eintritt-frei"> Eintritt frei</label>
    </span>

    <span class="filter_subgroup">
      <input type="checkbox" name="filter-method" id="filter--englisch">
      <label for="filter--englisch">Englisch</label>
    </span>

  </fieldset>

  </form>

</div>

<?php show_kalender_element($calendar_posts)?>

</main>

<script>
</script>

<?php include_once("../../functions/footer.php"); ?>
