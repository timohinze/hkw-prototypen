<?php
function linkrail($linkrail){
 if($linkrail){ ?>
				<nav class="projektmenu-wrap">
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
						</nav>

	<?php  }
}
?>
