<?php
$bookingdate="";
//$facilityname=$_POST['name'];
$sql_date = "SELECT * FROM `occupancy` WHERE facilityname = 'Main Hall'";
$result_date = mysqli_query($conn,$sql_date);
if(mysqli_num_rows($result_date)>0){
  while($status_date = mysqli_fetch_array(result_date))
  {
    $bookingdate=$status_date['bookingdate'];
    echo$bookingdate;
  }
}
?>
