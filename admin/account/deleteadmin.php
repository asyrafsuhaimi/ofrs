<?php
session_start();

if(!isset($_SESSION['login']))
{
  echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}

require_once('../connect.php');
$staffid=$_POST['staffid'];
$sql_delete= "DELETE FROM `employee` WHERE staffid='$staffid'";
if(mysqli_query($conn,$sql_delete)){
  echo '<script language="javascript">';
  echo 'alert("Record Succesfully Deleted")';
  echo '</script>';
  echo "<script language=javascript>window.location='../account/adminaccount.php';</script>";
}
else {
  echo "Error Terminating Reservation";
}
?>
