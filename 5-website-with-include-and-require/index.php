<?php require_once 'inc/header.php' ?>
<?php include 'inc/names.php' ?>
    <h1>Home Page</h1>
    <h2>Hello <?php echo $name; ?> </h2>

    <ul>
      <?php foreach ($people as $name => $city): ?>
        <li><strong><?php echo$name; ?> </strong>: <?php echo $city; ?></li>
      <?php endforeach; ?>
    </ul>
<?php include 'inc/footer.php' ?>