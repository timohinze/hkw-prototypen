<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/projekte-element.php"); ?>

<?php get_header("programm", "projekte"); ?>

<?php
$project_posts = array(
     array(
         'titel' => "transmediale 2020 End to End",
         'projektfarbe' => "#FEE5DB",
         'bild' => "https://www.hkw.de/media/bilder/2020/transmediale_2020/the_laboratory_of_manuel_buerger_imgsize_buehne.jpg",
         'typ' => "Ausstellung, Konferenzen",
         'information' => "",
         'laufzeit' => "28.1. ---- 1.3.2020"
     ),
     array(
         'titel' => "On Music",
         'projektfarbe' => "#CDD8D8",
         'bild' => "https://www.hkw.de/media/bilder/2020/on_music/vigo_lounge_bryan_little_imgsize_buehne.jpg",
         'typ' => "Panels, Konzerte, DJ-Sets, Podcast",
         'information' => "In Kooperation mit Lorem Ipsum Dolor Est Lorem Ipsum Dolor Est Lorem Ipsum Dolor Est",
         'laufzeit' => "Bis 2022"
     ),
     array(
         'titel' => "Alphabet Readings",
         'projektfarbe' => "#C2DDE6",
         'bild' => "https://www.hkw.de/media/bilder/2020/alphabet_readings_1/metahaven_possessed_imgsize_buehne.jpg",
         'typ' => "Literaturreihe",
         'information' => "",
         'laufzeit' => "2019–2022"
     ),
     array(
         'titel' => "The Broken Archive",
         'projektfarbe' => "#F3D7CF",
         'bild' => "https://supercomputerstudio.com/clients/hkw-relaunch/content/programm/projekte/the-broken-archive/the-broken-archive.jpg",
         'typ' => "Online-Reihe: Vorträge, Diskussionen",
         'information' => "",
         'laufzeit' => "2020/2021"
     ),
     array(
         'titel' => "Art without death",
         'untertitel' => "Russischer Kosmimus",
         'projektfarbe' => "#DBE6DC",
         'bild' => "https://www.hkw.de/media/bilder/2017/artwithoutdeath/anton_vidokle_immortality_and_resurrection_for_all~1_imgsize_buehne.jpg",
         'typ' => "Online-Reihe: Vorträge, Diskussionen",
         'information' => "",
         'laufzeit' => "2020/2021"
     ),
     array(
         'titel' => "Projekt mit einem sehr langen Titel Lorem Ipsum Dolor Est Lorem Ipsum Dolor Est Lorem Ipsum Dolor Est",
         'projektfarbe' => "#FEE5DB",
         'bild' => "https://www.hkw.de/media/bilder/2020/transmediale_2020/the_laboratory_of_manuel_buerger_imgsize_buehne.jpg",
         'typ' => "Ausstellung, Konferenzen",
         'information' => "",
         'laufzeit' => "2020"
     )

   );

   $past_project_posts = array(
        array(
            'titel' => "redefining the power nach dürer",
            'projektfarbe' => "#FFA7B2",
            'bild' => "../../assets/img/quadrat-kiluanji_kia_henda_redefining_the_power_I_imgsize_L.jpg",
            'typ' => "Installationen",
            'information' => "Lorem Ipsum",
            'laufzeit' => "Mai ---- Oktober 2020"
        )
      )


     ?>

<main class="projects-archive-page">

  <div class="projects-filter">

    <form>
      <fieldset>
        <input type="checkbox" name="category-method" id="filter__category--ausstellungen">
        <label for="filter__category--ausstellungen">Ausstellungen</label>

        <input type="checkbox" name="category-method" id="filter__category--diskurs">
        <label for="filter__category--diskurs">Diskurs</label>

        <input type="checkbox" name="category-method" id="filter__category--literatur">
        <label for="filter__category--literatur">Literatur</label>

        <input type="checkbox" name="category-method" id="filter__category--music">
        <label for="filter__category--music">Musik</label>

        <input type="checkbox" name="category-method" id="filter__category--performacing-arts">
        <label for="filter__category--performacing-arts">Performing Arts</label>

        <input type="checkbox" name="category-method" id="filter__category--education">
        <label for="filter__category--education">Bildung</label>

        <input type="checkbox" name="category-method" id="filter__category--digital">
        <label for="filter__category--digital">Digital</label>

    </fieldset>

    </form>

  </div>




  <div class="future-projects">
    <h2>Zukünftige Projekte</h2>
    <?php show_projekte_element($project_posts)?>
  </div>
  <div class="past-projects">
    <h2>Vergangene Projekte</h2>
    <?php show_projekte_element($past_project_posts)?>
  </div>

</main>

<?php include_once("../../functions/footer.php"); ?>
