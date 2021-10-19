<!-- 2021 10 15 -->
<!-- 2021 10 13 -->
<?php include_once("../../functions/header.php"); ?>

<style>
/* .scroll-buhne-item--visible .scroll-buhne-item__text2 {
    left: 0;
    right: 0;
    position: fixed;
    top: 50%;
    transform: translate(0, -50%);
    opacity: 1;
  } */

  .scroll-buhne-item--js-prepared .scroll-buhne-item__text2 {
    position: absolute;
        top: 100vh;
        transform: 0;
        left: 0;
        right: 0;
        background: antiquewhite;
        height: 100vh;
  }


  .scroll-buhne-item--visible .scroll-buhne-item__text2 {
      position: fixed;
    top: 0;
}

.hyphenate{
  hyphens: auto;
}

</style>

<main class="home">



   <!-- Scroll Bühne -->
   <!-- Evt Picture Element mit verschiedenen source Angaben für responsive Bildgrößen ?-->
   <ul class="scroll-buhne-element">
      <li class="scroll-buhne-item">
         <a href="#">
            <div class="scroll-buhne-item__visual">
               <img src="https://supercomputerstudio.com/clients/hkw-relaunch/templates/hkw-beispiel-bilder/terror_contagion_forensic_architecture_2021.jpg" alt="Lorem Ipsum"/>
            </div>
            <div class="scroll-buhne-item__text2">
               <h2 class="scroll-buhne-item__title balance-text hyphenate">Digital Violence  Investigative Commons</h2>
               <p class="scroll-buhne-item__subtitle balance-text hyphenate">Wie die NSO Group Staatsterror möglich macht</p>
               <p class="balance-text">Wie wird von privaten Unternehmen entwickelte Spyware für Staatsterror genutzt? Wer wird dabei gehackt und was sind die Konsequenzen? Welche ökonomische Logik steckt hinter der Ausweitung von Cyberüberwachung?</p>
               <p class="balance-text">Präsentation: Gespräche und Screenings <span class="icon-separator"></span> <span class="nobr"> Sa, 3.7.2021</span> <span class="icon-separator"></span><span class="nobr"> 19h&#8211;21h</span></p>
            </div>
         </a>
      </li>
      <li class="scroll-buhne-item">
         <a href="#">
            <div class="scroll-buhne-item__visual"><img src="https://hkw.de/media/bilder/2021/kosmoskopien/nicholas_bussmann_wanderduenen_ausstellungsansicht_imgsize_buehne.jpg" alt="Lorem Ipsum"/>
            </div>
            <div class="scroll-buhne-item__text2 balance-text">
               <h2 class="scroll-buhne-item__title balance-text hyphenate">Kosmos&shy;kopien<br> </h2>
               <p class="scroll-buhne-item__subtitle balance-text hyphenate">Ausstellung von Nicholas Bussmann</p>
               <p class="balance-text">Wie stehen Musik, soziale Praxis und Vergesellschaftung miteinander in Verbindung? Nicholas Bussmann lädt zur Mitwirkung an seinen vielschichtigen Versuchsanordnungen ein.</p>
               <p class="balance-text"><span class=" nobr">Ausstellung bis 19.9.</span> <span class="icon-separator"></span>  <span class=" nobr">	Performances 15.–17.9.</span></p>
            </div>
         </a>
      </li>
      <!-- Fokus Punkt via object position -->
      <li class="scroll-buhne-item">
         <a href="#">
            <div class="scroll-buhne-item__visual"><img style="object-position: 0 100%" src="https://hkw.de/media/bilder/2021/illiberal_arts/steve_reinke_the_natural_look_imgsize_buehne.jpg" alt="Lorem Ipsum"/>
            </div>
            <div class="scroll-buhne-item__text2">
               <h2 class="scroll-buhne-item__title balance-text hyphenate">Wie frei ist die Kunst im Kapitalismus?</h2>
               <p class="scroll-buhne-item__subtitle balance-text hyphenate">Illiberal Arts</p>
               <p class="balance-text">	Mit Beiträgen von Anne Imhof, Pauline Curnier Jardin, Ho Rui An, Karrabing Film Collective u.v.a..</p>
               <p class="balance-text">	Ausstellung, Performances, Workshops, Publikation <span class="icon-separator"></span>  <span class="nobr">11.9.–21.11.</span></p>
            </div>
         </a>
      </li>
      <li class="scroll-buhne-item">
         <a href="#">
            <div class="scroll-buhne-item__visual"><img src="https://www.hkw.de/media/bilder/2021/the_sound_of_distance/simon_keckeisen_the_sound_of_distance_imgsize_buehne.jpg" alt="Lorem Ipsum"/>
            </div>
            <div class="scroll-buhne-item__text2">
               <h2 class="scroll-buhne-item__title balance-text hyphenate">The Sound of Distance </h2>
               <p class="scroll-buhne-item__subtitle hyphenate balance-text ">Neue Ideen für Musik, Raum und Architektur Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung</p>
               <p class="balance-text">Wäre das HKW ein einziges großes Instrument – wie würde es klingen? Das viertägige Festival <i>The Sound of Distance</i> nimmt diese Frage ernst und sucht Antworten im erweiterten Resonanzraum. </p>
               <p class="balance-text">	Konzerte, Klanginstallationen, Talks <span class="icon-separator"></span>  <span class="nobr">21.–24.10.2021</span></p>
            </div>
         </a>
      </li>
   </ul>

</main>
<?php include_once("../../functions/footer.php"); ?>
