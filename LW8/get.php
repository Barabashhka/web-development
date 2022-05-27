<?php
  header("Content-Type: text/plain");

  function getPOSTParameter(string $name): ?string
  {
      return isset($_POST[$name]) ? (string) $_POST[$name] : null;
  }

  $email = getPOSTParameter('email');
  if (!empty($email)) 
  {
      $filename = 'data/' . $email . '.txt';
      if (file_exists($filename)) {
          readfile($filename);
      } else {
          echo 'Данного файла не существует';
      }
  } else {
      echo 'Didn`t enter email';
  }