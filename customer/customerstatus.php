<?php
  $facilityname = "";
  $bookingdatefrom = "";
  $bookingdateto = "";
  $bookingtime = "";
  $status = "";
  $reservation="";

  $sql_status = "SELECT * FROM `reservation` WHERE customerid like '".$customerid."'and status like 'Pending Approval'";
  $sql_status1 = "SELECT * FROM `reservation` WHERE customerid like '".$customerid."'and status like 'Approve'";
  $sql_status2 = "SELECT * FROM `reservation` WHERE customerid like '".$customerid."'and status like 'Disapprove'";
  $result_status = mysqli_query($conn,$sql_status);
  $result_status1 = mysqli_query($conn,$sql_status1);
  $result_status2 = mysqli_query($conn,$sql_status2);

 ?>
