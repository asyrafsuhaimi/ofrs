<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/Asyraf/uvrs/Userlogin.php';</script>";
}
include('../connect.php');
include('../customerconfig.php');

$facilityname = $_POST['facilityname'];
$bookingdate = $_POST['bookingdate'];
$bookingtime = $_POST['bookingtime'];

$sql23="INSERT INTO reservation(customerid, facilityname, bookingdate, bookingtime) VALUES ('$customerid',\''$facilityname'\','$bookingdate','$bookingtime')";

echo $customerid;
echo $facilityname;
echo $bookingtime;
echo $bookingdate;
if (mysqli_query($conn,$sql23)){
	echo '<script language="javascript">';
  	echo 'alert("Facility Reserved")';
 	echo '</script>';
}
?>