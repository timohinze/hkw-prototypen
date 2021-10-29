<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>
<?php include_once("../../functions/linkrail.php"); ?>

<?php get_header(); ?>


<?php
$linkrail = array (
  array(
    "name" => "bauhaus imaginista",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Programm",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Konferenz",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Vermittlung",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Kuratorisches Statement",
    "slug" => "",
    "classes" => "submenu__item--selected",

  ),
  array(
    "name" => "Partner und Team",
    "slug" => "",
    "classes" => "",

  ),
  array(
    "name" => "Publikation",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Mediathek",
    "slug" => "",
    "classes" => "",
  )
);
?>

<main class="projektstartseite-page">

<?php linkrail($linkrail); ?>


<?php show_topline_element("../../content/programm/projekte/bauhaus-imaginista/kuratorisches-statement/topline.txt"); ?>

<?php show_title_element("../../content/programm/projekte/bauhaus-imaginista/kuratorisches-statement/title.txt"); ?>

<?php show_text_element("../../content/programm/projekte/bauhaus-imaginista/kuratorisches-statement/text.txt"); ?>


</main>
<?php include_once("../../functions/footer.php"); ?>
