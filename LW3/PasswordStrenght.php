<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string
  {
      return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }
  $password = getGETParameter('password');
  $strenght = 0;
  $len = strlen($password);
  $strenght = 4 * $len + $strenght;
  $copy = $password;
  $number = 0;
  while ($copy <> '')
  {
      $symbol = substr($copy, 0, 1);
      if (is_numeric($symbol))
      {
          $number = $number + 1;
      }
      $copy = substr($copy, 1);
  }
  $strenght = $strenght + 4 * $number;
  $copy = $password;
  $uppercase = 0;
  while ($copy <> '')
  {
      $symbol = substr($copy, 0, 1);
      if (ctype_upper($symbol))
      {
          $uppercase = $uppercase + 1;
      }
      $copy = substr($copy, 1);
  }
  if ($uppercase <> 0)
  {
      $strenght = $strenght + 2 * ($len - $uppercase);
  }
  $copy = $password;
  $lowercase = 0;
  while ($copy <> '')
  {
      $symbol = substr($copy, 0, 1);
      if (ctype_lower($symbol))
      {
          $lowercase = $lowercase + 1;
      }
      $copy = substr($copy, 1);
  }
  if ($lowercase <> 0)
  {
      $strenght = $strenght + 2 * ($len - $lowercase);
  }
  $repeat = str_split($password, $lenght = 1);
  $repeat = array_count_values($repeat);
  foreach($repeat as $val)
  {
      if ($val > 1)
      {
          $strenght = $strenght - $val;
      }
  }
  echo $strenght;