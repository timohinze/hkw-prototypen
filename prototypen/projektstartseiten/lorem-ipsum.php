<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>
<?php include_once("../../functions/linkrail.php"); ?>


<?php
$linkrail = array (
  array(
    "name" => "Lorem Ipsum Projekt",
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
  )
);
?>

<figure class="element image-element element--fullbleed header-image"><img class="image-element__img" src="https://supercomputerstudio.com/clients/hkw-relaunch/content/programm/projekte/lorem-ipsum/naoya_hatakeyama_slow_glass_066_imgsize_buehne.jpeg"><figcaption class="image-element__caption">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</figcaption></figure>

<?php linkrail($linkrail); ?>

<?php show_topline_element("../../content/programm/projekte/lorem-ipsum/topline.txt"); ?>

<?php show_title_element("../../content/programm/projekte/lorem-ipsum/title.txt"); ?>

<?php show_subhead_element("../../content/programm/projekte/lorem-ipsum/subhead.txt"); ?>


<?php show_service_info_element("../../content/programm/projekte/lorem-ipsum/service-info.txt"); ?>

<?php show_two_column_element("../../content/programm/projekte/lorem-ipsum/two-column.txt"); ?>



<div class="element element--rand-oben super-text-media-item super-text-media-item">
   <div class="super-text-media-item__media">
      <div class="video-player-wrap">
         <button class="video-player__play-button"></button>
         <img src="https://picsum.photos/800/450" alt="Lorem"/>
      </div>
   </div>
   <div class="super-text-media-item__text">
      <p class="teaser-item__topline">30. Juni <span class="icon-separator"></span> Lesungen, Gespräche</p>
      <h2 class="super-text-media-item__title  hyphenate">Lorem Ipsum Dolor Est</h2>
      <p> Lorem Ipsum  Dolor sit amet</p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <p><a href="#">Mehr Informationen</a></p>
      <p><a class="link-button" href="#">Mediathek öffnen</a></p>
   </div>
</div>

<?php show_two_column_element("../../content/programm/projekte/lorem-ipsum/two-text.txt"); ?>

<div class="element super-text-media-item super-text-media-item--small">
   <div class="super-text-media-item__media">
      <div class="video-player-wrap">
         <button class="video-player__play-button"></button>
         <img src="https://picsum.photos/800/450" alt="Lorem"/>
      </div>
   </div>
   <div class="super-text-media-item__text">
      <p class="teaser-item__topline">30. Juni <span class="icon-separator"></span> Lesungen, Gespräche</p>
      <h2 class="super-text-media-item__title  hyphenate">Lorem Ipsum Dolor Est</h2>
      <p> Lorem Ipsum  Dolor sit amet</p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <p><a href="#">Mehr Informationen</a></p>
      <p><a class="link-button" href="#">Mediathek öffnen</a></p>
   </div>
</div>


<?php show_two_column_element("../../content/programm/projekte/lorem-ipsum/two-image.txt"); ?>


<div class="element element--rand-oben list-element">
  <h2 class="list-element__title">Mit Arbeiten von</h2>
  <ul class="list-element__list list-element__list--3-spaltig">
  <li>Maxi Musterfrau</li>
  <li><a href="#">Max Mustermann</a></li>
  <li>Maxi Musterfrau</li>
  <li><a href="#">Maxi Musterfrau</a></li>
  <li>Maxi Musterfrau</li>
  </ul>
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


<ul class="element element--full-width ressourcen-teaser-item-element">
        <li class="teaser-item width-33">
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
        <li class="teaser-item width-33">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/mediathek/hkw/_default/assets/000/069/884/69884_m_bauhaus-imaginista-ansicht-7-jpg_4slnfh.jpg" alt="Lorem Ipsum" >
              </div>
              <div class="teaser-item__text">
                 <h2 class="teaser-item__title hyphenate">Lorem Ipsum Dolor Est</h2>
                 <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  </p>
                 <p><a href="#">Call For Action</a></p>

              </div>
        </li>
        <li class="teaser-item width-33">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/media/bilder/2019/bauhaus_imaginista_1/ausstellungsguide_bauhaus_imaginista_imgsize_S.png" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <h2 class="teaser-item__title hyphenate">Ausstellungsguide</h2>
                 <p><a href="#">Download PDF</a></p>
              </div>
        </li>

     </ul>

     <ul class="element element--fullbleed element--abstand-unten2 teaser-item-element">
             <li class="teaser-item add-gradient width-50 ">
                <a href="#">
                   <div class="teaser-item__media">
                      <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/terror_contagion_forensic_architecture_2021.jpg" alt="Lorem Ipsum">
                   </div>
                   <div class="teaser-item__text">
                      <p class="teaser-item__topline">23. September <span class="icon-separator"></span> Präsentation: Gespräche und Screenings</p>
                      <h2 class="teaser-item__title hyphenate">Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung</h2>
                      <p>Mit Forensic Architecture, ECCHR, Laura Poitras, Edward Snowden u.v.a. Präsentation: Gespräche und Screenings</p>
                      <p> Wie kann eine Spyware Staatsterrorismus ermöglichen? Forensic Architecture u. a. präsentieren im HKW erstmals eine neue Untersuchung zur globalen Landschaft der Cyber-Überwachung von Menschenrechtler*innen der Öffentlichkeit – und zeigen damit, wie die Arbeit kollaborativer Recherchenetzwerke in der Praxis funktioniert. Mit Laura Poitras, Eyal Weizman, Edward Snowden u.v.a. </p>
                   </div>
                </a>
             </li>
             <li class="teaser-item add-gradient color2 width-50 ">
                <a href="#">
                   <div class="teaser-item__media">
                      <img src="https://www.hkw.de/media/bilder/2021/newalphabetschool/maimuna_arafam.jpg" alt="Lorem Ipsum">
                   </div>
                   <div class="teaser-item__text">
                      <p class="teaser-item__topline">5. Juli <span class="icon-separator"></span> Online-Programm: Vortrag und Screenings</p>
                      <h2 class="teaser-item__title hyphenate">New Alphabet School: #Survivance</h2>
                      <p> With Filipa César, Elizabeth Povinelli, Karrabing Film Collective and others</p>
                      <p> Inwiefern kann Kreativität Gewalt abwenden? Bei der Ausgabe der New Alphabet School in Porto geht es in Vorträgen und Screenings um Überleben, Sorge tragen und Widerstand. Die Online-Workshops wollen individuelle Resilienzen zu einer widerständigen Kraft bündeln, Gegen-Monumente schaffen oder transnational solidarisches Kino entdecken. </p>
                   </div>
                </a>
             </li>
             <li class="teaser-item add-gradient color4 width-50 ">
                <a href="#">
                   <div class="teaser-item__media">
                      <img src="https://hkw.de/media/bilder/2021/kosmoskopien/nicholas_bussmann_wanderduenen_ausstellungsansicht_imgsize_buehne.jpg" alt="Lorem Ipsum">
                   </div>
                   <div class="teaser-item__text">
                      <p class="teaser-item__topline">ab 27. August <span class="icon-separator"></span> Ausstellung</p>
                      <h2 class="teaser-item__title hyphenate">Kosmoskopien</h2>
                      <p> von Nicholas Bussmann</p>
                      <p> Alle Politik und gesellschaftliche Praxis ist eine Fortsetzung der Musik mit anderen Mitteln. So ließe sich die Herangehensweise des Künstlers und Musikers Nicholas Bussmann beschreiben. Im HKW lädt Bussmann zur Mitwirkung an seinen vielschichtigen Versuchsanordnungen zu Komposition, Ritualistik und Polyphonie von Gesellschaft ein</p>
                   </div>
                </a>
             </li>
             <li class="teaser-item add-gradient color3 width-50 ">
                <a href="#">
                   <div class="teaser-item__media">
                      <img src="https://hkw.de/media/bilder/2021/das_neue_alphabet_publikationsreihe/das_neue_alphabet_publikationsreihe_01_imgsize_buehne.jpg" alt="Lorem Ipsum">
                   </div>
                   <div class="teaser-item__text">
                      <p class="teaser-item__topline">Publikationsreihe: Das neue alphabet</p>
                      <h2 class="teaser-item__title hyphenate">Band 6: Carrier Bag Fiction</h2>
                      <p> Wie ist die Welt der Zeichen mit der Welt der Dinge und Handlungen verbunden? Im neuen Band dient Ursula K. Le Guins Carrier Bag Theory of Fiction als Mittel gegen Entfremdung. Die Beiträge von Jenna Sutela, Enis Maci, Sophia Al-Maria u. a. begleiten Le Guins Essay und bilden ein Versuchslabor für neue Alphabete. </p>
                   </div>
                </a>
             </li>
             <li class="teaser-item add-gradient color7 width-50 ">
                <a href="#">
                   <div class="teaser-item__media">
                      <img src="https://www.hkw.de/media/bilder/2021/newalphabetschool/maimuna_arafam.jpg" alt="Lorem Ipsum">
                   </div>
                   <div class="teaser-item__text">
                      <p class="teaser-item__topline"> 5. Juli <span class="icon-separator"></span> Online-Programm: Vortrag und Screenings</p>
                      <h2 class="teaser-item__title hyphenate">New Alphabet School: #Survivance</h2>
                      <p>With Filipa César, Elizabeth Povinelli, Karrabing Film Collective and others</p>
                      <p> Inwiefern kann Kreativität Gewalt abwenden? Bei der Ausgabe der New Alphabet School in Porto geht es in Vorträgen und Screenings um Überleben, Sorge tragen und Widerstand. Die Online-Workshops wollen individuelle Resilienzen zu einer widerständigen Kraft bündeln, Gegen-Monumente schaffen oder transnational solidarisches Kino entdecken. </p>
                   </div>
                </a>
             </li>
             <li class="teaser-item add-gradient color8 width-50 ">
                <a href="#">
                   <div class="teaser-item__media">
                      <img src="https://www.hkw.de/media/bilder/2021/bib_audiowalk/campus_hannah_hoech.jpg" alt="Lorem Ipsum">
                   </div>
                   <div class="teaser-item__text">
                      <p class="teaser-item__topline">Audiowalks</p>
                      <h2 class="teaser-item__title hyphenate">Betonwalks</h2>
                      <p> Auf vier Spaziergängen entlang von acht Schulen in Lichtenberg, Kreuzberg, Neukölln und im Märkischen Viertel lassen sich die Schularchitekturen und die Perspektiven der Schüler*innen auf ihre Lernorte erkunden: von vergangenen Utopien über Fantasiereisen bis zum Schulalltag heute. </p>
                   </div>
                </a>
             </li>

          </ul>



          <?php show_text_element("../../content/programm/projekte/lorem-ipsum/text.txt"); ?>


        <ul class="element element--fullbleed element--abstand-unten2 teaser-item-element">
        <li class="teaser-item add-gradient color4 width-33">
           <a href="#">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/media/bilder/2021/kosmoskopien/nicholas_bussmann_wanderduenen_ausstellungsansicht_imgsize_buehne.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <p class="teaser-item__topline">ab 27. August <span class="icon-separator"></span> Ausstellung</p>
                 <h2 class="teaser-item__title hyphenate">Kosmoskopien</h2>
                 <p> von Nicholas Bussmann</p>
                 <p> Alle Politik und gesellschaftliche Praxis ist eine Fortsetzung der Musik mit anderen Mitteln. So ließe sich die Herangehensweise des Künstlers und Musikers Nicholas Bussmann beschreiben. Im HKW lädt Bussmann zur Mitwirkung an seinen vielschichtigen Versuchsanordnungen zu Komposition, Ritualistik und Polyphonie von Gesellschaft ein</p>
              </div>
           </a>
        </li>
        <li class="teaser-item add-gradient color3 width-33">
           <a href="#">
              <div class="teaser-item__media">
                 <img src="https://hkw.de/media/bilder/2021/das_neue_alphabet_publikationsreihe/das_neue_alphabet_publikationsreihe_01_imgsize_buehne.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <p class="teaser-item__topline">Publikationsreihe: Das neue alphabet</p>
                 <h2 class="teaser-item__title hyphenate">Band 6: Carrier Bag Fiction</h2>
                 <p> Wie ist die Welt der Zeichen mit der Welt der Dinge und Handlungen verbunden? Im neuen Band dient Ursula K. Le Guins Carrier Bag Theory of Fiction als Mittel gegen Entfremdung. Die Beiträge von Jenna Sutela, Enis Maci, Sophia Al-Maria u. a. begleiten Le Guins Essay und bilden ein Versuchslabor für neue Alphabete. </p>
              </div>
           </a>
        </li>
        <li class="teaser-item add-gradient color7 width-33">
           <a href="#">
              <div class="teaser-item__media">
                 <img src="https://www.hkw.de/media/bilder/2021/newalphabetschool/maimuna_arafam.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <p class="teaser-item__topline"> 5. Juli <span class="icon-separator"></span> Online-Programm: Vortrag und Screenings</p>
                 <h2 class="teaser-item__title hyphenate">New Alphabet School: #Survivance</h2>
                 <p>With Filipa César, Elizabeth Povinelli, Karrabing Film Collective and others</p>
                 <p> Inwiefern kann Kreativität Gewalt abwenden? Bei der Ausgabe der New Alphabet School in Porto geht es in Vorträgen und Screenings um Überleben, Sorge tragen und Widerstand. Die Online-Workshops wollen individuelle Resilienzen zu einer widerständigen Kraft bündeln, Gegen-Monumente schaffen oder transnational solidarisches Kino entdecken. </p>
              </div>
           </a>
        </li>
        <li class="teaser-item add-gradient color8 width-33">
           <a href="#">
              <div class="teaser-item__media">
                 <img src="https://www.hkw.de/media/bilder/2021/bib_audiowalk/campus_hannah_hoech.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <p class="teaser-item__topline">Audiowalks</p>
                 <h2 class="teaser-item__title hyphenate">Betonwalks</h2>
                 <p> Auf vier Spaziergängen entlang von acht Schulen in Lichtenberg, Kreuzberg, Neukölln und im Märkischen Viertel lassen sich die Schularchitekturen und die Perspektiven der Schüler*innen auf ihre Lernorte erkunden: von vergangenen Utopien über Fantasiereisen bis zum Schulalltag heute. </p>
              </div>
           </a>
        </li>
        <li class="teaser-item add-gradient color1 width-33">
           <a href="#">
              <div class="teaser-item__media">
                 <img src="https://www.hkw.de/media/bilder/2021/bildungsschock_1/austellungsansichten_bildungsschock/bildungsschock_ausstellungsansicht_02_imgsize_buehne.jpg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <p class="teaser-item__topline">Bis 11. Juli <span class="icon-separator"></span> Führungen</p>
                 <h2 class="teaser-item__title hyphenate">Bildungsschock: Vermittlung</h2>
                 <p> Von Typenbauten zu Homeschooling – Bei der Expertinnenführung Plattenbau und Polytechnik geht es um emanzipatorische Momente von Bildung in der DDR. Im Workshop Bewegungen bilden können Teilnehmende die Bildungsarchitektur des HKW körperlich erkunden. Die globale Bedeutung der Bildungsdebatten der 1960er und 1970er Jahre beleuchtet Kurator Tom Holert bei einer Führung durch die Ausstellung. </p>
              </div>
           </a>
        </li>
        <li class="teaser-item add-gradient color9 width-33">
           <a href="#">
              <div class="teaser-item__media">
                 <img src="https://newalphabetschool.hkw.de/wp-content/uploads/2021/08/WhatsApp-Image-2021-08-12-at-17.32.59-1.jpeg" alt="Lorem Ipsum">
              </div>
              <div class="teaser-item__text">
                 <p class="teaser-item__topline">Blog New Alphabet School</p>
                 <h2 class="teaser-item__title hyphenate">Surviving</h2>
                 <p> Wie wirkt sich die Pandemie auf das Leben im Gazastreifen aus? In seinem Blogbeitrag beschreibt der Co-Kurator der <i>#Transmitting</i>-Ausgabe Mahmoud Al-Shaer seine Gefühle angesichts der Ausbreitung des Virus um ihn herum.</p>
              </div>
           </a>
           <p><a href="https://newalphabetschool.hkw.de/" target="_blank" class="link-button link-button--small external-link">Öffne Blog</a></p>
        </li>
     </ul>




<?php include_once("../../functions/footer.php"); ?>
