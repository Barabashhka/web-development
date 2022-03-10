<?php
  header("Content-Type: text/plain");
  function getGETParameter(string $name): ?string

  {
      return isset($_GET[$name]) ? (string) $_GET[$name] : null;
  }
  