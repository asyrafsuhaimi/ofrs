<?php
session_start();

if(!isset($_SESSION['login']))
{
  echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}

require_once('../connect.php');
$sql_delete1= "DELETE FROM `customerdetail` WHERE username='$uname'";
if(mysqli_query($conn,$sql_delete1)){
  echo '<script language="javascript">';
  echo 'alert("Record Succesfully Deleted")';
  echo '</script>';
  echo "<script language=javascript>window.location='../account/customeraccount.php';</script>";
}
else {
  echo "Error Terminating Reservation";
}
?>
