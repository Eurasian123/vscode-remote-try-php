<div class="content_header"><h2>IMAGE SHARING</h2>
<h5><i>Yes, I stole this idea from a previous winner.</i></h5>
<?php if (! empty($images) && is_array($images)): ?>
	</div>
	<button class="heresy_button" onclick="location.href='heresy/upload'">UPLOAD AN IMAGE</button>
	<div class="heresy_container">
    <?php foreach ($images as $image_item): ?>
	<div class="heresy_item">
		<h3><?= esc($image_item['title']) ?></h3>
		<?php
		$heresyImage = [
		'src'    => esc($image_item['image']),
		'alt'    => 'The image no longer exists.',
		'class'  => 'heresy_image',
		];
		echo img($heresyImage);
		?>
		<p><i><?= esc($image_item['caption']) ?></i></p>
        <div><h4>
            <?php
			if (empty(esc($image_item['alias']))) {
				echo esc($image_item['name']);
			}
			else {
				echo esc($image_item['alias']);
			}
			?>
		</h4>
        </div>
		</div>
    <?php endforeach ?>
	</div>
<?php else: ?>

    <h4>Nothing here.</h4>
	</div>
	<button class="heresy_button" onclick="location.href='heresy/upload'">UPLOAD AN IMAGE</button>

<?php endif ?>