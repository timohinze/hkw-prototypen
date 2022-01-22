<?php include_once("../../functions/header.php"); ?>
<?php include_once("../../functions/config.php"); ?>
<?php include_once("../../functions/elements.php"); ?>
<?php include_once("../../functions/linkrail.php"); ?>


<style>
/* 2021 12 15 */

/* 2021 10 29 */
/* 2021 10 21 */
/* 2021 10 20 */

/* 2021 10 15 */
/* 2021 10 13 */

/* Schriften */

/* Fakt Pro Italic Woff2 fehlt */

@font-face {
  font-family: "Fakt Pro";
  src: url("../fonts/FaktPro-Normal.woff2") format("woff2"),
       url("../fonts/FaktPro-Normal.woff") format("woff");
  font-style: normal;
  font-weight: normal;
}

@font-face {
  font-family: "Fakt Pro";
  src: url("../fonts/FaktPro-NormalItalic.woff") format("woff");
  font-style: italic;
  font-weight: normal;
}

@font-face {
  font-family: "Fakt Pro";
  src: url("../fonts/Fakt-SemiBold.woff2") format("woff2"),
       url("../fonts/Fakt-SemiBold.woff") format("woff");
  font-weight: 600;
  font-style: normal;
}

@font-face {
  font-family: "Lyno Stan HKW";
  src: url("../fonts/LynoStanHKW.woff2") format("woff2"),
       url("../fonts/LynoStanHKW.woff") format("woff");
  font-style: normal;
  font-weight: normal;
}

:root {
  --textsize0: 0.85rem;
  --textsize1: 1.2rem;
  --textsize2: 1.33rem;
}
@media only screen and (min-width: 1400px) {
  :root {
    --textsize0: 0.8em;
  }
}


::selection {
  background: #ffff80;
}


/* BASE */


* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}


html {
  font-family: "Fakt Pro", sans-serif;
  font-size: 100%;
  scroll-behavior: smooth;
}

/* test */

html {
  font-size: 112.5%;
}

/* @media (min-width: 640px) {
  html {
    font-size: 112.5%;
  }
} */
@media (min-width: 1200px) {
  html {
    font-size: 118.75%;
  }
}
@media (min-width: 1400px) {
  html {
    font-size: 131.25%;

  }
}

body {
  margin: 0;
}

ul,
li {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

a {
  text-decoration: none;
  color: black;
}

/* Typografie */

h1 {
  /* font-size: 2.25em; */
  font-size: 1.85em;
  font-weight: normal;
  line-height: 1.1;
  margin: 0 0 0 0;
}
@media (min-width: 640px) {
  h1 {
    /* font-size: 3em; */
  font-size: 2.5em;
  }
}
@media (min-width: 1024px) {
  h1 {
    /* font-size: 4em; */
  /* font-size: 3.1em; */
  /* font-size: 3.5em;
  letter-spacing: -0.015em; */
  font-size: 3.1em;
  }
}




h1 a {
  text-decoration: none;
}

h2{
  font-weight: normal;
  font-size: 1.5em;
  margin-block-end: 0.5em;
  margin-block-start: 0.75em;

}
@media (min-width: 1024px) {
  h2 {
    font-size: 1.75em;
  }
}

h3 {
  font-size: var(--textsize1);
  font-weight: normal;
  margin: 0.1rem 0 1.2em 0;
}
@media (min-width: 640px) {
  h3 {
    font-size: var(--textsize2);
  }
}

strong {
  font-weight: 600;
}


.nobr {
  white-space: nowrap;
}

.balance-text {
  text-wrap: balance;  /* Apply (proposed) CSS style. */
}

.hyphenate {
  -webkit-hyphens: auto;
  -webkit-hyphenate-limit-before: 3;
  -webkit-hyphenate-limit-after: 3;
  -webkit-hyphenate-limit-chars: 6 3 3;
  -webkit-hyphenate-limit-last: always;
  -webkit-hyphenate-limit-zone: 8%;

  -moz-hyphens: auto;
  -moz-hyphenate-limit-chars: 6 3 3;
  -moz-hyphenate-limit-last: always;
  -moz-hyphenate-limit-zone: 8%;

  -ms-hyphens: auto;
  -ms-hyphenate-limit-chars: 6 3 3;
  -ms-hyphenate-limit-last: always;
  -ms-hyphenate-limit-zone: 8%;

  hyphens: auto;
  hyphenate-limit-chars: 6 3 3;
  hyphenate-limit-last: always;
  hyphenate-limit-zone: 8%;
}


/* Helper */

.desktop{
  display: block;
}

.mobile{
  display: none;
}
@media (max-width: 768px) {
  .mobile{
    display: block;
  }
  .desktop{
    display: none;
  }
}

.width-50 {
	width: 50%;
}
@media (max-width: 768px) {
	.width-50 {
		width: 100%;
	}
}
.width-33 {
	width: 33.33%;
}
@media (max-width: 1024px) {
	.width-33 {
		width: 50%;
	}
}

@media (max-width: 768px) {
	.width-33 {
		width: 100%;
	}
}

.scr-only{
  position: absolute;
height: 1px;
width: 1px;
overflow: hidden;
clip: rect(0 0 0 0);
clip-path: inset(100%);
white-space: nowrap;
}




/* 2021 12 17 */

/* Main menu typography styling */

.programm-0,
.programm-3,
.program-0,
.program-3 {
	letter-spacing: 0.02em;
}

.programm-1,
.programm-2,
.program-1,
.program-2 {
	letter-spacing: 0.01em;
}

.programm-6,
.thehaus-1,
.medien-0,
.medien-1,
.medien-3,
.medien-4,
.media-0,
.media-1,
.media-3 {
	letter-spacing: 0.03em;
}

.medien-0,
.media-1 {
	text-transform: lowercase;
}

.medien-2,
.media-2 {
	letter-spacing: 0.02em;
}

.medien-3,
.media-3 {
	text-transform: uppercase;
}

.programm-1,
.programm-4,
.program-1,
.program-4, {
	text-transform: uppercase;
}

.dashaus-0 {
	letter-spacing: -0.085em;
}

.dashaus-1 {
	letter-spacing: -0.03em;
}

.dashaus-2,
.thehaus-2 {
	letter-spacing: -0.13em;
}

.dashaus-5,
.thehaus-5 {
	letter-spacing: -0.045em;
}

.dashaus-6,
.thehaus-6 {
	letter-spacing: 0.005em;
}

@media only screen and (min-width: 1800px) {
	.programm-0,
	.programm-3,
	.program-0,
	.program-3 {
		letter-spacing: 0.005em;
	}
	.programm-1,
	.programm-2,
	.program-1,
	.program-2 {
		letter-spacing: 0;
	}
	.programm-6 {
		letter-spacing: 0.02em;
	}
}


/* Header */

.page-header {
	position: -webkit-sticky;
	position: sticky;
	top: 0px;
	background: white;
	z-index: 99;
	left: 0;
	right: 0;
	display: flex;
	flex-wrap: wrap;
	flex-direction: row;
	justify-content: space-between;
	padding: 2rem;
	padding-bottom: 0;
	transition: top 0.75s, bottom 0.75s;
	min-width: 285px;
	margin-bottom: 0;
}

@media (max-width: 900px) {
	.page-header{
		margin-bottom: 0;

	}
}


@media only screen and (max-width: 768px) {
	.page-header {
		display: block;
		padding: 1rem;
	}
}


/* Header, wenn mobiles Menü offen ist */

@media only screen and (max-width: 768px) {
	.header--open-menu {
		top: 0!important;
		height: 100vh;
		overflow-y: scroll;
		-webkit-overflow-scrolling: touch;
		position: fixed;
		width: 100%;
		z-index: 99;
		background: white;
	}
}

/* Logo */
.header__logo{
  margin-top: 0.1rem;
}
@media only screen and (max-width: 768px) {
	.header__logo{
	  margin-top: 0;
	}
}

.header__logo svg {
	fill: black;
	height: calc(1.7em *0.955);
	width: auto;
	z-index: 100;
	position: relative;

}

@media (min-width: 768px) {
	.header__logo svg {
		height: calc(2em *0.955);
	}
}

@media (min-width: 900px) {
	.header__logo svg {
		height: calc(2.5em *0.955);
	}
}

@media (min-width: 1200px) {
	.header__logo svg {
		height: calc(3em *0.955);
	}
}

@media (min-width: 1800px) {
	.header__logo svg {
		height: calc(4em *0.955);
	}
}

@media (min-width: 2400px) {
	.header__logo svg {
		height: calc(5em *0.955);
	}
}

@media only screen and (max-width: 768px) {
.header--open-menu .header__logo {
	margin-bottom: 2em;
}
}

@media only screen and (max-width: 768px) {
	.header__logo {
		flex-grow: 1;
	}
	.header__logo svg {
		height: 3em;
		width: auto;
	}
}


/* Menu */

.menu {
	flex-grow: 0.8;
	 line-height: 1.1;
}

.menu__items {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: flex-start;
	line-height: 1;
}

@media only screen and (max-width: 768px) {
	.menu__items {
		display: block;
	}
}




/* Main Menu Item */

.mainmenu__item {
	display: block;
	 padding-bottom: 1rem;
	font-size: calc(2em *0.955);

}

@media only screen and (max-width: 768px) {
	.mainmenu__item {
		display: none;
		padding-bottom: 0;
		margin-bottom: 1rem;
	}
}

@media only screen and (max-width: 768px) {
	.header--open-menu .mainmenu__item {
		display: block;
	}
}

.mainmenu__item>a {
	font-family: "Lyno Stan HKW";
}

@media only screen and (max-width: 768px) {
	.mainmenu__item>a {
		margin-bottom: 1em;
		font-size: 2.8rem;
	}
}


/* @media (min-width: 768px) {
	.mainmenu__item {
		font-size: calc(2em *0.955);
	}
} */

@media (min-width: 900px) {
	.mainmenu__item {
		font-size: calc(2.5em *0.955);
	}
}

@media (min-width: 1200px) {
	.mainmenu__item {
		font-size: calc(3em *0.955);
	}
}

@media (min-width: 1800px) {
	.mainmenu__item {
		font-size: calc(4em *0.955);
	}
}

@media (min-width: 2400px) {
	.mainmenu__item {
		font-size: calc(5em *0.955);
	}
}

.mainmenu__item>a:hover {
	padding-bottom: 0;
	border-bottom: 0.35rem solid black;
}

@media only screen and (max-width: 768px) {
	.mainmenu__item>a:hover {
		padding-bottom: 0;
		border-bottom: inherit;
	}
}

.menu__item--selected>a {
	padding-bottom: 0;
	border-bottom: 0.35rem solid black;
}

@media only screen and (max-width: 768px) {
	.menu__item--selected>a {
		padding-bottom: 0;
		border-bottom: 0;
	}
}

.menu__item--selected>a:hover {
	padding-bottom: 0;
	border-bottom: 0.35rem solid black;
}

@media only screen and (max-width: 768px) {
	.menu__item--selected>a:hover {
		padding-bottom: 0;
		border-bottom: 0;
	}
}


/* Menu Language Switcher & Search */

/* .language-search-menu {
	display: flex;
	margin-top: 0.3rem;
} */

.menu__item.search-btn svg {
	/* height: calc(1.7em *0.955); */
height: 2.4em;
	width: auto;
	z-index: 100;
	position: relative;
}

/* @media (min-width: 768px) {
	.menu__item.search-btn svg {
		height: calc(2em *0.955);
	}
}

@media (min-width: 900px) {
	.menu__item.search-btn svg {
		height: calc(2.5em *0.955);
	}
} */
@media (min-width: 768px) {
	.menu__item.search-btn svg {
		height: calc(2.5em *0.955);
		margin-top: 0.1rem;
	}
}


@media (min-width: 1200px) {
	.menu__item.search-btn svg {
		height: calc(3em *0.955);
	}
}

@media (min-width: 1800px) {
	.menu__item.search-btn svg {
		height: calc(4em *0.955);
	}
}

@media (min-width: 2400px) {
	.menu__item.search-btn svg {
		height: calc(5em *0.955);
	}
}

/* .menu__item-language-switch {
	font-family: "Fakt Pro";
	text-align: center;
	margin-right: 1em;
} */



@media only screen and (max-width: 768px) {
	.menu__item.search-btn {
		position: absolute;
		right: 4.5rem;
		top: 1rem;
	}
}
@media only screen and (max-width: 350px) {
	.menu__item.search-btn {
		right: 4rem;
	}
	.menu__item.search-btn svg {
		width: 1.5rem;
		height: auto;
	}
}


/* Zeichne Seite weich, wenn Suche offen */
/* .page-wrap{
	transition: all  500ms linear
}
.page-wrap.open-search-modal{
	filter: blur(10px);
} */

/* Suche modal */

/* Skizze */

/* .search-modal-wrap{
display: none;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom:0;
width: 100%;

background: rgba(255, 255, 255, 1);
z-index: 1000;



}
.search-modal-wrap--visible{
	display: block;

}

.search-modal{
	display: flex;
	background: black;
	height: 6rem;
	position: relative;
}

.search-modal::before{
	background: transparent linear-gradient(180deg, black 20%, rgba(255, 255, 255, 0) 100%);
	position: absolute;
	content: " ";
	width: 100%;
	height: 50vh;
	z-index: -1;
	top: 0;
	left: 0;
	right: 0;
	pointer-events: none;
}

.search-modal input[type=text] {
margin: 1rem;
padding: 0.3rem;
  font-size: 3rem;
  border: none;
  background: black;
	color: white;
	flex-grow: 1;
}


.search-modal-close{
	color:white;
	margin: 1rem;
	padding: 0.3rem;
	font-size: 2rem;
 background: transparent;
 border: none;
}

.search-modal-close span{
	transform: rotate(45deg);
display: inline-block;
} */


.language-switch-btn{
	margin-top: 0.1rem;
	z-index: 100;
	position: relative;
}

.language-switch-btn:hover {
	border-bottom: 0.1em solid;
}

@media only screen and (max-width: 768px) {
	.language-switch-btn {
		margin-top: 0;
		position: absolute;
		right: 8rem;
		top: 1rem;
	}
}
@media only screen and (max-width: 350px) {
	.language-switch-btn {
		right: 6rem;
	}
}


/* Submenu (position absolute)*/

.submenu {
	padding-left: 2rem;
	padding-right: 2rem;
	font-size: 1rem;
	left: 0;
	right: 0;
	float: left;
	width: 100%;
	position: absolute;
	border-bottom: 1px solid black;
	margin-top: 1rem;
	margin-bottom: 1rem;
	background: white;
	display: none;
	white-space: nowrap;
	overflow-x: auto;

}

/*
.scrollable-menu{
	-webkit-overflow-scrolling: touch;
	-ms-overflow-style: -ms-autohiding-scrollbar;

}
 .scrollable-menu::-webkit-scrollbar {
  display: none;
}

.scrollable-menu{
	cursor: pointer;
}

.scrollable-menu {
	-ms-overflow-style: none;
	scrollbar-width: none;
    cursor: grab;
}

.scrollable-menu:active {
	cursor: grab;

    cursor: grabbing;
}


.scrollable-menu::after {
		background: transparent linear-gradient(90deg, rgba(255, 255, 255, 0) calc(100% - 10rem), white 100%);
		position: absolute;
		content: " ";
		top: 0;
	  right: 0;
		left: 0;
		width: 100%;
		height: 100%;
		pointer-events: none;
	}


.submenu--scrollable .submenu__item:last-child{
	padding-right: 3.3rem;
} */



@media only screen and (max-width: 768px) {
	.submenu {
		padding-left: 0;
		padding-right: 0;
	}
}

@media only screen and (min-width: 768px) {
 .submenu {
	 font-size: 1rem;
 }
}


/* Schaffe Raum für das Submenu */

.mainmenu__item.menu__item--selected {
	padding-bottom: calc(3.15rem + 1px);
}

@media only screen and (max-width: 768px) {
	.mainmenu__item.menu__item--selected {
		padding-bottom: 0;
	}
}

.menu__item--selected .submenu {
	display: block;
}

@media only screen and (max-width: 768px) {
	.menu__item--selected .submenu {
		display: none;
	}
}

.submenu__items {
	display: flex;
}

@media only screen and (max-width: 768px) {
	.submenu__items {
		display: block;
	}
}

@media only screen and (max-width: 768px) {
	.submenu {
		position: relative;
		border-bottom: none;
	}
}

.submenu__item a{
	display: block;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
}

 @media only screen and (max-width: 768px) {
	 .submenu__item{
	 	padding-top: 0;
	 	padding-bottom: 0;
	 }
}

@media only screen and (max-width: 768px) {

.mainmenu__item--open-submenu>a {
	border-bottom: 0.35rem solid black;
}

.mainmenu__item--open-submenu>a:hover {
	border-bottom: 0.35rem solid black;
}

.mainmenu__item--open-submenu .submenu {
	display: block;
}
}


/* Submenu Item */

.submenu__item {
	margin-right: 2em;
	margin-top: 0;
}

.submenu__item:first-child {
	margin-left: 0;
}

.submenu__item:last-child {
	margin-right: 0;
}

.submenu__item:hover {
	border-bottom: 3px solid black;
}

@media only screen and (max-width: 768px) {
	.submenu__item {
		margin-right: 0;
		border-bottom: none;
	}
}
@media only screen and (max-width: 768px) {
	.submenu__item a{
		padding-top: 0.75em;
		padding-bottom: 0.75em;
		display: block;
	}
}


@media only screen and (max-width: 768px) {
	.submenu__item:hover {
		border-bottom: none;
	}
}

.submenu__item--selected {
	border-bottom: 3px solid black;
}

@media only screen and (max-width: 768px) {
	.submenu__item--selected {
		border-bottom: none;
	}
}




/* Burger */

.header__burger {
	height: 3em;
	width: 3.5em;
	background: transparent;
	border: 0;
	z-index: 999;
	display: none;
	position: absolute;
	right: 1rem;
	top: 1rem;
}

@media only screen and (max-width: 768px) {
	.header__burger {
		display: block;
	}
}

.header__burgericon span {
	position: absolute;
	left: 0;
	height: 0.5em;
	right: 0;
	background: black;
	border-radius: 1px;
	display: block;
	transition: .25s ease-in-out;
}

.header__burgericon span:nth-of-type(1) {
	top: 0;
}

.header__burgericon span:nth-of-type(2) {
	top: calc(50% - 0.25em);
}

.header__burgericon span:nth-of-type(3) {
	top: calc(100% - 0.5em);
}


.header__burger--open .header__burgericon span:nth-child(1) {
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
	top: 50%;
	left: 0;
	width: 4em;
}

.header__burger--open .header__burgericon span:nth-child(2) {
	width: 0;
	opacity: 0;
}

.header__burger--open .header__burgericon span:nth-child(3) {
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
	top: 50%;
	left: 0;
	width: 4em;
}


/* Menü fährt beim scrollen raus/rein */

.page-header.nav-up {
	top: -900px;
}

.page-header.nav-down {
	top: 0;
}


/* scrollable menu flickity  */

/* enable */

.scrollable-menu-flickity::after {
  content: 'flickity';
  display: none; /* hide :after */
}
@media only screen and (max-width: 768px) {
	.submenu .scrollable-menu-flickity::after {
		content: '';

	}
}



.flickity-prev-next-button svg{
	display: none!important;
}
.scrollable-menu-flickity:hover .flickity-prev-next-button svg{
	display: block!important;
}



.flickity-prev-next-button .flickity-button-icon{
	width: 100%!important;
	height: 100%!important;
}


.scrollable-menu-flickity .flickity-button{
  color: black!important;
}

.scrollable-menu-flickity .flickity-prev-next-button{
   height: 0.7rem!important;
  width: 0.7rem!important;
   top: 40%!important;
}

.scrollable-menu-flickity .flickity-prev-next-button::before{
  content: " ";
  width: 4rem;
  position: absolute;
  height: 1.5rem;
  top: -0.3rem;
  right: 0;

  background: transparent linear-gradient(90deg, rgba(255, 255, 255, 0) 0, white 82%);

}
.scrollable-menu-flickity .flickity-prev-next-button.previous::before{
  right: auto;
  left: 0;
  background: transparent linear-gradient(-90deg, rgba(255, 255, 255, 0) 0, white 82%);

}

@media only screen and (max-width: 768px) {
	.scrollable-menu-flickity .flickity-prev-next-button::before{
	  width: 2rem;
	}

	.flickity-prev-next-button{
		pointer-events: none;
	}
	.scrollable-menu-flickity:hover .flickity-prev-next-button svg{
		display: none!important;
	}

}

/*
to top */

.jump-to-top{
	position: fixed;
	bottom: 1rem;
	right: 1rem;
	z-index: 10;
	opacity: 0;
	width: 2rem;
	height: 2rem;
	font-size: 2rem;
	/* background: #ffffff9e; */
	/* text-align: center;
line-height: 1.1; */

transition: opacity 0.75s;

}

.nav-down .jump-to-top{
	opacity: 0.8;
}

.nav-down .jump-to-top:hover{
	opacity: 1;
}






















/* search  overlay */

@media only screen and (max-width: 768px) {
	.header--open-search {
		top: 0!important;
		height: 100vh;
		overflow-y: scroll;
		-webkit-overflow-scrolling: touch;
		position: fixed;
		width: 100%;
		z-index: 99;
	}
}

.search-overlay {
	width: 100%;
	padding-left: 10%;
	padding-right: 10%;
	padding-top: 3rem;
	padding-bottom: 3rem;
	display: none;
	background: white;
	position: absolute;
	left: 0;
	right: 0;
	z-index: 11;
}

@media only screen and (max-width: 768px) {
	.search-overlay {
		padding-left: 1rem;
		padding-right: 1rem;
		position: fixed;
		top: 0;
		bottom: 0;
	}
}

.header--open-search .search-overlay {
	display: block;
}

.search-overlay--open {
	display: block;
}

.header--open-menu .search-overlay--open {
	display: none;
}


/* search form */

.search-form form {
	display: flex;
	flex-direction: row;
	 border-bottom: 2px solid black;
	padding: 2px;
	 padding-bottom: 0.2rem;
	position: relative;
}

.search-form button {
	border: 0;
	border-radius: 0;
	background: transparent;
	color: black;
	padding: 0;
	margin: 0;
	cursor: pointer;
	padding-top: 7px;
}

/* .search-form button:hover svg{
	fill: rgb(210,0,255)

} */

.search-form svg {
	height: 3rem;
}

@media only screen and (max-width: 768px) {
	.search-form svg {
		height: 2rem;

	}
}

.search-form input {
	 flex-grow: 2;
	border: none;
	 margin-right: 0.25em;
	font-size: 3rem;
	line-height: 1.1;
	font-family: inherit;
	padding: 0.1rem;
	padding-top: 0.5rem;
	width: 100%;
	outline: 0;
}

/* .search-form input:focus {
	outline: 0;
border: 2px solid rgb(210,0,255);
} */

@media only screen and (max-width: 768px) {
	.search-form input {
		font-size: 1.5rem;
	}
}

.search-form input::placeholder {
	font-size: 3rem;
	line-height: 1.1;
	font-family: inherit;
	color: black;
}

@media only screen and (max-width: 768px) {
	.search-form input::placeholder {
		font-size: 1.5rem;
	}
}

.search-form {
	margin-top: 4rem;
	margin-bottom: 4rem;
}


/* result page */

.search-result-page {
	width: 80%;
	margin-left: auto;
	margin-right: auto;
}

@media only screen and (max-width: 768px) {
	.search-result-page {
		width: auto;
		margin-left: 1rem;
		margin-right: 1rem;
	}
}

.search-result-number {
	font-size: 1.5rem;
	line-height: 1.4;
	margin-top: 0;
	margin-bottom: 3rem;
}
@media only screen and (max-width: 768px) {
	.search-result-number {
		font-size: 1.25rem;

	}
}



.search-result-number a {
	text-decoration: underline;
}


/* search result item */

.search-result-item p {
	margin-top: 0;
	line-height: 1.4;
	margin-bottom: 1.4rem;
}

.search-result-item {
	position: relative;
	display: flex;
	flex-wrap: wrap;
	padding-top: 1rem;
	padding-bottom: 1rem;
	margin-bottom: 1rem;
	border-bottom: 1px solid black;
}

@media only screen and (max-width: 768px) {
	.search-result-item {
		flex-direction: column;
	}
}

.search-result-item__media {
	width: 10rem;
	margin-right: 1.5rem;
	margin-bottom: 1.4rem;
}

@media only screen and (max-width: 768px) {
	.search-result-item__media {
		width: 50%;
		margin-right: 0;
	}
}

.search-result-item__title {
	font-size: inherit;
	line-height: inherit;
	font-weight: inherit;
	margin: 0;
	margin-bottom: 1.4rem;
	text-decoration: underline;
}

.search-result-item__date {
	width: 8rem;
}

@media only screen and (max-width: 768px) {
	.search-result-item__date {
		width: auto;
	}
}

.search-result-item__text {
	flex: 1;
}

.search-btn svg .close {
	display: none;
}

.search-btn--open svg .open {
	display: none;
}

.search-btn--open svg .close {
	display: block;
}

/* mark results */
mark{
	background: #ffff80;
}


</style>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HKW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/js/flickity.min.css" />

    <link rel="stylesheet" href="../../assets/css/styles.css" />


    <script
          src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
          crossorigin="anonymous">
    </script>

    <script src="../../assets/js/flickity.pkgd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/balance-text/3.3.0/balancetext.min.js"></script>
    <script>
      balanceText();
    </script>

  </head>

  <body>


<header class="page-header">


 <div class="header__logo">
   <a href="https://supercomputerstudio.com/clients/hkw-prototypen/prototypen/startseite">
     <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="56px" viewBox="0 0 130 56">
       <path d="M29.3 18.6H7.4V.1H-.2v44.4h7.6V26h21.9v18.5h7.6V.1h-7.6v18.5zm19-2.3V.1h-7.8v44.4h7.8V28.2L78 44.5v-8.7L52.4 22.3 78 8.8V.1L48.3 16.3zM109.5.1h-8.6L89.3 29.8V.1h-7.7v44.4h8.9l11.4-26.9v26.9h8.9L129.9.1h-8.6l-11.7 29.7-.1-29.7zM-.2 55.8h.9v-3h3.5v3h.9v-6.6h-.8v2.9H.7v-2.9h-.9v6.6zm6.9-1.2c0 .8.6 1.3 1.6 1.3.7 0 1.2-.2 1.5-.7v.6h.8v-3.1c0-1.1-.6-1.7-1.8-1.7-1.2 0-1.8.7-1.9 1.6h.8c0-.5.4-.9 1.1-.9.7 0 1 .4 1 1 0 .2-.1.3-.6.4l-.9.2c-1.2.1-1.6.6-1.6 1.3zm3.1-.7c0 .9-.6 1.4-1.3 1.4-.6 0-.9-.3-.9-.7 0-.4.2-.7.8-.8l.9-.2c.2 0 .4-.1.5-.2v.5zm2.4.1c0 1.5.8 2 1.7 2 .7 0 1.2-.3 1.4-.8v.7h.8v-4.7h-.8v2.4c0 1-.5 1.7-1.2 1.7S13 55 13 54v-2.7h-.8V54zm5.4.5c0 1 .8 1.5 1.9 1.5 1.2 0 2-.5 2-1.5 0-.8-.6-1.1-1.3-1.2l-.9-.3c-.6-.1-.8-.3-.8-.6 0-.5.5-.7 1-.7.6 0 1 .3 1 .8h.8c0-1-.8-1.4-1.8-1.4s-1.9.5-1.9 1.5.7 1.2 1.4 1.3l.9.2c.5.1.7.2.7.6 0 .5-.4.8-1.2.8-.5 0-1.1-.2-1.1-.8l-.7-.2zm7.4-1c0 1.5.9 2.4 2.1 2.4.7 0 1.3-.2 1.6-.8v.7h.8v-7h-.8v3.1c-.3-.6-.8-.8-1.5-.8C26 51 25 52 25 53.5zm.9 0c0-1.1.6-1.8 1.4-1.8s1.4.6 1.4 1.7-.6 1.7-1.4 1.7c-.8.1-1.4-.5-1.4-1.6zm5 0c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.8c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.2-.2-2.2.8-2.2 2.3zm2.2-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.2-.8.7-1.2 1.3-1.2zm3.5 4h.8v-2.5c0-.8.3-1.5 1-1.5.2 0 .4 0 .6.2l.3-.8c-.2-.2-.5-.2-.7-.2-.6 0-1 .3-1.2.8v-.7h-.8v4.7zm6.2 0h.9v-2l1-1.1 2.4 3.1h1l-2.8-3.7 2.7-2.9h-1l-3.3 3.6v-3.6h-.9v6.6zm6.3-1.8c0 1.5.8 2 1.7 2 .7 0 1.2-.3 1.4-.8v.7h.8v-4.7h-.8v2.4c0 1-.5 1.7-1.2 1.7s-1.1-.3-1.1-1.3v-2.7h-.8V54zm5.7 1.8h.8v-7h-.8v7zm2.9-1.3c0 .9.5 1.4 1.4 1.4h.7v-.7h-.6c-.5 0-.7-.2-.7-.7v-2.6h1.2v-.7h-1.2v-1.4h-.8v1.4h-.9v.7h.9v2.6zM61 54c0 1.5.8 2 1.7 2 .7 0 1.2-.3 1.4-.8v.7h.9v-4.7h-.8v2.4c0 1-.5 1.7-1.2 1.7s-1.1-.3-1.1-1.3v-2.7H61V54zm5.7 1.8h.8v-2.5c0-.8.3-1.5 1-1.5.2 0 .4 0 .6.2l.3-.8c-.2-.2-.5-.2-.7-.2-.6 0-1 .3-1.2.8v-.7h-.8v4.7zm3.2-2.3c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.8c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.2-.2-2.2.8-2.2 2.3zm2.3-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.1-.8.6-1.2 1.3-1.2zm3.4 4h.8v-2.4c0-1 .6-1.6 1.3-1.6.7 0 1.1.3 1.1 1.3v2.7h.8V53c0-1.5-.8-2-1.7-2-.7 0-1.2.3-1.5.8v-.7h-.8v4.7zm7.8-2.3c0 1.5.9 2.4 2.1 2.4.7 0 1.3-.2 1.6-.8v.7h.8v-7H87v3.1c-.3-.6-.8-.8-1.5-.8-1.2-.1-2.1.9-2.1 2.4zm.8 0c0-1.1.6-1.8 1.4-1.8.8 0 1.4.6 1.4 1.7s-.6 1.7-1.4 1.7c-.7.1-1.4-.5-1.4-1.6zm5.1 0c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.8c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.3-.2-2.2.8-2.2 2.3zm2.2-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.1-.8.7-1.2 1.3-1.2zm3.4 4h.8v-2.5c0-.8.3-1.5 1-1.5.2 0 .4 0 .6.2l.3-.8c-.2-.2-.5-.2-.7-.2-.6 0-1 .3-1.2.8v-.7h-.8v4.7zm7.3 0h1.1l1.5-5.6 1.5 5.6h1.1l1.7-6.6h-.9l-1.4 5.7-1.5-5.7h-1.1l-1.5 5.7-1.4-5.7h-.9l1.8 6.6zm7.4-2.3c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.9c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.1-.2-2.1.8-2.1 2.3zm2.2-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.2-.8.7-1.2 1.3-1.2zm3.5 4h.8v-7h-.8v7zm2.8-1.3c0 .9.5 1.4 1.4 1.4h.7v-.7h-.6c-.5 0-.7-.2-.7-.7v-2.6h1.2v-.7H119v-1.4h-.8v1.4h-.9v.7h.9v2.6h-.1z"></path>
     </svg>
</a>
</div>

<!-- Die Prototypen sind nicht barrierefrei -->
<!-- ich habe versucht das Menü schon mal für die Barrriefreiheit vorzubereiten -->
<nav class="menu" aria-labelledby="menu__label">
  <span id="menu__label" hidden="">Diese Seite</span>

  <button class="header__burger mobile" aria-haspopup="menu" aria-expanded="false" title="Menü öffnen">
        <span class="header__burgericon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

  <ul class="menu__items">
    <li class="menu__item mainmenu__item">
                          <a href="https://supercomputerstudio.com/clients/hkw-prototypen/prototypen/kalender"><span class="programm-0">P</span><span class="programm-1">r</span><span class="programm-2">o</span><span class="programm-3">g</span><span class="programm-4">r</span><span class="programm-5">a</span><span class="programm-6">m</span><span class="programm-7">m</span></a><div class="submenu"><div class="submenu-inner scrollable-menu"><ul class="submenu__items"><li class="submenu__item ">
                  <a href="https://supercomputerstudio.com/clients/hkw-prototypen/prototypen/kalender">Kalender</a>
            </li><li class="submenu__item ">
                  <a href="#">Themen</a>
            </li><li class="submenu__item ">
                  <a href="#">Projekte</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li><li class="submenu__item ">
                  <a href="#">Lorem Ipsum</a>
            </li></ul></div></div></li><li class="menu__item mainmenu__item">
                          <a href="#"><span class="dashaus-0">D</span><span class="dashaus-1">a</span><span class="dashaus-2">s</span> <span class="dashaus-4">H</span><span class="dashaus-5">a</span><span class="dashaus-6">u</span><span class="dashaus-7">s</span></a><div class="submenu"><div class="submenu-inner scrollable-menu"><ul class="submenu__items"><li class="submenu__item ">
                  <a href="#">Besuch</a>
            </li><li class="submenu__item ">
                  <a href="#">Über uns</a>
            </li><li class="submenu__item ">
                  <a href="#">Team</a>
            </li><li class="submenu__item ">
                  <a href="#">Architektur</a>
            </li><li class="submenu__item ">
                  <a href="#">Geschichte</a>
            </li><li class="submenu__item ">
                  <a href="#">Presse</a>
            </li><li class="submenu__item ">
                  <a href="#">Kontakt</a>
            </li></ul></div></div></li><li class="menu__item mainmenu__item">
                          <a href="#"><span class="medien-0">M</span><span class="medien-1">e</span><span class="medien-2">d</span><span class="medien-3">i</span><span class="medien-4">e</span><span class="medien-5">n</span></a><div class="submenu"><div class="submenu-inner scrollable-menu"><ul class="submenu__items"><li class="submenu__item ">
                  <a href="#">Menu Item</a>
            </li></ul></div></div></li><li class="menu__item language-switch-btn"><a href="#">EN</a></li>
<li class="menu__item search-btn">

  <a href="#">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.5 56.6" width="40px" height="56px">
      <g class="open">
      	<path d="M32.1,33.8c8-7,8.8-19.3,1.7-27.3S14.5-2.2,6.5,4.9c-8,7-8.8,19.3-1.7,27.3c5.2,6,13.7,8.1,21.1,5.3l5.3,7.5h8.6
      		C39.9,45,32.1,33.8,32.1,33.8z M19.4,31.5c-6.6,0-12-5.3-12-12s5.3-12,12-12s12,5.3,12,12C31.3,26,26,31.5,19.4,31.5z"></path>
      </g>
      <g class="close">
      	<rect x="16" y="-3.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.2532 20.0221)" width="8" height="46.3"></rect>
      	<rect x="-3.2" y="16" transform="matrix(0.707 -0.7072 0.7072 0.707 -8.2878 19.9408)" width="46.3" height="8"></rect>
      </g>

    </svg>

</a></li>
</ul>
            <div class="search-overlay">
              <div class="search-form" role="search">
                <form>
                  <label class="search-label" for="search" aria-labelledby="search-title">
                  </label>
                  <input id="search" type="text">


                  <button type="button" onclick="alert('Search Btn pressed')">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.5 56.6" width="40px" height="56px">
                        <title id="search-title">Suche</title>
                  <path d="M32.5 34.2c8.1-7.1 8.9-19.5 1.7-27.6S14.7-2.3 6.6 4.9C-1.5 12-2.3 24.4 4.9 32.5c5.3 6.1 13.9 8.2 21.4 5.4l5.4 7.6h8.7l-7.9-11.3zm-12.9-2.4c-6.7 0-12.1-5.4-12.1-12.1 0-6.7 5.4-12.1 12.1-12.1 6.7 0 12.1 5.4 12.1 12.1 0 6.6-5.4 12.1-12.1 12.1z"></path>
                    </svg>
                  </button>

                </form>
              </div>
            </div>

          </nav>


    <div class="jump-to-top">
       <a href="#top">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 17.1">
                   <path d="M17 0l17 17.1h-6.7L17 6.6 6.7 17.1H0L17 0z"></path>
                 </svg>
       </a>
    </div>


        </header>




        <ul class="lynotest">
           <li><a href="#">!!!!Test Lorem Ipsum</a></li>
        </ul>
        <hr>




        <br><hr><br>footer:
        <?php include_once("../../functions/footer.php"); ?>
