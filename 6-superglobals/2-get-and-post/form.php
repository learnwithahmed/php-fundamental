<?php require('form_proccess.php'); ?>
<!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css">
  </head>

  <body>
    <div class="container">
      <form class="form" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input name="email" type="text" placeholder="Email*"/>
        <input name="password" type="password" placeholder="Password*"/>
        <input type="submit" class="btn" value="Sign IN"/>
      </form>
    </div>
  </body>

</html>