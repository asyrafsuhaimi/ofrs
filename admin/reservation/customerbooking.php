<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
require_once('listbooking.php');
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/customerbooking.css"type="text/css">


</head>

<body>

<div id="wrapper">
<div id="header">
<img src="/ofrs/img/title.png" alt="img/Logo UTeM" width="500" >
<img src="/ofrs/img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
</div>

<div id="navigation">
	<ul>
	<li><a href="/ofrs/admin/index.php">Home</a></li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Facilities</a>
		<div class="dropdown-content">
			<a href="/ofrs/admin/reservation/customerbooking.php">Customer Reservation</a>
		</div>
	</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Accounts</a>
		<div class="dropdown-content">
			<a href="/ofrs/admin/account/customeraccount.php">Customer Accounts</a>
			<a href="/ofrs/admin/account/registeradmin.php">Add Admin Accounts</a>
			<a href="/ofrs/admin/account/adminaccount.php">Admin Accounts</a>
		</div>
	</li>
	<li style="float:right" class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
		<div class="dropdown-content">
			<a href="/ofrs/admin/accountdetail.php">Account Details </a>
			<a href="../logout.php">Logout </a>
		</div>
	</li>
	<li><a href="../report.php">Report</a></li>
	</ul>
</div>
<div id="mr">
	<tr>
			<td height="33" id="menu">
            <marquee class="font14" scrollamount="2"><font color="#F00"><strong>&#10003;</strong></font> Any facilities that customer want to rent avalaible on UTeM &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font > Facilities that avalaible on UTeM included : Main Hall, Sport Centre, and others &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font> For more information can contact the administrator</marquee>
            </td>
	</tr>
</div>
<div id="content-container">
<div id="main">
<h3 class="backdrop">Customer Reservation</h3>
<table class="center">

  <?php
  echo "<tr><th>Customer ID</th><th>Facility Name</th><th>Booking Date From</th><th>Booking Date To</th><th>Booking Time</th><th>Status</th><th>Action</th></tr>";
  if(mysqli_num_rows($result_listbooking)>0)
  {
    while($status_result = mysqli_fetch_array($result_listbooking)){
      $customerid = $status_result['customerid'];
      $facilityname = $status_result['facilityname'];
      $bookingdatefrom = $status_result['bookingdatefrom'];
      $bookingdateto = $status_result['bookingdateto'];
      $bookingtime = $status_result['bookingtime'];
      $status = $status_result['status'];
      $reservationid = $status_result['reservationid'];
      if($status=="Pending Approval")
      {
      echo "<tr><td>".$customerid."</td><td>".$facilityname."</td><td>".$bookingdatefrom."</td><td>".$bookingdateto."</td><td>".$bookingtime."</td><td>".$status."</td><td><form method='post' action='../reservation/detail.php'><button type='submit' value='".$reservationid."' name='reservationid'> Details</button></form></td></tr>";
      }
      else
      echo "<tr><td>".$customerid."</td><td>".$facilityname."</td><td>".$bookingdatefrom."</td><td>".$bookingdateto."</td><td>".$bookingtime."</td><td>".$status."</td><td><form method='post' action='../reservation/detail1.php'><button type='submit' value='".$reservationid."' name='reservationid'> Details</button></form></td></tr>";
    }
  }
  else {

      echo "<tr><td colspan='6' style='text-align:center'>No Result Found</td></tr>";
  }
   ?>
</table>
</div>

<!--
add comment to test tortoiseSVN
 -->

<div id="footer">
<CENTER>Copyright &copy UTeM, 2017</CENTER>
</div>

</div>

</div>

</body>
</html>
