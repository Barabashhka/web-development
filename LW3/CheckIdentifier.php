<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string 
  
  {
     return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }

  $query = getGETParameter('identifier');
  $first = substr($query, 0, 1);
  $query = substr($query, 1);
  if ((($first >= 'a') and ($first <= 'z')) or (($first >= 'A') and ($first <= 'Z')))
  {
      $flag = true;
      while (($query <> '') and ($flag))
      {
          $symbol = substr($query, 0, 1);
          if ((($symbol >= 'a') and ($symbol<= 'z')) or (($symbol >= 'A') and ($symbol <= 'Z')) or (($symbol >= '0') and ($symbol <= '9')))
          {
              $query = substr($query, 1);
          }
          else
          {
              $flag = false;
          }
      }
      if ($flag)
      {
          echo 'Yes';
      }
      else
      {
          echo 'No';
      }
  }
  else
  {
      echo 'No';
  }