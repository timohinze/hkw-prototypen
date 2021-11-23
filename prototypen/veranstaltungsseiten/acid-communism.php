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

<div class="element program veranstaltungsseite-program">
 <h2 class="program__header">Programm Acid Communism</h2>

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

show_veranstaltungsseiten_program_element($calendar_posts);
?>
</div>
<!--

<div class="element element--fullbleed element--abstand-unten2 element--abstand-oben2 super-text-media-element">
      <div class="super-text-media-item super-text-media-item--small element--padding-unten2 add-gradient add-gradient--visible">
         <div class="super-text-media-item__media">
            <div class="video-player-wrap">
               <button class="video-player__play-button"></button>
               <img src="https://picsum.photos/800/450" alt="Lorem Ipsum" class="landscape">
            </div>
         </div>
         <div class="super-text-media-item__text">
            <h3 class="super-text-media-item__title  hyphenate">Film Titel</h3>
         </div>
      </div>

      <div class="super-text-media-item super-text-media-item--small element--padding-unten2 add-gradient add-gradient--visible">
         <div class="super-text-media-item__media">
            <div class="video-player-wrap">
               <button class="video-player__play-button"></button>
               <img src="https://picsum.photos/1600/900" alt="Lorem Ipsum" class="landscape">
            </div>
         </div>
         <div class="super-text-media-item__text">
            <h3 class="super-text-media-item__title  hyphenate">Film Titel</h3>
         </div>
      </div>


   </div>






   <div class="element element--fullbleed element--abstand-unten2 element--abstand-oben2 multiteaser-element">
     <div class="multiteaser-item">
       <div class="multiteaser__header">Am gleichen Abend</div>
       <div class="multiteaser__content" style="background: #FFE3E9">
         <div class="multiteaser__media">
           <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
         </div>
         <div class="multiteaser__text-wrap">
           <div class="multiteaser__topline"> topline</div>
           <div class="multiteaser__title">Title Lorem Ipsum</div>
           <div class="multiteaser__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
         </div>
     </div>
     </div>
 </div>




<br><br> -->

<div class="element element--fullbleed element--abstand-unten2 element--abstand-oben2 multiteaser-element">
  <div class="multiteaser-item">
    <div class="multiteaser__header">Am gleichen Abend</div>
    <div class="multiteaser__content" style="background: #FFE3E9">
      <div class="multiteaser__media">
        <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
      </div>
      <div class="multiteaser__text-wrap">
        <div class="multiteaser__topline"> topline</div>
        <div class="multiteaser__title">Title Lorem Ipsum</div>
        <div class="multiteaser__text"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>
      </div>
  </div>
  </div>
  <div class="multiteaser-item">
    <div class="multiteaser__header"></div>
    <div class="multiteaser__content" style="background: #FFE3E9">
      <div class="multiteaser__media">
        <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
      </div>
      <div class="multiteaser__text-wrap">
        <div class="multiteaser__topline"> topline</div>
        <div class="multiteaser__title">Title Lorem Ipsum</div>
        <div class="multiteaser__text"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>
      </div>
  </div>
  </div>


</div>




<br><br>

<div class="element element--fullbleed element--abstand-unten2 element--abstand-oben2 multiteaser-element">
  <div class="multiteaser-item multiteaser-item--accordion">
    <div class="multiteaser__header">Am gleichen Abend</div>
    <div class="multiteaser__content" style="background: #FFE3E9">
      <div class="multiteaser__media">
        <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
      </div>
      <div class="multiteaser__text-wrap">
        <div class="multiteaser__topline"> 19.7.2019 <span class="icon-separator"></span> Film</div>
        <div class="multiteaser__title">Title Lorem Ipsum</div>
        <div class="multiteaser__text"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>
      </div>
      <!-- accordion braucht button -->
      <div class="multiteaser__toggle-btn">
          <button aria-label="Read more"></button>
  </div>

  </div>
  </div>
  <div class="multiteaser-item">
    <div class="multiteaser__header"></div>
    <div class="multiteaser__content" style="background: #FFE3E9">
      <div class="multiteaser__media">
        <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
      </div>
      <div class="multiteaser__text-wrap">
        <div class="multiteaser__topline"> topline</div>
        <div class="multiteaser__title">Title Lorem Ipsum</div>
        <div class="multiteaser__text"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>
      </div>
  </div>
  </div>


</div>


<br><br>
spalten<br><br>

<div class="element element--fullbleed element--abstand-unten2 element--abstand-oben2 multiteaser-element--row add-gradient">
  <div class="multiteaser-item">
    <div class="multiteaser__header">Am gleichen Abend</div>
    <div class="multiteaser__content" style="background: #FFE3E9">
      <div class="multiteaser__media">
        <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
      </div>
      <div class="multiteaser__text-wrap">
        <div class="multiteaser__topline"> topline</div>
        <div class="multiteaser__title">Title Lorem Ipsum</div>
        <div class="multiteaser__text"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>
      </div>
  </div>
  </div>
  <div class="multiteaser-item">
    <div class="multiteaser__header"></div>
    <div class="multiteaser__content" style="background: #FFE3E9">
      <div class="multiteaser__media">
        <img src="https://picsum.photos/900/600" alt="Lorem Ipsum">
      </div>
      <div class="multiteaser__text-wrap">
        <div class="multiteaser__topline"> topline</div>
        <div class="multiteaser__title">Title Lorem Ipsum</div>
        <div class="multiteaser__text"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></div>
      </div>
  </div>
  </div>


</div>


</main>
<?php include_once("../../functions/footer.php"); ?>
