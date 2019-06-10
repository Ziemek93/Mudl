<?php

session_start();


unset($_SESSION['Id']);
unset($_SESSION['login']);
unset($_SESSION['name']);
unset($_SESSION['Type']);

unset($_SESSION);
session_destroy();
exit(header("Location: index.php"));
