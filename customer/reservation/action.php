<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/Asyraf/uvrs/Userlogin.php';</script>";
}
include('../connect.php');
include('../customerconfig.php');

$facilityname = $_POST['facilityname'];
$bookingdatefrom = $_POST['bookingdatefrom'];
$bookingdateto = $_POST['bookingdateto'];
$bookingtime = $_POST['bookingtime'];
$status = "Pending Approval";
$startdate = $_POST['bookingdatefrom'];
$enddate = $_POST['bookingdateto'];
$sql_reservation="INSERT INTO reservation(customerid, facilityname, bookingdatefrom,bookingdateto, bookingtime, status) VALUES ('$customerid','$facilityname','$bookingdatefrom','$bookingdateto','$bookingtime','$status')";

while (strtotime($startdate) <= strtotime($enddate)) {
	$sql_occupancy="INSERT INTO occupancy(facilityname,customerid,bookingdate,bookingtime) VALUES('$facilityname','$customerid','$startdate','$bookingtime')";
	if(!mysqli_query($conn,$sql_occupancy)){
		echo "error";
	}
	$startdate = date ("Y-m-d", strtotime("+1 day", strtotime($startdate)));
}

if (mysqli_query($conn,$sql_reservation)){
	echo '<script language="javascript">';
  echo 'alert("Facility Reserved")';
 	echo '</script>';
	echo "<script language=javascript>window.location='/ofrs/customer/index.php';</script>";
}
?>
