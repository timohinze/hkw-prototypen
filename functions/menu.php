<?php


// $current_page = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function menu($page=null, $subpage=null){
  global $current_page;
  $menuitems = array (
    array(
      "name" => 'Programm',
      "slug" => "programm",
      "has_submenu" => true,
      "submenu_id" =>"programm",
      "is_no_link" => false,
      "url" => BASE_URL."prototypen/kalender"
    ),
    array(
      "name" => 'Das Haus',
      "slug" => "das-haus",
      "has_submenu" => true,
      "submenu_id" =>"das-haus",
      "is_no_link" => false,
      "url" => "#"

    ),
    array(
      "name" =>'Medien',
      "slug" => "medien",
      "submenu_id" =>"medien",
      "has_submenu" => true,
      "is_no_link" => false,
      "url" => "#"

    ),
  );


 ?>


 <div class="header__logo">
   <a href="<?php echo BASE_URL."prototypen/startseite";  ?>">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 56">
       <path d="M29.3 18.6H7.4V.1H-.2v44.4h7.6V26h21.9v18.5h7.6V.1h-7.6v18.5zm19-2.3V.1h-7.8v44.4h7.8V28.2L78 44.5v-8.7L52.4 22.3 78 8.8V.1L48.3 16.3zM109.5.1h-8.6L89.3 29.8V.1h-7.7v44.4h8.9l11.4-26.9v26.9h8.9L129.9.1h-8.6l-11.7 29.7-.1-29.7zM-.2 55.8h.9v-3h3.5v3h.9v-6.6h-.8v2.9H.7v-2.9h-.9v6.6zm6.9-1.2c0 .8.6 1.3 1.6 1.3.7 0 1.2-.2 1.5-.7v.6h.8v-3.1c0-1.1-.6-1.7-1.8-1.7-1.2 0-1.8.7-1.9 1.6h.8c0-.5.4-.9 1.1-.9.7 0 1 .4 1 1 0 .2-.1.3-.6.4l-.9.2c-1.2.1-1.6.6-1.6 1.3zm3.1-.7c0 .9-.6 1.4-1.3 1.4-.6 0-.9-.3-.9-.7 0-.4.2-.7.8-.8l.9-.2c.2 0 .4-.1.5-.2v.5zm2.4.1c0 1.5.8 2 1.7 2 .7 0 1.2-.3 1.4-.8v.7h.8v-4.7h-.8v2.4c0 1-.5 1.7-1.2 1.7S13 55 13 54v-2.7h-.8V54zm5.4.5c0 1 .8 1.5 1.9 1.5 1.2 0 2-.5 2-1.5 0-.8-.6-1.1-1.3-1.2l-.9-.3c-.6-.1-.8-.3-.8-.6 0-.5.5-.7 1-.7.6 0 1 .3 1 .8h.8c0-1-.8-1.4-1.8-1.4s-1.9.5-1.9 1.5.7 1.2 1.4 1.3l.9.2c.5.1.7.2.7.6 0 .5-.4.8-1.2.8-.5 0-1.1-.2-1.1-.8l-.7-.2zm7.4-1c0 1.5.9 2.4 2.1 2.4.7 0 1.3-.2 1.6-.8v.7h.8v-7h-.8v3.1c-.3-.6-.8-.8-1.5-.8C26 51 25 52 25 53.5zm.9 0c0-1.1.6-1.8 1.4-1.8s1.4.6 1.4 1.7-.6 1.7-1.4 1.7c-.8.1-1.4-.5-1.4-1.6zm5 0c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.8c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.2-.2-2.2.8-2.2 2.3zm2.2-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.2-.8.7-1.2 1.3-1.2zm3.5 4h.8v-2.5c0-.8.3-1.5 1-1.5.2 0 .4 0 .6.2l.3-.8c-.2-.2-.5-.2-.7-.2-.6 0-1 .3-1.2.8v-.7h-.8v4.7zm6.2 0h.9v-2l1-1.1 2.4 3.1h1l-2.8-3.7 2.7-2.9h-1l-3.3 3.6v-3.6h-.9v6.6zm6.3-1.8c0 1.5.8 2 1.7 2 .7 0 1.2-.3 1.4-.8v.7h.8v-4.7h-.8v2.4c0 1-.5 1.7-1.2 1.7s-1.1-.3-1.1-1.3v-2.7h-.8V54zm5.7 1.8h.8v-7h-.8v7zm2.9-1.3c0 .9.5 1.4 1.4 1.4h.7v-.7h-.6c-.5 0-.7-.2-.7-.7v-2.6h1.2v-.7h-1.2v-1.4h-.8v1.4h-.9v.7h.9v2.6zM61 54c0 1.5.8 2 1.7 2 .7 0 1.2-.3 1.4-.8v.7h.9v-4.7h-.8v2.4c0 1-.5 1.7-1.2 1.7s-1.1-.3-1.1-1.3v-2.7H61V54zm5.7 1.8h.8v-2.5c0-.8.3-1.5 1-1.5.2 0 .4 0 .6.2l.3-.8c-.2-.2-.5-.2-.7-.2-.6 0-1 .3-1.2.8v-.7h-.8v4.7zm3.2-2.3c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.8c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.2-.2-2.2.8-2.2 2.3zm2.3-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.1-.8.6-1.2 1.3-1.2zm3.4 4h.8v-2.4c0-1 .6-1.6 1.3-1.6.7 0 1.1.3 1.1 1.3v2.7h.8V53c0-1.5-.8-2-1.7-2-.7 0-1.2.3-1.5.8v-.7h-.8v4.7zm7.8-2.3c0 1.5.9 2.4 2.1 2.4.7 0 1.3-.2 1.6-.8v.7h.8v-7H87v3.1c-.3-.6-.8-.8-1.5-.8-1.2-.1-2.1.9-2.1 2.4zm.8 0c0-1.1.6-1.8 1.4-1.8.8 0 1.4.6 1.4 1.7s-.6 1.7-1.4 1.7c-.7.1-1.4-.5-1.4-1.6zm5.1 0c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.8c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.3-.2-2.2.8-2.2 2.3zm2.2-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.1-.8.7-1.2 1.3-1.2zm3.4 4h.8v-2.5c0-.8.3-1.5 1-1.5.2 0 .4 0 .6.2l.3-.8c-.2-.2-.5-.2-.7-.2-.6 0-1 .3-1.2.8v-.7h-.8v4.7zm7.3 0h1.1l1.5-5.6 1.5 5.6h1.1l1.7-6.6h-.9l-1.4 5.7-1.5-5.7h-1.1l-1.5 5.7-1.4-5.7h-.9l1.8 6.6zm7.4-2.3c0 1.5.8 2.5 2.3 2.5 1.1 0 1.9-.7 2-1.5h-.9c-.1.4-.5.8-1.2.8-.8 0-1.3-.6-1.4-1.6h3.4v-.3c0-1.4-.8-2.2-2.1-2.2-1.1-.2-2.1.8-2.1 2.3zm2.2-1.7c.7 0 1.1.4 1.2 1.2h-2.5c.2-.8.7-1.2 1.3-1.2zm3.5 4h.8v-7h-.8v7zm2.8-1.3c0 .9.5 1.4 1.4 1.4h.7v-.7h-.6c-.5 0-.7-.2-.7-.7v-2.6h1.2v-.7H119v-1.4h-.8v1.4h-.9v.7h.9v2.6h-.1z"></path>
     </svg>
</a>
</div>

<!-- Die Prototypen sind nicht barrierefrei -->
<!-- ich habe versucht das Menü schon mal für die Barrriefreiheit vorzubereiten -->
<nav class="menu" aria-labelledby="menu__label">
  <span id="menu__label" hidden>Diese Seite</span>

  <button class="header__burger mobile" aria-haspopup="menu" aria-expanded="false" title="Menü öffnen" >
        <span class="header__burgericon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

  <ul class="menu__items">
    <?php foreach ($menuitems as $menuitem) {
          $status = null;
          if($page == $menuitem["slug"]) {$status= " menu__item--selected";}

                echo '<li class="menu__item mainmenu__item'.$status.'">
                          <a href="'.$menuitem["url"].'">'.$menuitem["name"].'</a>';

                        submenu($menuitem["submenu_id"], $subpage);
                  echo '</li>';
                }

?>
<li class="menu__item language-switch-btn"><a href="#">EN</a></li>
<li class="menu__item search-btn"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.5 56.6" width="40px" height="56px">
    <path d="M32.5 34.2c8.1-7.1 8.9-19.5 1.7-27.6S14.7-2.3 6.6 4.9C-1.5 12-2.3 24.4 4.9 32.5c5.3 6.1 13.9 8.2 21.4 5.4l5.4 7.6h8.7l-7.9-11.3zm-12.9-2.4c-6.7 0-12.1-5.4-12.1-12.1 0-6.7 5.4-12.1 12.1-12.1 6.7 0 12.1 5.4 12.1 12.1 0 6.6-5.4 12.1-12.1 12.1z"></path>
  </svg></a></li>
<?php

          echo '</ul>';

          echo '<div class="search-modal-wrap">
          <div class="search-modal">
          <input type="text" id="search"  placeholder="Suche" name="search">
          <button class="search-modal-close"><span>＋</span></button>
          </div>
          </div>';

    echo '</nav>';



}



function submenu($page=null, $subpage=null){
  global $current_page;

  $submenuitems = array(
    "programm" => array(
      array(
        "name" => "Kalender",
        "slug" => "kalender",
        "is_no_link" => false,
        "url" => BASE_URL."prototypen/kalender"
      ),
      array(
        "name" => "Themen",
        "slug" => "themen",
        "is_no_link" => false,
        "url" => "#"
      ),
      array(
        "name" => "Projekte",
        "slug" => "projekte",
        "is_no_link" => false,
        "url" => "#"
      )
    ),
    "das-haus" => array(
        array(
          "name" => "Besuch",
          "slug" => "besuch",
          "is_no_link" => false,
          "url" => "#"

        ),
        array(
          "name" => "Über uns",
          "slug" => "ueber-uns",
          "is_no_link" => false,
          "url" => "#"
        ),
        array(
          "name" => "Team",
          "slug" => "team",
          "is_no_link" => false,
          "url" => "#"
        ),
        array(
          "name" => "Architektur",
          "slug" => "architektur",
          "is_no_link" => false,
          "url" => "#"
        ),
        array(
          "name" => "Geschichte",
          "slug" => "geschichte",
          "is_no_link" => false,
          "url" => "#"
        ),
        array(
          "name" => "Presse",
          "slug" => "presse",
          "is_no_link" => false,
          "url" => "#"
        ),
        array(
          "name" => "Kontakt",
          "slug" => "kontakt",
          "is_no_link" => false,
          "url" => "#"
        ),
      ),
      "medien" => array(
        array(
          "name" => "Menu Item",
          "slug" => "slug",
          "is_no_link" => false,
          "url" => "#"

        )


)

  );


if(isset($submenuitems[$page])){
echo '<div class="submenu">';
  echo '<div class="submenu-inner">';
    echo '<ul class="submenu__items">';
      foreach ($submenuitems[$page] as $submenuitem) {
        $status = null;
        /// nur de
        // $submenuitem_url = BASE_URL."".$page."/".$submenuitem["slug"];
        if($subpage == $submenuitem["slug"]) {$status= " submenu__item--selected";}

        echo '<li class="submenu__item '.$status.'">
                  <a href="'.$submenuitem["url"].'">'.$submenuitem["name"].'</a>
            </li>';
        }
    echo '</ul>';
  echo '</div>';
echo '</div>';

}

}



 ?>
