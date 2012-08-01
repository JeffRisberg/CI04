<div>
Email: <?php echo $user['email'] ?>
</div>
<div>
Password: <?php echo $user['password'] ?>
</div>
<?php echo anchor('users/edit/' . $user['id'], 'Edit'); ?>



