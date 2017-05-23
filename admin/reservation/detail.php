<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
require_once('detailbooking.php');
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/bookingcss.css"type="text/css">
</head>

<body>

<div id="wrapper">
<div id="header">
<img src="/ofrs/img/title.png" alt="img/Logo UTeM" width="500" >
<img src="/ofrs/img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
</div>

<div id="navigation">
	<ul>
	<li><a href="../customer/index.php">Home</a></li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Facilities</a>
		<div class="dropdown-content">
			<a href="../admin/facility/menu.php">Edit Facilities</a>
			<a href="../admin/reservation/customerbooking.php">Customer Reservation</a>
		</div>
	</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Accounts</a>
		<div class="dropdown-content">
			<a href="../admin/facility/menu.php">Customer Accounts</a>
			<a href="../admin/reservation/status.php">Add Admin Accounts</a>
			<a href="../admin/reservation/status.php">Edit Admin Accounts</a>
		</div>
	</li>
	<li style="float:right" class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
		<div class="dropdown-content">
			<a href="../admin/accountdetail.php">Account Details </a>
			<a href="../logout.php">Logout </a>
		</div>
	</li>
	<li><a href="#">Report</a></li>
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



    <div class="center">
      <table>
      <tr>
        <img class="centerimg"src="<?php echo$facilityimage?>" id="myImg" alt="dewan UTeM" width="450" height="200"><br/>
      </tr>
        <tr>
          <td>Customer Name</td><td><input type="text" name="name" value = "<?php echo$firstname." ".$lastname;?>"disabled></td>
        </tr>
        <tr>
          <td>Customer IC Number</td><td><input type="text" name="icno" value="<?php echo$icno;?>"disabled></td>
        </tr>
        <tr>
          <td>Customer Phone Number</td><td><input type="text" name="phoneno" value="<?php echo$phoneno;?>"disabled></td>
        </tr>
        <tr>
          <td>Email</td><td><input type="text" name="email" value="<?php echo$email;?>"disabled></td>
        </tr>
        <tr>
          <td>Facility</td><td><input type="text" name="facilityname" value="<?php echo$facilityname?>"disabled></td>
        </tr>
        <tr>
          <td>Booking Date From</td><td><input type="date" name="bookingdatefrom" value="<?php echo$bookingdatefrom ?>"disabled></td>
        </tr>
        <tr>
          <td>Booking Date To</td><td><input type="date" name="bookingdateto" value="<?php echo$bookingdateto ?>"disabled></td>
        </tr>
        <tr>
          <td>Booking Time</td><td><input type="text" name="bookingtime" value="<?php echo$bookingtime ?>"disabled></td>
        </tr>
        <tr>
          <td>Status</td><td><input type="text" name="status" value="<?php echo$status ?>"disabled></td>
        </tr>
      </table>
      <br>
			 <div class="btncenter">
      	<form class="space" method="post" action="approve.php">
        	<button class="btn btn1" name="reservationid" value ="<?php echo$reservationid?>" onclick = "return confirm('Are You Sure You Want To Confirm The Reservation?')">Approve Reservation</button>
      	</form>
				<form class="space" method="post" action="disapprove.php">
        	<button class="btn btn2" name="reservationid" value ="<?php echo$reservationid?>" onclick = "return confirm('Are You Sure You Want To Disapprove The Reservation?')">Disapprove Reservation</button>
      	</form>
			</div>
		</div>
<!--
add comment to test tortoiseSVN
 -->

<div id="footer" style="margin-top:400px">
<CENTER>Copyright &copy UTeM, 2017</CENTER>
</div>

</div>



</body>
</html>
