<?php require('partials/header.php'); ?>

<ul>
  <?php foreach($users as $user) : ?>
  <li>
    <?= $user->name; ?>
  </li>
  <?php endforeach; ?>
</ul>


<?php require('partials/footer.php'); ?>





