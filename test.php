<?php
$done = 'don';
ob_start();
header("Content-type: application/json");


print json_encode($done);


exit;
