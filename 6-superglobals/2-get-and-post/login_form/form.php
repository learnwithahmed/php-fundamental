<?php include('form_proccess.php');?>
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
      <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="email" type="text" placeholder="Email*" value="<?php echo $email; ?>"/>
        <span><?php echo $emailError; ?></span>
        <input name="password" type="password" placeholder="Password*" value="<?php echo $password; ?>"/>
        <span><?php echo $passwordError; ?></span>
        <input type="submit" name="submit" class="btn" value="Sign In"/>
      </form>
    </div>
  </body>

</html>