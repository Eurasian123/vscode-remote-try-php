<div class="content_header"><h2>Guest List</h2></div>
<?php if (! empty($guest) && is_array($guest)): ?>
<?php foreach ($guest as $guest_item): ?>
<div class="wrath_single">
<h2><?= esc($guest_item['name']) ?> (<?= esc($guest_item['gender']) ?>)</h2>
<h4><?= esc($guest_item['email']) ?> - <?= esc($guest_item['website']) ?></h4>
<p><?= esc($guest_item['comment']) ?></p>
</div>
<?php endforeach ?>
<?php else: ?>
<div class="wrath_single">
    <h2>No Feedback.</h2>

    <p>Nobody has given feedback on this website yet.</p>
</div>
<?php endif ?>