<?php
    $staffid= "";
    $uname = "";
    $password = "";
    $name = "";
    $typeofuser = "";
    $sql_admin ="SELECT * FROM `employee` WHERE username like '".$_SESSION['login']."'";
    $result = mysqli_query($conn,$sql_admin);
    if(mysqli_num_rows($result)>0){
  		while ($admin_result = mysqli_fetch_array($result)) {
  			$staffid = $admin_result['staffid'];
  			$uname = $admin_result['username'];
  			$password= $admin_result['password'];
  			$name = $admin_result['name'];
        $typeofuser = $admin_result['typeofuser'];
  		}
    }
 ?>
