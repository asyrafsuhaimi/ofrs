<?php
  $reservationid = $_POST['reservationid'];
  $customerid = "";
  $facilityname = "";
  $facilityimage = "";
  $facilitydescription ="";
  $location = "";
  $price = "";
  $facilityid = "";
  $bookingdatefrom = "";
  $bookingdateto ="";
  $bookingtime = "";
  $status = "";
  $firstname = "";
  $lastname = "";
  $icno = "";
  $phoneno = "";
  $email = "";
  $uname = "";
  $pword = "";
  $sql_detailbooking = "SELECT * FROM `reservation` WHERE reservationid = '$reservationid' ";
  $result_detailbooking = mysqli_query($conn,$sql_detailbooking);
  if (mysqli_num_rows($result_detailbooking)>0) {
    while($status_detailbooking = mysqli_fetch_array($result_detailbooking))
    {
      $customerid = $status_detailbooking['customerid'];
      $facilityname = $status_detailbooking['facilityname'];
      $bookingdatefrom = $status_detailbooking['bookingdatefrom'];
      $bookingdateto = $status_detailbooking['bookingdateto'];
      $bookingtime = $status_detailbooking['bookingtime'];
      $status = $status_detailbooking['status'];
    }
  }
  $sql_customer ="SELECT * FROM `customerdetail` WHERE customerid='$customerid'";
  $result = mysqli_query($conn,$sql_customer);
  if(mysqli_num_rows($result)>0){
    while ($customer_result = mysqli_fetch_array($result)) {
      $firstname = $customer_result['firstname'];
      $lastname = $customer_result['lastname'];
      $icno = $customer_result['icno'];
      $phoneno = $customer_result['phoneno'];
      $email = $customer_result['email'];
      $uname = $customer_result['username'];
      $pword = $customer_result['password'];
    }
  }
  $sql_facility ="SELECT * FROM `facility` WHERE name='$facilityname'";
	$result = mysqli_query($conn,$sql_facility);
	if(mysqli_num_rows($result)>0){
		while ($facility_result = mysqli_fetch_array($result)) {
			$facilitydescription = $facility_result['facilitydescription'];
			$facilityimage = $facility_result['facilityimage'];
			$location = $facility_result['location'];
			$price = $facility_result['price'];
			$facilityid = $facility_result['facilityid'];

		}


	}
 ?>
