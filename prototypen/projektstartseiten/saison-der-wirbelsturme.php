<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>
<?php include_once("../../functions/linkrail.php"); ?>


<?php get_header(); ?>

<?php
$linkrail = array (
  array(
    "name" => "Internationaler Literaturpreis 2019",
    "slug" => "",
    "classes" => "link-rail__item--selected",
  ),
  array(
    "name" => "Termine",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Shortlist 2019",
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

<?php show_title_element("../../content/programm/projekte/internationaler-literaturpreis/saison-der-wirbelsturme/title.txt"); ?>

<?php show_subhead_element("../../content/programm/projekte/internationaler-literaturpreis/saison-der-wirbelsturme/subhead.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/internationaler-literaturpreis/saison-der-wirbelsturme/introduction.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/internationaler-literaturpreis/saison-der-wirbelsturme/two-column.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/internationaler-literaturpreis/saison-der-wirbelsturme/autorin.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/internationaler-literaturpreis/saison-der-wirbelsturme/ubersetzerin.txt"); ?>

</main>
<?php include_once("../../functions/footer.php"); ?>
