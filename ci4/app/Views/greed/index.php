<div class="content_header"><h2>ULTRANEWS NETWORK</h2></div>
<div class="greed_agg">
<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
		<div class="greed_image-contain">
		<?php
		if (empty(esc($news_item['image']))) {
		$newsImage = [
		'src'    => 'images/image-default.webp',
		'alt'    => 'News Image.',
		'class'  => 'greed_image_agg',
		];
		}
		else {
		$newsImage = [
		'src'    => esc($news_item['image']),
		'alt'    => 'News Image.',
		'class'  => 'greed_image_agg',
		];
		}
		echo img($newsImage);
		?>
		</div>
        <h3><?= esc($news_item['title']) ?></h3>

        <div>
            <?php
			if (strlen(esc($news_item['body'])) > 150) {
				echo substr(esc($news_item['body']),0,150) . " ...";
			}
			else {
				echo esc($news_item['body']);
			}
			?>
        </div>
        <p><a href="greed/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

<button class="newsbutton" id="newnbtn" onclick="location.href='greed/new'">SUBMIT YOUR OWN</button>

</div>