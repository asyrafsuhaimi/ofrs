<?php
session_start();

if(!isset($_SESSION['login']))
{
  echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}

require_once('connect.php');
require_once('customerconfig.php');
$delete= $_POST['delete'];
echo $delete;
$sql_delete= "DELETE FROM `reservation` WHERE reservationid=$delete";
if(mysqli_query($conn,$sql_delete)){
  echo '<script language="javascript">';
  echo 'alert("Record Succesfully Deleted")';
  echo '</script>';
  echo "<script language=javascript>window.location='../customer/reservation/status.php';</script>";
}
else {
  echo "Error Terminating Reservation";
}



 ?>
