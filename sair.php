<?php
session_start();
$SESSION_['login'] = null;
session_destroy();
header("Location:../index.php")
?>