<div class="content_header"><h2>USER FEEDBACK FORM</h2><h4>What do you think?</h4></div>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<div class="form_centered">
<p><span class="error">* required field</span></p>
<form method="post" action="" id="formthing">
<?= csrf_field() ?>

  <span class="form_label">Name: <span class="error">*</span></span> <input type="text" name="name" value="<?= set_value('name') ?>">
  <br><br>
  
  <span class="form_label">E-mail: <span class="error">*</span></span> <input type="text" name="email" value="<?= set_value('email') ?>">
  <br><br>
  
  <span class="form_label">Website Link:</span> <input type="text" name="website" value="<?= set_value('website') ?>">
  <br><br>
  
  <span class="form_label">Comment:</span> <textarea name="comment" rows="5" cols="40"><?= set_value('comment') ?></textarea>
  <br><br>
  
  <span class="form_label">Gender: <span class="error">*</span></span>
  <input type="radio" name="gender" value="female" <?php echo  set_radio('gender', 'F'); ?>><span class="radiotxt">Female</span>
  <input type="radio" name="gender" value="male" <?php echo  set_radio('gender', 'M'); ?>><span class="radiotxt">Male</span>
  <input type="radio" name="gender" value="other" <?php echo  set_radio('gender', 'N'); ?>><span class="radiotxt">Other </span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>
</div>