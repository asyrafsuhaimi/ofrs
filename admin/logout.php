<?php
session_start();
	unset($_SESSION['login']);
	echo "<script language=javascript>alert('You Had Succesfully Logout.');window.location='/ofrs/login.php';</script>";
?>
