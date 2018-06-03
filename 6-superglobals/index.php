<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Super Globals</title>
  <!-- lets import css -->
</head>
<body>
  <h1>Server Information</h1>
  <?php if($server): ?>
    <ul>
      <?php foreach($server as $key => $value): ?>
        <li>
          <strong><?php echo $key; ?>: </strong> <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <h1>Client Information</h1>
  <?php if($client): ?>
    <ul>
      <?php foreach($client as $key => $value): ?>
        <li>
          <strong><?php echo $key; ?>: </strong> <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>
</html>