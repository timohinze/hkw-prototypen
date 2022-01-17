<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>

<?php get_header(); ?>



<style>
.press-list-item:first-of-type{
  border-top: 1px solid black;
  padding-top: 2rem;
}

.press-list-item:last-of-type{
  border-bottom: none;
  padding-top: 2rem;
}


.press-list-item{
  border-bottom: 1px solid black;
  padding-left: 25%;
  padding-right: 25%;
  padding-top: 1rem;
  padding-bottom: 2rem;
  margin-top: 1rem;
  margin-bottom: 1rem;
}

@media only screen and (max-width: 768px) {
	.press-list-item {
		padding-left: 1rem;
		padding-right: 1rem;
	}
}


.press-list-item__show-details{
  margin-bottom: 1.4rem;
}

.press-list-item__show-details a{
  text-decoration: underline;
}

.press-list-item__published-on{
  font-size: 0.8em;
}


.press-list-item__show-details a::after {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	content: " ";
}

.press-list-item a:not(.press-list-item__show-details a) {
	position: relative;
  z-index: 1;
}


</style>

<main class="press-list-page">

<div class="element title-element"><h1 class="">Pressemitteilungen</h1></div>


<div class="element element--fullbleed press-list-element">
  <div class="press-list-item">
    <h2 class="press-list-item__title">Die Ausstellung The Children Have to Hear Another Story – Alanis Obomsawin eröffnet am 23. Januar 2022
      The Children Have to Hear Another Story – Alanis Obomsawin
    </h2>

    <div class="press-list-item__show-details">
      <a href="#">Details anzeigen</a>
    </div>

    <div class="press-list-item__published-on">
      veröffentlicht am 29.10.2021
    </div>
  </div>


  <div class="press-list-item">
    <h2 class="press-list-item__title">Festival "Dear Future," am 18. & 19.11.
    </h2>

    <div class="press-list-item__show-details">
      <a href="#">Details anzeigen</a>
    </div>

    <div class="press-list-item__published-on">
      veröffentlicht am 29.10.2021
    </div>
  </div>

  <div class="press-list-item">
    <h2 class="press-list-item__title">"Cultures d’Avenir" - Student*innen in Frankreich, Spanien und Deutschland entwerfen ein Curriculum für die Zukunft
    </h2>

    <div class="press-list-item__show-details">
      <a href="#">Details anzeigen</a>
    </div>

    <div class="press-list-item__published-on">
      veröffentlicht am 29.10.2021
    </div>
  </div>

  <div class="press-list-item">
    <h2 class="press-list-item__title">Die Ausstellung The Children Have to Hear Another Story – Alanis Obomsawin eröffnet am 23. Januar 2022
      The Children Have to Hear Another Story – Alanis Obomsawin
    </h2>

    <div class="press-list-item__show-details">
      <a href="#">Details anzeigen</a>
    </div>

    <div class="press-list-item__published-on">
      veröffentlicht am 29.10.2021
    </div>
  </div>


  <div class="press-list-item">
    <h2 class="press-list-item__title">Festival "Dear Future," am 18. & 19.11.
    </h2>

    <div class="press-list-item__show-details">
      <a href="#">Details anzeigen</a>
    </div>

    <div class="press-list-item__published-on">
      veröffentlicht am 29.10.2021
    </div>
  </div>

  <div class="press-list-item">
    <h2 class="press-list-item__title">"Cultures d’Avenir" - Student*innen in Frankreich, Spanien und Deutschland entwerfen ein Curriculum für die Zukunft
    </h2>

    <div class="press-list-item__show-details">
      <a href="#">Details anzeigen</a>
    </div>

    <div class="press-list-item__published-on">
      veröffentlicht am 29.10.2021
    </div>
  </div>

</div>

</main>

<?php include_once("../../functions/footer.php"); ?>
