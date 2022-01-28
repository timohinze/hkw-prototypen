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
    "classes" => "projektmenu__item--selected",
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
  ),
  array(
    "name" => "Lorem Ipsum Dolor",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Lorem Ipsum Dolor",
    "slug" => "",
    "classes" => "",
  ),
  array(
    "name" => "Lorem Ipsum Dolor",
    "slug" => "",
    "classes" => "",
  )
);
?>
<main class="projektstartseite-page">
<div class="element slideshow-element element--fullbleed header-slideshow">
   <div class="slideshow-element__slideshow">
      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
            <img src="https://supercomputerstudio.com/clients/hkw-relaunch/content/programm/projekte/bauhaus-imaginista/Bildschirmfoto%202021-06-16%20um%2013.18.51.png">
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>
      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
            <img src="https://www.hkw.de/media/bilder/2019/bauhaus_imaginista_1/university_of_ife_in_ile_ife_nigeria_imgsize_buehne.jpg">
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>
   </div>
</div>



 <?php linkrail($linkrail); ?>



 <style>
/*
 .neu-projektmenu-wrap::after{
   content: " ";
   bottom: 0;
   left: 0;
   right: 0;
   border-bottom: 1px solid green;
   width: 100%;
   z-index: 999999;
   position: absolute;
 } */

/* .neu-scrollable-menu{
  border-bottom: 1px solid blue;
} */

 .neu-projektmenu-wrap{
     margin: 0;
     /* border-bottom: 1px solid #000; */
 /*         font-size: 0; */

 box-shadow: inset 0 -1px 0 0 red;

     white-space: nowrap;
     background: white;
      position: sticky;
     top: 70px;
     background: white;
     z-index: 99;

     padding-left: 2rem;
     padding-right: 2rem;

 /*
     padding-left: 10px;
     padding-right: 10px;
 */


overflow-x: auto;
-webkit-overflow-scrolling: touch;
-ms-overflow-style: -ms-autohiding-scrollbar;
 }
 /*
 .projektmenu {
             font-size: 0;

 }
 */

 .neu-projektmenu-wrap .neu-item {
     display: inline;

         font-size: 0;



 margin-right: 2rem;
 /* margin-right: 20px; */
 }

    .neu-projektmenu-wrap .neu-item a{
 	    font-size: 20px;
      /* kein em / rem für fontsize */

      padding-top: 0.5rem;
      padding-bottom: 0.5rem;

       /* padding-top: 15px;
       padding-bottom: 15px; */

     color: inherit;
     text-decoration: none;
     display: inline-block;

 }

   .neu-item.aktiv a,
   .neu-item:hover a,
   .neu-item:focus a{
 /* 	    outdivne: none; */
       box-shadow: inset 0 -4px 0 0 blue;
 }

 </style>

<br><br><br>

 <nav class="neu-projektmenu-wrap">
 <div class="neu-scrollable-menu">
   <div class="neu-projektmenu">
     <div class="neu-item" ><a href="#">Lorem Ipsum</a></div>
     <div class="neu-item aktiv"><a href="#">Dolor Est</a></div>
     <div class="neu-item"><a href="#">Lorem Ipsum Dolor Est</a></div>

     <div class="neu-item"><a href="#">Lorem Ipsum</a></div>
     <div class="neu-item"><a href="#">Dolor Lorem ipsummm   olor Lorem ipsummm   olor Lorem ipsummm   olor Lorem ipsummm   olor Lorem ipsummmsdffdsdfsdsfdfsdsfdsfdfsolor Lorem ipsummm      Est</a></div>
     <div class="neu-item"><a href="#">Lorem Ipsum Dolor Est</a></div>
   </div>
 </div>
 </nav>

<script>
// scrollable menu flickity
 $( document ).ready(function() {

	 $('.neu-scrollable-menu').flickity({
          cellAlign: 'left',
          freeScroll: true,
          prevNextButtons: true,
          pageDots: false,
          contain: true,
          cellSelector: ".neu-item",
          groupCells: true,
          watchCSS: true,
});
	 
	 
const navs2 = document.querySelectorAll('.NOneu-scrollable-menu');
  for ( var i = 0, length = navs2.length; i < length; i++ ) {
    var nav2 = navs2[i];
       nav2.classList.add("scrollable-menu-flickity");
        new Flickity( nav2, {
          cellAlign: 'left',
          freeScroll: true,
          prevNextButtons: true,
          pageDots: false,
          contain: true,
          cellSelector: ".neu-item",
          groupCells: true,
          watchCSS: true,
        });

 }
});
</script>




<?php show_topline_element("../../content/programm/projekte/bauhaus-imaginista/topline.txt"); ?>

<?php show_title_element("../../content/programm/projekte/bauhaus-imaginista/title.txt"); ?>




<style>


	.neu-external-link{
    color: green;
    text-decoration: underline;
    background-image: url(https://de.wikipedia.org/w/resources/src/mediawiki.skinning/images/external-ltr.svg?59558);
    background-position: center right;
    background-repeat: no-repeat;
    padding-right: 1em;;
  background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166 166"><polygon fill="currentColor" points="83 26.8 65.7 61.8 27.1 67.4 55 94.7 48.5 133.2 83 115 117.5 133.2 111 94.7 138.9 67.4 100.3 61.8 83 26.8 83 26.8"/></svg>');
      background-position-y: top;
    background-position-y: -0.1em;
	margin-right: 0.1em;


    }

    .neu-external-link:hover{
	      background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166 166"><polygon fill="blue" points="83 26.8 65.7 61.8 27.1 67.4 55 94.7 48.5 133.2 83 115 117.5 133.2 111 94.7 138.9 67.4 100.3 61.8 83 26.8 83 26.8"/></svg>');

    }

</style>

<div class="element two-column-element " style="background: "><div class="two-column-element__column"><div class="project-abstract"><p class="abstract">
<a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a><a href="#" class="neu-external-link">Externer qLink</a>

</p>         </div></div><div class="two-column-element__column"><p><a href="#" class="neu-external-link">Externer qLink</a><i><a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>
<a href="#" class="neu-external-link">Externer qLink</a>

</p>
<h2><a href="#" class="neu-external-link">Externer qLink</a></h2>
<p>Der Titel bauhaus imaginista verweist auf den Imaginationsraum, den das Bauhaus öffnete, und die vielschichtigen Lesarten, die der Begriff bis heute birgt. Zwischen Archivmaterialien und zeitgenössischen Beiträgen übersetzt das Projekt historische Perspektiven in Fragen zur Gegenwart: Wie lässt sich heute im Sinne des Bauhauses Kultur als soziales Projekt neu denken? Welche Art von Institutionen braucht ein solches Projekt? Wie regt das Bauhaus noch heute visionäre Praktiken und Diskurse an? </p>
<p> Die Ausstellung reflektiert die künstlerische Erforschung von Handwerkstechniken, Materialitäten und Praktiken; untersucht, wie Konzepte des Bauhauses zur gesellschaftlichen Bedeutung von Gestaltung transformiert, angepasst oder auch in Frage gestellt wurden; und zeigt, wie der innovative Gebrauch von Medien am Bauhaus Kunst und Popkultur bis heute prägt. </p>
<p>Seit März 2018 entstanden Ausstellungen, Symposien und Workshops in Rabat, Hangzhou, New York, Kyoto und Tokio, Moskau, São Paulo, Lagos und Delhi in Zusammenarbeit mit den Goethe-Instituten und Partner*innen vor Ort. Im HKW entfaltet sich auf dieser Basis nun eine Gesamtschau von bauhaus imaginista. </p>
<p>
</p></div></div>




<?php show_subhead_element("../../content/programm/projekte/lorem-ipsum/subhead.txt"); ?>


<?php show_service_info_element("../../content/programm/projekte/bauhaus-imaginista/service-info.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/bauhaus-imaginista/introduction.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/bauhaus-imaginista/kuratiert-von.txt"); ?>



<div class="element element--rand-oben list-element">
  <h2 class="list-element__title">Mit Arbeiten von</h2>
  <ul class="list-element__list list-element__list--3-spaltig">
  <li>Anni Albers</li>
  <li><a href="#">Gertrud Arndt</a></li>
  <li>Kader Attia</li>
  <li><a href="#">Lena Bergner</a></li>
  <li>Nandalal Bose</li>
  <li>Ahmed Cherkaoui</li>
  <li>Alice Creischer</li>
  <li>Zvi Efrat</li>
  <li>Luca Frei</li>
  <li>Walter Gropius</li>
  <li><a href="#">Doreen Mende</a></li>
  <li>Hannes Meyer</li>
  <li>Takehiko Mizutani</li>
  <li>László Moholy-Nagy</li>
  <li>Wendelien van Oldenborgh</li>
  <li>Hélio Oiticica</li>
  <li>The Otolith Group</li>
  <li>Lygia Pape</li>
  <li>Paulo Tavares</li>
  <li>Iwao Yamawak</li>
  </ul>
</div>




<div class="element element--padding-left slideshow-element">
   <h2 class="slideshow-element__titel">Fotos</h2>
   <div class="slideshow-element__slideshow">
      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
            <img src="https://www.hkw.de/media/bilder/2019/bauhaus_imaginista_1/university_of_ife_in_ile_ife_nigeria_imgsize_buehne.jpg">
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>
      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
            <img src="https://www.hkw.de/media/bilder/2019/bauhaus_imaginista_1/the_otolith_group_o_horizon_imgsize_M.jpg">
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>
   </div>
</div>



<div class="calendar calendar--projektseite">
  <h2 class="calendar__header">Programm bauhaus imaginista</h2>

<?php
$calendar_posts = array(
    'Freitag 15.03.' => array(

     array(
       'schwerpunktprojekt' => false,
       'schwerpunktprojekt-titel' => "",
       'projektfarbe' => "#FFE3E9",
       'datum' => "",
       'zeit' => "12-20h",
       'ort' => "Ausstellungshalle",
       'bild' => "https://www.hkw.de/media/bilder/2019/bauhaus_imaginista_1/kurt_schwerdtfeger_reflektorische_farblichtspiele_imgsize_S.jpg",
       'abgesagt' => false,

       'topline' => "Topline Lorem Ipsum",
       'titel' => "bauhaus imaginista",
       'untertitel' => "",
       'typ' => "Ausstellung, Konferenzen",

       'sprache' => "Sprache Lorem",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "",
       'freiereintritt' =>false,
       'eintritt' =>"Eintrittspreise Lorem",

     ),

     array(
       'schwerpunktprojekt' => false,
       'schwerpunktprojekt-titel' => "",
       'projektfarbe' => "#FFE3E9",
       'datum' => "",
       'zeit' => "15h",
       'ort' => "Hirschfeld Bar",
       'bild' => "https://www.hkw.de/media/bilder/2019/bauhaus_imaginista_1/schulprojekt_bauhaus_reloaded_imgsize_M.jpg",
       'abgesagt' => false,

       'topline' => "bauhaus imaginista",
       'titel' => "bauhaus reloaded – Schüler*innen gestalten Zukunft",
       'untertitel' => "Schreibwerkstatt für Erwachsene",
       'typ' => "Typ lorem",
       'sprache' => "Auf Deutsch und Englisch",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "https://tickets.kbb.eu/hkw.webshop/webticket/bestseatselect?eventId=12388",
       'freiereintritt' =>true,
       'eintritt' =>"Eintritt frei, mit Einlassticket",

     ),

 ),

     'Samstag 11.05.' => array(
     array(
       'schwerpunktprojekt' => false,
       'schwerpunktprojekt-titel' => "",
       'projektfarbe' => "#FFE3E9",
       'datum' => "",
       'zeit' => "11h",
       'ort' => "Vortragssaal",
       'bild' => "https://www.hkw.de/media/bilder/2019/bauhaus_imaginista_1/university_of_ife_in_ile_ife_nigeria_imgsize_M.jpg",
       'abgesagt' => false,

       'topline' => "bauhaus imaginista",
       'titel' => "A New School",
       'untertitel' => "Untertitel Lorem Ipsum",
       'typ' => "Konferenz: Panels",

       'sprache' => "Sprache Lorem",
       'information' => "Weitere Informationen Ipsum",
       'ticketlink' => "",
       'freiereintritt' =>false,
       'eintritt' =>"Eintrittspreise Lorem",

       )
     )
);

show_kalender_element($calendar_posts);
?>

  <div style="background:#FFE3E9" class="calendar_footer"><a class="to-the-right-link"  href="#">Alle Termine</a></div>

</div>

<div class="element element--padding-left slideshow-element ">
   <h2 class="slideshow-element__titel">Videos</h2>
   <div class="slideshow-element__slideshow">
      <div class="slideshow-element__slide">
         <div class="slideshow-element__media">
            <div class="video-player-wrap"><button class="video-player__play-button"></button> <img src="https://film.kbb.eu/wtu/embed/preview/70496"></div>
         </div>
         <div class="slideshow-element__text">
            <h2>Die Gründung neuer Lernorte (Englisch)</h2>
            <p><a href="#">Mehr zum Video</a></p>
         </div>
      </div>
      <div class="slideshow-element__slide">
         <div class="slideshow-element__media">
            <div class="video-player-wrap"><button class="video-player__play-button"></button><img src="https://film.kbb.eu/wtu/embed/preview/70489"></div>
         </div>
         <div class="slideshow-element__text">
            <h2>Einführung: A New School (Englisch)</h2>
            <p><a href="#">Mehr zum Video</a></p>
         </div>
      </div>
   </div>
</div>


<ul class="element element--full-width element--abstand-oben2 ressourcen-teaser-item-element">
        <li class="teaser-item width-33 add-gradient color9">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/media/de/bilder/publikationen_1/publikationen_2019/cover_bauhaus_imaginista.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                <h2 class="teaser-item__topline">Publikation </h2>
                 <h2 class="teaser-item__title hyphenate">bauhaus imaginista </h2>
                 <p> bauhaus imaginista. Die globale Rezeption bis heute verfolgt die internationale Wirkungs- und Rezeptionsgeschichte von Praxis und Pädagogik des Bauhaus vor dem Hintergrund großer geopolitischer Veränderungen im 20. Jahrhundert.  </p>
                 <p><a href="#">Zur Publikation</a></p>
              </div>
        </li>
        <li class="teaser-item width-33 add-gradient color9">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/mediathek/hkw/_default/assets/000/069/884/69884_m_bauhaus-imaginista-ansicht-7-jpg_4slnfh.jpg" alt="Lorem Ipsum" >
              </div>
              <div class="teaser-item__text">
                 <h2 class="teaser-item__title hyphenate">Lorem Ipsum Dolor Est</h2>
                 <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  </p>
                 <p><a href="#">Call For Action</a></p>

              </div>
        </li>
        <li class="teaser-item width-33 add-gradient color9">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/media/bilder/2019/bauhaus_imaginista_1/ausstellungsguide_bauhaus_imaginista_imgsize_S.png" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <h2 class="teaser-item__title hyphenate">Ausstellungsguide</h2>
                 <p><a class="download-link" href="#">Download PDF</a></p>
              </div>
        </li>

     </ul>


</main>
     <?php include_once("../../functions/footer.php"); ?>
