<?php
  # $_SERVER SUPERGLOBAL

  // Prepare all info for server
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    //'Host Header'    => $_SERVER['HTTP_HEADER'],
    'Server Software'  => $_SERVER['SERVER_SOFTWARE'],
    'Document Root'    => $_SERVER['DOCUMENT_ROOT'],
    // useful in form, when you want to submit to the same page you are in, you can use it in action
    'Current Page'     => $_SERVER['PHP_SELF'], 
    'Script Name'      => $_SERVER['SCRIPT_NAME'],
    'Absolute Path'    => $_SERVER['SCRIPT_FILENAME'],
  ];

  //echo $server['Server Software'];
  //print_r($_SERVER['SCRIPT_FILENAME']);

  // Prepare info all for Client/Browser
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP'          => $_SERVER['REMOTE_ADDR'], // return user's IP address
    'Remote Port'        => $_SERVER['REMOTE_PORT'],
  ];
  ?>