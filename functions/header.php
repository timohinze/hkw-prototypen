<?php
include_once("menu.php");
include_once("config.php");

function get_header($page=null, $subpage=null) { ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HKW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/js/flickity.min.css" />


   <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css">


    <link rel="stylesheet" href="../../assets/css/styles.css" />


    <script
          src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
          crossorigin="anonymous">
    </script>

    <script src="../../assets/js/flickity.pkgd.min.js"></script>


 <script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/balance-text/3.3.0/balancetext.min.js"></script>
    <script>
      balanceText();
    </script>

  </head>

  <body>

    <header class="page-header">
      <?php menu($page, $subpage);?>
    </header>

    <div class="page-wrap">



      <?php if((isset($_GET["stoerer"]) AND ($_GET["stoerer"]==1))) { ?>
        <div class="stoerer-wrap">
          <div class="stoerer"><a class="to-the-right-link" href="https://google.com">Streik bei der BVG: Das HKW ist heute am besten über den Hauptbahnhof zu erreichen</a></div>
      </div>
      <?php } ?>

<?php } ?>
