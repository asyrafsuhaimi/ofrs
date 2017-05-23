<?php
    $firstname = "";
    $lastname = "";
    $icno = "";
    $phoneno = "";
    $email = "";
    $customerid = "";
    $uname = "";
    $pword = "";
    $sql_customer ="SELECT * FROM `customerdetail` WHERE username like '".$_SESSION['login']."'";
    $result = mysqli_query($conn,$sql_customer);
    if(mysqli_num_rows($result)>0){
  		while ($customer_result = mysqli_fetch_array($result)) {
  			$firstname = $customer_result['firstname'];
  			$lastname = $customer_result['lastname'];
  			$icno = $customer_result['icno'];
  			$phoneno = $customer_result['phoneno'];
  			$email = $customer_result['email'];
        $customerid = $customer_result['customerid'];
        $uname = $customer_result['username'];
        $pword = $customer_result['password'];
  		}
    }
 ?>
