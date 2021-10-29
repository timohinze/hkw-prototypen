<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>
<?php include_once("../../functions/linkrail.php"); ?>

<?php get_header(); ?>

<?php
$linkrail = array (
  array(
    "name" => "Internationaler Literaturpreis 2021",
    "slug" => "",
    "classes" => "link-rail__item--selected",
  ),
  array(
    "name" => "Termine",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Shortlist 2021",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Über den Preis",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Jury",
    "slug" => "",
    "classes" => "",

  ),
  array(
    "name" => "Chronik",
    "slug" => "",
    "classes" => "",

  ),
  array(
    "name" => "Mediathek",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Partner und Team",
    "slug" => "",
    "classes" => "",
  )
);
?>

<main class="projektstartseite-page">
<div class="element element--fullbleed">
<div class="video-player-wrap">
                 <button class="video-player__play-button"></button>
                 <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/Bildschirmfoto 2021-08-27 um 15.22.55.png" alt="Lorem Ipsum" class="landscape">
              </div>
  </div>


 <?php linkrail($linkrail); ?>


<?php show_title_element("../../content/programm/projekte/internationaler-literaturpreis/title.txt"); ?>

<?php show_subhead_element("../../content/programm/projekte/internationaler-literaturpreis/subhead.txt"); ?>

<?php show_service_info_element("../../content/programm/projekte/internationaler-literaturpreis/service-info.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/internationaler-literaturpreis/introduction.txt"); ?>



</main>
<?php include_once("../../functions/footer.php"); ?>
