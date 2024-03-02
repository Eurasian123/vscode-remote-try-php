<div class="content_header"><h2>ULTRANEWS NETWORK</h2><h4>CREATE A NEWS ARTICLE</h4></div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<div class="form_centered">
<form action="" method="post" id="formthing2">
    <?= csrf_field() ?>
	
	<span class="form_label">Title:</span>
    <input type="text" name="title" value="<?= set_value('title') ?>">
    <br><br>
	
	<span class="form_label">Image:</span>
    <input type="text" name="image" value="<?= set_value('image') ?>">
    <br><br>
	
	<span class="form_label">Content:</span>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br><br>
	

    <input type="submit" name="submit" value="Create news item">
</form>
</div>