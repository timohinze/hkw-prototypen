<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>

<?php get_header(); ?>

<style>

.search-result-number{
  font-size: 1.5rem;
line-height: 1.1;
margin-top: 0;
margin-bottom: 3rem;
}

.search-result-number a{
  text-decoration: underline;
}

.search-result-page{
  width: 80%;
  margin-left: auto;
  margin-right: auto;

}

.search-result-item{
  position: relative;
display: flex;
flex-wrap: wrap;
padding-top: 1rem;
padding-bottom: 1rem;
margin-bottom: 1rem;
border-bottom: 1px solid black;
}


.search-result-item__media{
  width: 10rem;
  margin-right: 1.5rem;
}


.search-result-item__title{
font-size: inherit;
line-height: inherit;
font-weight: inherit;
margin: 0;
text-decoration: underline;
}
.search-result-item__date{
    width: 10rem;
}

.search-result-item__text{
  flex: 1;
}

form {
  /* This bit sets up the horizontal layout */
  display:flex;
  flex-direction:row;

  /* This bit draws the box around it */
  border-bottom: 2px solid black;

  /* I've used padding so you can see the edges of the elements. */
  padding:2px;
}


button{
  border: 0;
border-radius: 0;
background: white;
color: black;
padding: 0;
margin: 0;
cursor: pointer;
}


input {
  /* Tell the input to use all the available space */
  flex-grow:2;
  /* And hide the input's outline, so the form looks like the outline */
  border:none;
  margin-right: 2rem;
  font-size: 3rem;
  line-height: 1.1;
  font-family: inherit;

  padding-top: 0.5rem;
}

input::placeholder {
  font-size: 3rem;
  line-height: 1.1;
  font-family: inherit;
}


.search-form{
  margin-top: 4rem;
  margin-bottom: 4rem;
}
</style>



<main class="search-result-page">

<div class="search-form">
  <form>
    <label class="search-label" for="search" aria-labelledby="search-title">
    </label>
    <input id="search" type="text" placeholder="Suche">


    <button type="button" onclick="alert('Search Btn pressed')">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.5 56.6" width="40px" height="56px">
    <path d="M32.5 34.2c8.1-7.1 8.9-19.5 1.7-27.6S14.7-2.3 6.6 4.9C-1.5 12-2.3 24.4 4.9 32.5c5.3 6.1 13.9 8.2 21.4 5.4l5.4 7.6h8.7l-7.9-11.3zm-12.9-2.4c-6.7 0-12.1-5.4-12.1-12.1 0-6.7 5.4-12.1 12.1-12.1 6.7 0 12.1 5.4 12.1 12.1 0 6.6-5.4 12.1-12.1 12.1z"></path>
      </svg>
      <span class=scr-only>Suche</span>
    </button>

  </form>
</div>





<div class="search-result-element">

  <div class="search-result-number">
    84 Ergebnisse, 35 Ergebnisse in der <a href="#">Mediathek</a>
    <!-- 84 results, 35 results in Media -->
  </div>


  <div class="search-result-item">
    <div class="search-result-item__media">
      <img src="https://www.hkw.de/media/bilder/2019/new_alphabet_school/the_undercommons_imgsize_S.jpg">
    </div>
    <div class="search-result-item__text">
      <h2 class="search-result-item__title"><a href="#"><mark>New Alphabet School</mark></a></h2>
      <p><mark>New Alphabet School</mark> 2019-2022<br>
      Foto: Juan Pablo Estrada, 2013 Die <mark> New Alphabet </mark> (...)<br>
      Die <mark>New Alphabet School</mark> ist ein kollaboratives Format für künstlerische, kuratorische und aktivistische Forschungspraktiken  </p>
    </div>
  </div>


    <div class="search-result-item">
      <div class="search-result-item__media">
      </div>
      <div class="search-result-item__text">
        <h2 class="search-result-item__title"><a href="#"><mark>New Alphabet School</mark>: Wie kann ich teilnemen?</a></h2>
        <p>Die <mark>New Alphabet School</mark> ist ein kollaboratives Format für künstlerische, kuratorische und aktivistische Forschungspraktiken (...)</p>
      </div>
    </div>


  <div class="search-result-item">
    <div class="search-result-item__media">
      <img src="https://www.hkw.de/media/bilder/2021/newalphabetschool/juan_pablo_estrada_imgsize_S.jpg">
    </div>
    <div class="search-result-item__date">
      Fr 10.12.2021 <br>19h
    </div>
    <div class="search-result-item__text">
    <h2 class="search-result-item__title"><a href="#">#CommunityBuilding</a></h2>
    <p>
    Video: Vorträge, Diskussion <br>
    <mark>NEW ALPHABET SCHOOL</mark>
    Unterschiede und Antagonismen zulassen als auch Austausch ermöglichen? Für diese Ausgabe der <mark>New Alphabet School</mark>(...)
  </p>
</div>
</div>




</div>


</main>



<?php include_once("../../functions/footer.php"); ?>
