<?php

  $customerid = "";
  $facilityname = "";
  $bookingdatefrom = "";
  $bookingdateto ="";
  $bookingdatefrom = "";
  $bookingtime = "";
  $status = "";

  $sql_listbooking = "SELECT * FROM `reservation`";
  $result_listbooking = mysqli_query($conn,$sql_listbooking);
?>
