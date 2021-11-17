<style>
.project-item{
  display: flex;
  padding: 2rem;
}

.project-item__media{
  margin-right: 2rem;
}
.project-item:nth-child(even) .project-item__media{
  order: 2;
margin-left: 2rem;
margin-right: 0;
}

.project-item__text{
  display: flex;
  flex-direction: column;
  width: 55%;
}
.project-item__header{
  flex-grow: 1;
}

.project-item__media{
  width: 45%;
}

.projects-filter fieldset {
	border: 0;
	padding: 0;
	margin: 0;
	min-width: 0;
}





.projects-filter-toggle-btn [type="button"]+label,
.projects-filter-toggle-btn [type="checkbox"]+label {
	cursor: pointer;
	border: 0.07em solid black;
	padding-top: 0.75em;
	padding-bottom: 0.50em;
	padding-left: 1em;
	padding-right: 1em;
	display: inline-block;
	font-size: 0.85em;
	text-decoration: none;
	border-radius: 0.1em;
	margin-right: 1em;
	margin-bottom: 1em;
}

.projects-filter-toggle-btn [type="checkbox"]:checked+label {
	background: black;
	color: white;
}

.projects-filter-toggle-btn label span {
	transition: transform .3s;
	line-height: 1;
	display: inline-block;
}

.projects-filter-toggle-btn [type="checkbox"]:checked+label span {
	transform: rotate(45deg);
}

.projects-filter {
  padding-top: 2rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-bottom: 1rem;
}

@media only screen and (max-width: 840px) {
	.projects-filter {
		padding-left: 1rem;
		padding-right: 1rem;
	}
}

.filter_subgroup {
	margin-right: 2em;
}

.filter_subgroup:last-of-type {
	margin-right: 0;
}

@media only screen and (max-width: 840px) {
	.filter_subgroup {
		display: block;
	}
}

.projects-filter [type="checkbox"]+label {
	cursor: pointer;
	border: 0.07em solid black;
	padding-top: 0.55em;
	padding-bottom: 0.35em;
	padding-left: 1em;
	padding-right: 1em;
	display: inline-block;
	font-size: 0.85em;
	text-decoration: none;
	border-radius: 1.25em;
	margin-right: 1em;
	margin-bottom: 1em;
}

.projects-filter [type="checkbox"]:checked+label {
	background: black;
	color: white;
}

.projects-filter [type="checkbox"]:checked+label {
	fill: white;
}



/* hide inputs */

.projects-filter [type="checkbox"],
.projects-filter-toggle-btn [type="checkbox"],
.projects-filter-toggle-btn  [type="button"]{
	position: absolute!important;
	width: 1px!important;
	height: 1px!important;
	padding: 0!important;
	border: 0!important;
	overflow: hidden!important;
	clip: rect(1px, 1px, 1px, 1px);
}



</style>

<?php
function show_projekte_element($project_posts) {

  foreach ($project_posts as $project_post) {

    echo '<div class="project-item" style="background:' . $project_post["projektfarbe"] . '">';

      if (!empty($project_post["bild"])) {
        echo '<div class="project-item__media">';
        echo '<div class="project-item__image"><img src="' . $project_post["bild"] . '" alt="Alt Text Lorem Ipsum"/></div>';
        echo '</div>';
      }

      echo '<div class="project-item__text">';
        echo '<div class="project-item__header">';
          if (!empty($project_post["titel"])) {
            echo '<h3 class="project-item__title hyphens"><a href="#prpjektlink">' . $project_post["titel"] . '</a></h3>';
          }
          if (!empty($project_post["untertitel"])) {
            echo '<div class="project-item__subtitle hyphens">' . $project_post["untertitel"] . '</div>';
          }
        echo '</div>';

        echo '<div class="project-item__footer">';
          if (!empty($project_post["laufzeit"])) {
            echo '<div class="project-item__date ">' . $project_post["laufzeit"] . '</div>';
          }
          if (!empty($project_post["typ"])) {
            echo '<div class="project-item__category">' . $project_post["typ"] . '</div>';
          }
          if (!empty($project_post["information"])) {
            echo '<div class="project-item__information">' . $project_post["information"] . '</div>';
          }
        echo '</div>';
      echo '</div>';

    echo "</div>";

  }
}
?>
