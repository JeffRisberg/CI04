
  <?php if (isset($user) && $user['id']) { ?>
	  <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
	<?php } ?>
	
	<label for="name">Username</label>
	<input type="text" name="username" 
	  value="<?php if (isset($user)) echo $user['username']; ?>" />
	<br />
	
  <label for="name">First name</label>
	<input type="text" name="fname" 
	  value="<?php if (isset($user)) echo $user['fname']; ?>" />
	<br />
	
  <label for="name">Last name</label>
	<input type="text" name="lname" 
	  value="<?php if (isset($user)) echo $user['lname']; ?>" />
	<br />
	
	<label for="name">Email</label>
	<input type="text" name="email" 
	  value="<?php if (isset($user)) echo $user['email']; ?>" />
	<br />
	
	<label for="password">Password</label>
	<input type="text" name="password" 
	  value="<?php if (isset($user)) echo $user['password']; ?>" />
	<br />
	