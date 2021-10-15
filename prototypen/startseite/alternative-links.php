<?php include_once("../../functions/header.php"); ?>

<style>
/* Aus dem Buch: Inclusive Design Patterns */
/* 	https://inclusive-components.design/cards/ */
/* https://heydon.github.io/inclusive-components-demos/cards-pseudo-content/ */
/* Kein umschließender Link */
/* Link steht in der Headline */
/* Mehrere Links pro Eintrag sind möglich */
/* Scroll Bühnen Bilder sind nicht mehr verlinkbar */
/* Man könnte auf mobile das after element entfernen, dann wäre wieder nur die h2 ein Link. Falls man das möchte */

.link-container{
position: relative;
}
.link-container a::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  outline: 2px solid yellow;
}

.link-container a:not(h2 a) {
position: relative;
  outline: 2px solid red;
  background: green;
}


</style>


      <main class="home">

        <!-- Scroll Bühne -->

        <!-- Oder Picture Element mit verschiedenen source Angaben für responsive Bildgrößen -->

        <ul class="scroll-buhne-element">
          <li class="scroll-buhne-item">
              <div class="scroll-buhne-item__visual">
                <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/terror_contagion_forensic_architecture_2021.jpg" alt="Lorem Ipsum"/>
              </div>

              <div class="scroll-buhne-item__text link-container">
                <h2 class="balance-text"> <a href="http://hkw.de">Digital Violence  Investigative Commons</a></h2>
                <p class="scroll-buhne-item__subtitle balance-text">Wie die NSO Group Staatsterror möglich macht</p>
                <p class="balance-text">Wie wird von privaten Unternehmen entwickelte Spyware für Staatsterror genutzt? Wer wird dabei gehackt und was sind die Konsequenzen? Welche ökonomische Logik steckt hinter der Ausweitung von Cyberüberwachung?</p>
                <p class="balance-text">Präsentation: Gespräche und Screenings <span class="icon-separator"></span> <span class="nobr"> Sa, 3.7.2021</span> <span class="icon-separator"></span><span class="nobr"> 19h&#8211;21h</span></p>
            </div>
        </li>

          <li class="scroll-buhne-item">
              <div class="scroll-buhne-item__visual"><img src="https://hkw.de/media/bilder/2021/kosmoskopien/nicholas_bussmann_wanderduenen_ausstellungsansicht_imgsize_buehne.jpg" alt="Lorem Ipsum"/>
              </div>

            <div class="scroll-buhne-item__text balance-text link-container">
              <h2 class="balance-text"><a href="http://hkw.de">Kosmos&shy;kopien</a> </h2>
              <p class="scroll-buhne-item__subtitle balance-text">Ausstellung von Nicholas Bussmann</p>
              <p class="balance-text">Wie stehen Musik, soziale Praxis und Vergesellschaftung miteinander in Verbindung? Nicholas Bussmann lädt zur Mitwirkung an seinen vielschichtigen Versuchsanordnungen ein.</p>
              <p class="balance-text"><span  class=" nobr">Ausstellung bis 19.9.</span> <span class="icon-separator"></span>  <span class=" nobr">	Performances 15.–17.9.</span></p>
            </div>
        </li>


          <li class="scroll-buhne-item">
            <div class="scroll-buhne-item__visual">
              <div class="">
      <video autoplay loop src="https://player.vimeo.com/external/456333322.hd.mp4?s=36c1ef08e6776bbd5a48da511cb6071210d7cb1f&amp;profile_id=175
      " preload="metadata" playsinline="" muted=""></video>
            </div>
            </div>
            <div class="scroll-buhne-item__text balance-text link-container">
              <h2 class="balance-text"><a href="http://hkw.de">CC: World</a></h2>
              <p class="balance-text">Es ist das Jahr 2020. Sars-CoV-2 erzeugt eine planetarische Gegenwart – und lässt wie ein Katalysator deren Ungleichheiten umso stärker hervortreten. </p>
      <p class="balance-text"><a href="http://google.com">Projektwebsite online ansehen</a></p>
            </div>
        </li>

      </ul>
<!-- Die Elemente nach der Scrollbühne müssen die Scrollbühne überlagern (z-index) -->

<!-- Super Teaser (Wording?) -->

<div class="super-teaser-element">

<div class="super-teaser-item add-gradient add-gradient--static color4 link-container">
  <div class="super-teaser-item__visual"> <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/slowglass.jpg" alt="Lorem Ipsum" /> </div>
  <div class="super-teaser-item__text ">
      <p class="teaser-item__topline">30.9.21&#8211; <span class="nobr">3.12.22</span> <span class="icon-separator"></span> Online-Archiv, Installation, Thementage</p>

    <h2><a href="http://hkw.de">Archiv der Flucht</a></h2>
    <p> Welche Formen des Erinnerns braucht es in heutigen Einwanderungs&shy;gesell&shy;schaften? Das Oral-History-Projekt betrachtet die Erinnerungen nach Deutschland migrierter Menschen als integralen Bestandteil deutscher Nachkriegs&shy;geschichte und bewahrt sie vor dem Vergessen und Verdrängen. <a style="text-decoration: underline" href="http://google.de">Zweiter Link</a> </p>
  </div>
</div>





</div>



<!-- Teaser mit Verläufen -->

<ul class="teaser-item-element">

  <li class="teaser-item add-gradient width-50 link-container">
      <div class="teaser-item__visual">
          <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/terror_contagion_forensic_architecture_2021.jpg" alt="Lorem Ipsum"/>
      </div>
      <div class="teaser-item__text">
          <p class="teaser-item__topline">23. September <span class="icon-separator"></span> Präsentation: Gespräche und Screenings</p>
          <h2 class="teaser-item__title"> <a href="http://hkw.de"> Digital Violence </a></h2>
          <p>Mit Forensic Architecture, ECCHR, Laura Poitras, Edward Snowden u.v.a. Präsentation: Gespräche und Screenings</p>
          <p> Wie kann eine Spyware Staatsterrorismus ermöglichen? Forensic Architecture u. a. präsentieren im HKW erstmals eine neue Untersuchung zur globalen Landschaft der Cyber-Überwachung von Menschenrechtler*innen der Öffentlichkeit – und zeigen damit, wie die Arbeit kollaborativer Recherchenetzwerke in der Praxis funktioniert. Mit Laura Poitras, Eyal Weizman, Edward Snowden u.v.a. <a style="text-decoration: underline" href="http://google.de">Zweiter Link</a> </p>
      </div>
  </li>


  <li class="teaser-item add-gradient color2 width-50 link-container">
    <a href="#">
      <div class="teaser-item__visual">
         <img src="https://www.hkw.de/media/bilder/2021/newalphabetschool/maimuna_arafam.jpg" alt="Lorem Ipsum"/>
       </div>
       <div class="teaser-item__text">
         <p class="teaser-item__topline">5. Juli <span class="icon-separator"></span> Online-Programm: Vortrag und Screenings</p>
          <h2 class="teaser-item__title"><a href="http://hkw.de">New Alphabet School: #Survivance</a></h2>
          <p> With Filipa César, Elizabeth Povinelli, Karrabing Film Collective and others</p>
          <p> Inwiefern kann Kreativität Gewalt abwenden? Bei der Ausgabe der New Alphabet School in Porto geht es in Vorträgen und Screenings um Überleben, Sorge tragen und Widerstand. Die Online-Workshops wollen individuelle Resilienzen zu einer widerständigen Kraft bündeln, Gegen-Monumente schaffen oder transnational solidarisches Kino entdecken. <a style="text-decoration: underline" href="http://google.de">Zweiter Link</a> <a style="text-decoration: underline" href="http://tagesschau.de">Dritter Link</a> </p>

      </div>
    </a>
  </li>



</ul>

</main>

<?php include_once("../../functions/footer.php"); ?>
