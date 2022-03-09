<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string
 
  {
      return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }
  
  $query = getGETParameter('text');
  $query = trim($query);
  while (strpos($query, '  ') != false)
  {
    $query = str_replace('  ', ' ', $query);
  }
  echo $query;