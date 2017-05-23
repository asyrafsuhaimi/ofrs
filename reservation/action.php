<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
include('../connect.php');
include('../customerconfig.php');

$facilityname = $_POST['facilityname'];
$bookingdate = $_POST['bookingdate'];
$bookingtime = $_POST['bookingtime'];
$status = "Pending Approval";

$sql_reservation="INSERT INTO reservation(customerid, facilityname, bookingdate, bookingtime, status) VALUES ('$customerid','$facilityname','$bookingdate','$bookingtime','$status')";

if (mysqli_query($conn,$sql_reservation)){
	echo '<script language="javascript">';
  echo 'alert("Facility Reserved")';
 	echo '</script>';
	echo "<script language=javascript>window.location='/ofrs/index.php';</script>";
}
?>
