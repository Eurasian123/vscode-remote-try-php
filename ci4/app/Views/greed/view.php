<div class="content_header"><h2>ULTRANEWS NETWORK</h2></div>
<div class="greed_arti">
		<?php
		if (empty(esc($news['image']))) {
		}
		else {
		$newsImage = [
		'src'    => esc($news['image']),
		'alt'    => 'News Image.',
		'class'  => 'greed_image-view'
		];
		echo img($newsImage);
		}
		?>

<h2><?= esc($news['title']) ?></h2>

<div class="main"><?= esc($news['body']) ?></div>
</div>