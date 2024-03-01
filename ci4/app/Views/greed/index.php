<div class="greed_header"><h2>ULTRANEWS NETWORK</h2></div>
<div class="greed_agg">
<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="greed/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

<button class="newsbutton" id="newnbtn" onclick="location.href='greed/new'">SUBMIT YOUR OWN</button>

</div>