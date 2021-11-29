<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>
<?php include_once("../../functions/linkrail.php"); ?>


<?php get_header(); ?>

<?php
$linkrail = array (
  array(
    "name" => "bauhaus imaginista:",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Programm",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Konferenzen",
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
    "classes" => "",

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

<main class="veranstaltungsseite-page">

<?php show_topline_element("../../content/programm/veranstaltungen/acid-communismn/topline.txt"); ?>


<?php show_title_element("../../content/programm/veranstaltungen/acid-communismn/title.txt"); ?>

<?php show_subhead_element("../../content/programm/veranstaltungen/acid-communismn/subhead.txt"); ?>





<?php show_two_column_element("../../content/programm/veranstaltungen/acid-communismn/introduction.txt"); ?>

<div class="element schedule veranstaltungsseite-schedule">
 <h2 class="schedule__headline">Programm Acid Communism</h2>

<?php
$calendar_posts = array(
    'Freitag 11. Juni' => array(

     array(
       'zeit' => "14–14.15h",
       'titel' => "What is Acid Communism?",
       'untertitel' => "Einführung von Pascal Jurt & Christian Werthschulte",
     ),

     array(
       'zeit' => "14.15–15.30h",
       'titel' => "Revolution and Capitalism in the 1970s",
       'untertitel' => "Vortrag von Maurizio Lazzarato mit anschließender Diskussion und Q&A mit Séverine Marguin",
     ),

     array(
       'zeit' => "15.30–16.45h",
       'titel' => "The Political Consciousness of Totality –Thinking Complexity.",
       'untertitel' => "Vortrag von Alex Williams mit anschließender Diskussion und Q&A",
     ),

     array(
       'zeit' => "17–18.15h",
       'titel' => "We’re Building a New City – How the Counterculture fell out of love with Modern Architecture",
       'untertitel' => "Vortrag von Owen Hatherley mit anschließender Diskussion und Q&A",
     ),
     array(
       'zeit' => "18.15–20h",
       'titel' => "#ACFM goes Live with You!",
       'untertitel' => "Live-Podcast mit Nadia Idle, Jeremy Gilbert und Keir Milburn mit anschließender Diskussion und Q&A",
     ),


 ),



     'Donnerstag 10. Juni.' => array(
     array(
       'zeit' => "14–14.30h",
       'titel' => "What is Acid Communism?",
       'untertitel' => "Einführung von Pascal Jurt und Christian Werthschulte",
     ),
     array(
       'zeit' => "14.30 –15h",
       'titel' => "Access to Tools (on Acid)",
       'untertitel' => "Vortrag von Diedrich Diederichsen",
     ),
     array(
       'zeit' => "15–15.45h",
       'titel' => "Responses auf „Access to Tools (on Acid)",
       'untertitel' => "Von Barbara Sichtermann, Cord Riechelmann und Bernd Cailloux",
       )


     )
);

show_veranstaltungsseiten_schedule_element($calendar_posts);
?>
</div>

</main>
<?php include_once("../../functions/footer.php"); ?>
