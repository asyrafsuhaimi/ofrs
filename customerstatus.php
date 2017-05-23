<?php
$facilityname = "";
$bookingdatefrom = "";
$bookingdateto = "";
$bookingtime = "";
$status = "";
$reservation="";

  $sql_status = "SELECT * FROM `reservation` WHERE customerid like '".$customerid."'and status like 'Pending Approval'";
  $sql_status1 = "SELECT * FROM `reservation` WHERE customerid like '".$customerid."'and status like 'Approve'";
  $result_status = mysqli_query($conn,$sql_status);
  $result_status1 = mysqli_query($conn,$sql_status1);


 ?>
