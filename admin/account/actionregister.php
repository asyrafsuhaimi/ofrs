<?php
session_start();

if(!isset($_SESSION['login']))
{
  echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
$staffid=$_POST['staffid'];
$username=$_POST['uname'];
$password=$_POST['pword'];
$name=$_POST['name'];
$typeofuser=$_POST['typeofuser'];
$sql_register="INSERT INTO `employee`(`staffid`, `username`, `password`, `name`, `typeofuser`) VALUES ('$staffid','$username','$password','$name','$typeofuser')";

if (mysqli_query($conn,$sql_register)){
	echo '<script language="javascript">';
  echo 'alert("Account Register")';
 	echo '</script>';
	echo "<script language=javascript>window.location='/ofrs/admin/index.php';</script>";
}


 ?>
