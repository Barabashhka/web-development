<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string 
  
  {
     return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }
  
  $query = getGETParameter('identifier');
  $first = substr($query, 0, 1);
  $query = substr($query, 1);
  if (ctype_alpha($first))
  {
      $flag = true;
      while (($query <> '') and ($flag))
      {
          $symbol = substr($query, 0, 1);
          if ((is_numeric($symbol)) or (ctype_alpha($symbol)))
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