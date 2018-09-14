<?php require('partials/header.php'); ?>

  <h1>Submit Your Name</h1>

  <form method="POST" action="/names">
    <input type="text" name="name">
    <button type="submit">Submit</button>
  </form>

<?php require('partials/footer.php'); ?>