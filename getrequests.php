<?php
  $minPriority = $_GET['priority'];
  // print_r($minPriority);
  // exit();
  $tasks = [
    [
      'title' => 'My First Todo',
      'description' => 'Nunc sed semper mauris. Morbi.',
      'priority' => 2,
      'completed' => false
    ],
    [
      'title' => 'My Second Todo',
      'description' => 'Duis quis elit sollicitudin, rhoncus.',
      'priority' => 5,
      'completed' => true
    ],
    [
      'title' => 'My Third Todo',
      'description' => 'Vestibulum non ex id est.',
      'priority' => 8,
      'completed' => false
    ],
    [
      'title' => 'My Fourth Todo',
      'description' => 'Aenean tincidunt est a eros.',
      'priority' => 10,
      'completed' => false
    ]
  ];

  function checkPriority ($t) {
    return $t['priority'] >= $minPriority;
  }

  $myStringA = 'Seth';
  $myStringB = 'Wright';
  $myIntA = 2;
  $myIntB = 10;
  $myFullName = $myStringA . ' ' . $myStringB; // Seth Wright
  $mySum = $myIntA + $myIntB; // 12
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1>Priority Todos</h1>
  <p>This page is to show priority todos only. The current priority is at least <?= $minPriority; ?>.</p>

  <?php for ($i = 0; $i < 10; $i++) {
  echo $i;
  } ?>

  <?php foreach ($tasks as $task) : ?>
    <?php if (checkPriority($task)) : ?>
    <div class="task">
      <h3><?= $task['title']; ?> <span class="completed"><?= ($task['completed']) ? '&check;' : ''; ?></span></h3>
      <p><?= $task['description']; ?></p>
    </div>
    <?php endif; ?>
  <?php endforeach; ?>

</body>
</html>
