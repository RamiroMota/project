<?php
if (!isset($_SESSION)) {
  session_start();
}
session_destroy();
$_SESSION['user'] = NULL;
$_SESSION['nivel'] = NULL;
header("Location:".URL."");

?>