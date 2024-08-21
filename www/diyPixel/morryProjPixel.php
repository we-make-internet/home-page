<?php

//THIS RETURNS THE IMAGE
header('Content-Type: image/gif');
//this is non-caching stuff
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
readfile('pixel.gif');

// Get other info
$ip = $_SERVER['REMOTE_ADDR'];
$referringUrl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';
$queryParams = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : 'No query parameters';


//THIS IS THE SCRIPT FOR THE ACTUAL TRACKING
$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$txt = $date.",". $ip.",". $referringUrl.",". $queryParams;
$myfile = file_put_contents('/var/www/morryProjLog.txt', $txt.PHP_EOL , FILE_APPEND);
exit;

?>