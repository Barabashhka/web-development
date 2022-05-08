<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string
  {
      return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }
  $first_name = getGETParameter('first_name');
  $last_name = getGETParameter('last_name');
  $email = getGETParameter('email');
  $age = getGETParameter('age');
  if (($email != null) && (strlen($email) > 0)) 
  {
      $filename = 'data/' . $email . '.txt';
      if (file_exists($filename)) {
          $file = fopen($filename, 'r+');
          $arr_file = file($filename);
          if (($first_name != null) || ($last_name != null) || ($age != null)) {
              ftruncate($file, 0);
              if ($first_name != null){
                  $arr_file[0] = 'First name: ' . $first_name . "\r\n";
              }
              if ($last_name != null){
                  $arr_file[1] = 'Last name: ' . $last_name . "\r\n";
              }
              if ($first_name != null){
                  $arr_file[3] = 'Age: ' . $age . "\r\n";
              }
              fwrite($file, $arr_file[0]);
              fwrite($file, $arr_file[1]);
              fwrite($file, $arr_file[2]);
              fwrite($file, $arr_file[3]);
          }
          fclose($file);
      } else {
          $file = fopen($filename, 'w');
          fwrite($file, 'First name: ' . $first_name . "\r\n");
          fwrite($file, 'Last name: ' . $last_name . "\r\n");
          fwrite($file, 'Email: ' . $email . "\r\n");
          fwrite($file, 'Age: ' . $age . "\r\n");
          fclose($file);
      }
  } else {
      echo 'Didn`t enter email';
  }
  
  