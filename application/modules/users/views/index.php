<?php echo anchor('users/create', 'Create New User'); ?>

<table>
    <tr>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
<?php foreach ($users as $user): ?>
    <tr>
    <td><?php echo anchor('users/view/' . $user['id'], $user['username']); ?></td>
    <td><?php echo $user['fname'] ?></td>
    <td><?php echo $user['lname'] ?></td>
    <td><?php echo $user['email'] ?></td>
    <td><?php echo $user['password'] ?></td>
    <td><?php echo anchor('users/edit/' . $user['id'], "Edit"); ?></td>
    </tr>
<?php endforeach ?>
</table>