<?php

ob_start();
header("Content-type: application/json");

$phpError = ' gawno';

echo json_encode($phpError);
