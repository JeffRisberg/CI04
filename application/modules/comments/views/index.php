<table>
    <tr>
      <th>Username</th>
    </tr>
<?php foreach ($comments as $comment): ?>
    <tr>
    <td><?php echo $comment['username']; ?></td>
    <td><?php echo $comment['fname'] ?></td>
    <td><?php echo $comment['lname'] ?></td>
    <td><?php echo $comment['email'] ?></td>
    <td><?php echo $comment['password'] ?></td>
    </tr>
<?php endforeach ?>
</table>