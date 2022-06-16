<?php
  header("Content-Type: text/plain");

  function getPOSTParameter(string $name): ?string
  {
      return isset($_POST[$name]) ? (string) $_POST[$name] : null;
  }

  $name = getPOSTParameter('your_name');
  $email = getPOSTParameter('your_email');
  $specialization = getPOSTParameter('your_specialization');
  if ((!empty($email)) && (!empty($name)) && ($specialization != 'Деятельность')) 
  {
      $filename = 'data/' . $email . '.txt';
      if (file_exists($filename)) {
          echo 'You are already enrolled in the course';
      } else {
          $file = fopen($filename, 'w');
          fwrite($file, 'Name: ' . $name . PHP_EOL);
          fwrite($file, 'Email: ' . $email . PHP_EOL);
          fwrite($file, 'Specialization: ' . $specialization . PHP_EOL);
          fclose($file);
      }
  } else {
      echo 'Did`t enter data';
  }
  return;