<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
$reservationid = $_POST['reservationid'];
$status = "Disapprove";
$sql_approve="UPDATE `reservation` SET status = '$status' WHERE reservationid='$reservationid'";

if(mysqli_query($conn,$sql_approve))
{
  echo '<script language="javascript">';
  echo 'alert("Reservation Succesfully Disapprove")';
  echo '</script>';
  echo "<script language=javascript>window.location='/ofrs/admin/reservation/customerbooking.php';</script>";
}
else
{
  echo "Error: " . $sql_approve . "<br>" . mysqli_error($conn);
}



 ?>
