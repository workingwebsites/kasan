<?php
/* REQUIRES HOME BOX */

$ar_homebox = wws_get_homebox();

$i = -1;	// To set first one at 0
$mdNum = 3;

foreach ($ar_homebox as $homebox) {
	++$i;

	//Set vars
	$image = isset($homebox['image']) ? $homebox['image'] : NULL;
	$title = isset($homebox['title']) ? $homebox['title'] : NULL;
	$content = isset($homebox['content']) ? wpautop($homebox['content']) : NULL;
	//$link = isset($homebox['link']) ? '<a href="' . $homebox['link'] . '" class="homebox_link_a">More</a>' : NULL;

	$link = isset($homebox['link']) ? $homebox['link'] : NULL;
	$strLink = isset($homebox['link']) ? '<a href="' . $link . '" class="homebox_link_a btn">More</a>' : NULL;

?>
	<div id="homebox_<?php echo $i ?>" class="col-md-<?php echo $mdNum ?> homebox_container">
		<div class="homebox">
			<a href="<?php echo $link ?>">
				<div class="homebox_image"><?php echo  $image ?></div>
				<div class="homebox_text">
					<h2 class="homebox_title"><?php echo  $title ?></h2>
					<div class="homebox_content"><?php echo  $content ?></div>
					<div class="homebox_link"><?php echo  $strLink ?></div>
				</div>
			</a>
		</div>
	</div>
<?php
}
?>