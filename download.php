<?php

$file_url = 'https://jaimego.000webhost.com/assets/cv/cv.zip';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
readfile($file_url);
?>
