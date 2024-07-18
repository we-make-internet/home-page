<?php

if ($req['method'] == 'POST'):
[
  'sequences' => $sequences,
  'info' => $info
] = $_POST;

$issue_date = new DateTime($issue_date_str);

file_put_contents('./submissions.txt', $txt.PHP_EOL, FILE_APPEND | LOCK_EX);

header("Location: /switch-emoji/success");
http_response_code(303);

?>
