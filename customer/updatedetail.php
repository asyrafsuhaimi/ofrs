<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
    require_once('../connect.php');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $icno = $_POST['icno'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $customerid = $_POST['customerid'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $sql_update ="UPDATE `customerdetail` SET firstname= '$firstname', lastname= '$lastname', icno= '$icno',phoneno= '$phoneno', email= '$email', username= '$uname', password= '$pword' WHERE customerid= '$customerid'";



    if(mysqli_query($conn,$sql_update))
    {
      echo '<script language="javascript">';
  		echo 'alert("Record Succesfully Updated")';
  		echo '</script>';
  		echo "<script language=javascript>window.location='/ofrs/customer/accountdetail.php';</script>";
    }
    else
    {
      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
 ?>
