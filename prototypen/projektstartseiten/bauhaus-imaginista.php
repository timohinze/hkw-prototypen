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
           <img src="https://picsum.photos/800/450">
           <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
        </figure>
     </div>
     <div class="slideshow-element__slide">
        <figure class="slideshow-element__media">
           <img src="https://picsum.photos/1600/900">
           <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
        </figure>
     </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://picsum.photos/800/450">
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

   <!-- Custom Buttons -->
        <button class="slideshow-button slideshow-prev-next-button previous" type="button" aria-label="Previous">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 15.3 100" style="enable-background:new 0 0 15.3 100;" xml:space="preserve">
          	<polygon points="13.4,100 0,50 13.4,0 15.3,0.5 2.1,50 15.3,99.5 	"/>
          </svg>

       </button>

       <button class="slideshow-button slideshow-prev-next-button next" type="button" aria-label="Next">
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 15.3 100" style="enable-background:new 0 0 15.3 100;" xml:space="preserve">
            <polygon points="1.9,0 15.3,50 1.9,100 0,99.5 13.2,50 0,0.5 "/>
         </svg>

       </button>

</div>



 <?php linkrail($linkrail); ?>

<?php show_topline_element("../../content/programm/projekte/bauhaus-imaginista/topline.txt"); ?>

<?php show_title_element("../../content/programm/projekte/bauhaus-imaginista/title.txt"); ?>

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
  <li>L??szl?? Moholy-Nagy</li>
  <li>Wendelien van Oldenborgh</li>
  <li>H??lio Oiticica</li>
  <li>The Otolith Group</li>
  <li>Lygia Pape</li>
  <li>Paulo Tavares</li>
  <li>Iwao Yamawak</li>
  </ul>
</div>





<style>
</style>



<div class="element element--padding-left slideshow-element medien-slideshow-element">
   <h2 class="slideshow-element__titel">Querformate: max-width: 61vw, max-height 77vh <br>Hochformate/Quadrate: max-width 40.666vw, max-height 77vh</h2>
   <div class="slideshow-element__slideshow">
     <div class="slideshow-element__slide">
        <figure class="slideshow-element__media">
           <img src="../../assets/img/university_of_ife_in_ile_ife_nigeria.jpg">

           <figcaption>University of Ife in Ile-Ife, Nigeria. Architekten: Arieh Sharon, Eldar Sharon. Foto: ?? Arieh Sharon digital archive</figcaption>
        </figure>
     </div>
     <div class="slideshow-element__slide">
        <figure class="slideshow-element__media">
           <img src="../../assets/img/anja_kirschner_pattern_0203.jpg">

           <figcaption>Angolan Instruments for Sale, Salvador da Bahia, 2018. Foto: Satch Hoyt Courtesy of the artist</figcaption>
        </figure>
     </div>

     <div class="slideshow-element__slide">
        <figure class="slideshow-element__media">
           <img src="../../assets/img/nicholas_grafia_times_new_roman.jpg">
           <figcaption> Nicholas Grafia. Times New Roman (As Page Turning As Eye Opening), 2020.  Courtesy Nicholas Grafia und Peres Projects, Berlin
           </figcaption>
        </figure>
     </div>
     <div class="slideshow-element__slide">
       <figure class="slideshow-element__media">
         <div class="video-player-wrap">
            <button class="video-player__play-button"></button>
            <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/Bildschirmfoto 2021-08-27 um 15.22.55.png" alt="Lorem Ipsum" class="landscape">
        </div>
        <figcaption>Figcaption + Iframes?</figcaption>
        </figure>
      </div>



      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
            <img src="../../assets/img/aristilde_paz_kirby_the_art_of_picking.jpg">
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://picsum.photos/900/600" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>
      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://picsum.photos/600/600" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://picsum.photos/600/900" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://hkw.de/i/etjbS5Z4kSEA5mvDn_SskVxDdhcdTR0LBw0Fs6cG9FI/rs:fit:1280:960/g:fp:0.2:0.44/bG9jYWw6Ly8vbWVkaWEvYmlsZGVyLzIwMjIvYWxhbmlzX29ib21zYXdpbi9hbGFuaXNfb2JvbXNhd2luX3NsZWVwaW5nX2R1cmluZ190aGVfb2thX2NyaXNpcy5qcGc=" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://hkw.de/i/SLuhxewGMIc-r7M4tmJl7GAVZI3bKeQszTkDzWG2kF8/rs:fit:1280:960/bG9jYWw6Ly8vbWVkaWEvYmlsZGVyLzIwMjAvbmV3X2FscGhhYmV0X3NjaG9vbF8xL2RpbG8uanBn" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://hkw.de/i/EixhaEUsWcCkdgb_QE9UWdbjbZZoLz7R75aJ3zX-49s/rs:fit:1280:960/bG9jYWw6Ly8vbWVkaWEvYmlsZGVyL3B1Ymxpa2F0aW9uZW5fMS9wdWJsaWthdGlvbmVuXzIwMjIvZWluZV9hcnRfd2VsdGtyaWVnLmpwZw==" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>

      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <img src="https://picsum.photos/600/1000" >
            <figcaption>Lorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor EstLorem Ipsum Dolor Est</figcaption>
         </figure>
      </div>


      <div class="slideshow-element__slide">
         <figure class="slideshow-element__media">
           <div class="vimeo-embed" style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/70591644?h=b8c796fff8&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

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
       'titel' => "bauhaus reloaded ??? Sch??ler*innen gestalten Zukunft",
       'untertitel' => "Schreibwerkstatt f??r Erwachsene",
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




<ul class="element element--full-width element--abstand-oben2 ressourcen-teaser-item-element">
        <li class="teaser-item width-33 add-gradient color9">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/media/de/bilder/publikationen_1/publikationen_2019/cover_bauhaus_imaginista.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                <h2 class="teaser-item__topline">Publikation </h2>
                 <h2 class="teaser-item__title hyphenate">bauhaus imaginista </h2>
                 <p> bauhaus imaginista. Die globale Rezeption bis heute verfolgt die internationale Wirkungs- und Rezeptionsgeschichte von Praxis und P??dagogik des Bauhaus vor dem Hintergrund gro??er geopolitischer Ver??nderungen im 20. Jahrhundert.  </p>
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
