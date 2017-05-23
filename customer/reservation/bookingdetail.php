<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/Asyraf/uvrs/Userlogin.php';</script>";
}
require_once('../connect.php');
require_once('../customerconfig.php');
$sql_facility ="SELECT * FROM `facility` WHERE name like '".$_GET['name']."'";
$result = mysqli_query($conn,$sql_facility);
if(mysqli_num_rows($result)>0){
	while ($facility_result = mysqli_fetch_array($result)) {
		$name = $facility_result['name'];
		$facilitydescription = $facility_result['facilitydescription'];
		$facilityimage = $facility_result['facilityimage'];
		$location = $facility_result['location'];
		$price = $facility_result['price'];
		$facilityid = $facility_result['facilityid'];

	}
}
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
    <form class="space" method="post" action="action.php">
      <div class="center">
        <table>
				<tr>
					<img class="centerimg"src="<?php echo$facilityimage?>" id="myImg" alt="dewan UTeM" width="450" height="200"><br/>
				</tr>
          <tr>
            <td>Customer Name</td><td><input type="text" name="name" value = "<?php echo$firstname." ".$lastname;?>"></td>
          </tr>
          <tr>
            <td>Customer IC Number</td><td><input type="text" name="icno" value="<?php echo$icno;?>"></td>
          </tr>
          <tr>
            <td>Customer Phone Number</td><td><input type="text" name="phoneno" value="<?php echo$phoneno;?>"></td>
          </tr>
          <tr>
            <td>Email</td><td><input type="text" name="email" value="<?php echo$email;?>"></td>
          </tr>
          <tr>
            <td>Facility</td><td><input type="text" name="facilityname" value="<?php echo$_GET['name']?>"></td>
          </tr>
          <tr>
            <td>Booking Date From</td><td><input type="date" name="bookingdatefrom" value="<?php echo$_GET['datefrom'] ?>"></td>
          </tr>
					<tr>
            <td>Booking Date To</td><td><input type="date" name="bookingdateto" value="<?php echo$_GET['dateto'] ?>"></td>
          </tr>
          <tr>
            <td>Booking Time</td><td><input type="text" name="bookingtime" value="<?php echo$_GET['time'] ?>"></td>
          </tr>
        </table>
        <br>
        <div class="btncenter">
            <button class="btn btn1" onclick = "return confirm('Are You Sure You Want To Confirm The Reservation?')">Confirm Reservation</button>
      </form>
			<form action="/ofrs/customer/facility/menu.php">
						<button class="btn btn2" onclick = "return confirm('Are You Sure You Want To Cancel The Reservation?')">Cancel Reservations</button>
			</form>
        </div>

        </div>
    </div>

<!--  -->

  <div id="footer" style="margin-top:700px">
    <CENTER>Copyright © UTeM, 2017</CENTER>
  </div>

  </div>

  </div>

</body>
</html>
