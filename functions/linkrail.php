<style>
.scrollable-menu-flickity .flickity-button-icon{
  fill: black!important;
}

.scrollable-menu-flickity .flickity-prev-next-button{
  height: 1em!important;
  width: 1em!important;
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


</style>

<?php



function linkrail($linkrail){
 if($linkrail){ ?>
				<nav class="projektmenu-wrap">
          <div class="projektmenu-inner scrollable-menu-flickity">
								<ul class="projektmenu">
									 <?php
												foreach ($linkrail as $linkrailitem) {
													$status = null;

													if(!empty($linkrailitem["slug"])){
													 $linkrailitem_url = BASE_URL."".$linkrailitem["slug"];
												 }else{

													 $linkrailitem_url ='#';
											 }

													echo '<li class="projektmenu__item '.$linkrailitem["classes"].'">
																		<a href="'.$linkrailitem_url.'">'.$linkrailitem["name"].'</a>
															</li>';
													}
													?>

										</ul>
                  </div>
						</nav>

	<?php  }
}
?>
