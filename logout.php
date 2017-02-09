<?php
if (!session_id()||$_SESSION()=='') {
  session_start();
}
if (isset($_SESSION['username'])) {
	session_unset($_SESSION['username']);
	session_destroy();
	header('Location:index.php');
}
?>