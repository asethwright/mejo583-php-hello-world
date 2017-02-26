<?php
  $task = 'My First Task';
  $description = 'Etiam commodo semper aliquet. Fusce.';
  $priority = 4;
  $completed = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1><?php echo $task; ?></h1>
  <p><?= $description; ?></p>
  <p><?php if ($priority > 3) {
    echo "It's a priority";
  } ?></p>
  <p><?php if ($completed === true) {
    echo 'Completed';
  } else {
    echo 'Not Completed';
  } ?></p>

  <?php if ($completed === true) : ?>
  <div class="row">
    <div class="col-xs-12">
      <h1>Here is my completed happy html</h1>
      <p>Completed!</p>
    </div>
  </div>
  <?php else :  ?>
  <div class="row">
    <div class="col-xs-12">
      <h1>Here is my not completed sad html</h1>
      <p>Not Completed!</p>
    </div>
  </div>
  <?php endif; ?>
</body>
</html>
