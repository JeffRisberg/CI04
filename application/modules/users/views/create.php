<h2>Create a User</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/save') ?>

  <?php $this->load->view("_form")?>

	<input type="submit" name="submit" value="Create user" /> 
<?php echo form_close(); ?>
