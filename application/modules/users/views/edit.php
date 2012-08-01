<h2>Edit a User</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/update') ?>
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
	  
	<?php $this->load->view("_form")?>
	  
	<input type="submit" name="submit" value="Submit changes" />
<?php echo form_close(); ?>
