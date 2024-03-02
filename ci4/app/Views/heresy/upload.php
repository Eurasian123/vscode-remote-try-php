<div class="content_header"><h2>IMAGE SHARING</h2><h4>UPLOAD AN IMAGE</h4></div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<div class="form_centered">
<p><span class="herror">* required field</span></p>
<form action="<?php echo site_url('heresy'); ?>" method="post" id="formthing3">
    <?= csrf_field() ?>
	<span class="form_label">Name: <span class="herror">*</span></span> <input type="text" name="name" value="<?= set_value('name') ?>">
	<br>
	
	<span class="form_label">E-mail: </span> <input type="text" name="email" value="<?= set_value('email') ?>">
	<br>
	
	<span class="form_label">Alias (Display Name): </span> <input type="text" name="alias" value="<?= set_value('alias') ?>">
	<br>
  
	<span class="form_label">Title: <span class="herror">*</span></span>
    <input type="text" name="title" value="<?= set_value('title') ?>">
    <br>
	
	<span class="form_label">Image: <span class="herror">*</span></span>
    <input type="text" name="image" value="<?= set_value('image') ?>">
	<h4>Note: It is preferrable if you can upload an image that is intransient! I recommend uploading it to a drive like <a href="https://drive.google.com/drive/folders/1yV1XWw-PrZDNLAnv-oZajTWggg2JNQ4o?usp=sharing">this</a> for longevity.</h4>
	<br>
	
	<span class="form_label">Caption: </span> <input type="text" name="caption" value="<?= set_value('caption') ?>">
	<br>

    <input type="submit" name="submit" value="Upload image">
</form>
</div>