<?php
  $key = $_POST['key'] ?? false;
  echo var_dump($_POST);
  echo var_dump($key);
  if ($key == "test") {
    shell_exec("cd /var/www && git pull");
    http_response_code(200);
    die();
  }
  http_response_code(403);
  die();
?>
