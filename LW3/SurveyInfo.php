<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string
  {
      return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }
  $email = getGETParameter('email');
  if (($email != null) && (strlen($email) > 0)) 
  {
      $filename = 'data/' . $email . '.txt';
      if (file_exists($filename)) {
          readfile($filename);
      } else {
          echo 'Didn`t find';
      }
  } else {
      echo 'Didn`t enter email';
  }