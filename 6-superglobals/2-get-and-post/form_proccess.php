<?php

  // Input variables
  $email = $password = '';

  // Error message holders for each field
  $emailError = $passwordError = '';

  if (isset($_POST['submit'])) {

    if (empty($_POST['email'])) {
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "You must enter a valid email address!";
      }
    } else {
      $emailError = "This field cannot be empty.";
    }

    if (!empty($_POST['password'])) {
      $password = $_POST['password'];
    } else {
      $passwordError = "This field cannot be empty.";
    }
  }

?>