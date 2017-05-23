<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}

require_once('../connect.php');
require_once('../customerconfig.php');
require_once('../customerstatus.php');
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/status.css"type="text/css">
</head>

<body>

<div id="wrapper">
<div id="header">
<img src="/ofrs/img/title.png" alt="img/Logo UTeM" width="500" >
<img src="/ofrs/img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
</div>

<div id="navigation">
	<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Facilities</a>
		<div class="dropdown-content">
			<a href="../facility/menu.php">New Reservation</a>
			<a href="../reservation/status.php">Reservation Status</a>
		</div>
	<li><a href="../contact.php">Contact us</a></li>
	<li style="float:right" class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
		<div class="dropdown-content">
			<a href="../accountdetail.php">Account Details </a>
			<a href="../logout.php">Logout </a>
		</div>
	</li>
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
  <h3>My Reservation</h3>
  <table class="center">


    <?php
    echo "<tr><th>Facility Name</th><th>Booking Date From</th><th>Booking Date To</th><th>Booking Time</th><th>Status</th><th>Action</th></tr>";
    if(mysqli_num_rows($result_status)>0)
    {
      while($status_result = mysqli_fetch_array($result_status)){
        $facilityname = $status_result['facilityname'];
        $bookingdatefrom = $status_result['bookingdatefrom'];
				$bookingdateto = $status_result['bookingdateto'];
        $bookingtime = $status_result['bookingtime'];
        $status = $status_result['status'];
        $reservationid = $status_result['reservationid'];
        echo "<tr><td>".$facilityname."</td><td>".$bookingdatefrom."</td><td>".$bookingdateto."</td><td>".$bookingtime."</td><td>".$status."</td><td><form method='post' action='../delete.php'><button type='submit' value='".$reservationid."' name='delete' onclick=\"javascript: return confirm('Please confirm deletion');\">Cancel Reservation</button></form></td></tr>";

      }
		}
     if(mysqli_num_rows($result_status1)>0) {
      while($status_result1 = mysqli_fetch_array($result_status1)){
        $facilityname = $status_result1['facilityname'];
				$bookingdatefrom = $status_result1['bookingdatefrom'];
				$bookingdateto = $status_result1['bookingdateto'];
        $bookingtime = $status_result1['bookingtime'];
        $status = $status_result1['status'];
        $reservationid = $status_result1['reservationid'];
        echo "<tr><td>".$facilityname."</td><td>".$bookingdatefrom."</td><td>".$bookingdateto."</td><td>".$bookingtime."</td><td>".$status."</td><td></td></tr>";

      }
    }
		if(mysqli_num_rows($result_status2)>0) {
		 while($status_result2 = mysqli_fetch_array($result_status2)){
			 $facilityname = $status_result2['facilityname'];
			 $bookingdatefrom = $status_result2['bookingdatefrom'];
			 $bookingdateto = $status_result2['bookingdateto'];
			 $bookingtime = $status_result2['bookingtime'];
			 $status = $status_result2['status'];
			 $reservationid = $status_result2['reservationid'];
			 echo "<tr><td>".$facilityname."</td><td>".$bookingdatefrom."</td><td>".$bookingdateto."</td><td>".$bookingtime."</td><td>".$status."</td><td><form method='post' action='../delete.php'><button type='submit' value='".$reservationid."' name='delete' onclick=\"javascript: return confirm('Please confirm deletion');\">Cancel Reservation</button></form></td></tr>";

		 }
	 }
    if(!(mysqli_num_rows($result_status)>0)&&!(mysqli_num_rows($result_status1)>0)&&!(mysqli_num_rows($result_status2)>0)) {

        echo "<tr><td colspan='6' style='text-align:center'>No Result Found</td></tr>";
    }
     ?>


  </table>
</div>

<!--
add comment to test tortoiseSVN
 -->

<div id="footer" style="margin-top:400px">
<CENTER>Copyright &copy UTeM, 2017</CENTER>
</div>

</div>

</div>

</body>
</html>
