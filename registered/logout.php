<?php
require '../server/config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: /filingua/index.php")
?>