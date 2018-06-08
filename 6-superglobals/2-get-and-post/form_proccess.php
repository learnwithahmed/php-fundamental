<?php

  $email = '';
  // اذا تم ارسال الفورم اي اذا تحقق الشرط
  if (isset($_GET['submit'])) {
    if (empty($GET["email"])) {
      $email = 'yes';
    }
  }
  // tests if the form was submitted with the POST method
  //$_SERVER["REQUEST_METHOD"] == 'POST'

?>