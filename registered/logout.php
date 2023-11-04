<?php
require '../filingua/server/config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: ../filingua/login.php")
?>