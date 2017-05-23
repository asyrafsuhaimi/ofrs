<?php
  $facilityname="";
  $customerid="";
  $bookingdate="";
  $bookingtime="";

  $sql_occupancy="SELECT * FROM occupancy WHERE facilityname like '".$_POST['name']."'";
  $result_occupancy= mysqli_query($conn,$sql_occupancy);





 ?>
