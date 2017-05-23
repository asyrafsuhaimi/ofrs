<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="../css/indexstyle.css"type="text/css">
</head>

<body>

<div id="wrapper">
<div id="header">
<img src="../img/title.png" alt="img/Logo UTeM" width="500" >
<img src="../img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
</div>

<div id="navigation">
<ul>
<li><a href="../customer/index.php">Home</a></li>
<li><a href="#">About Us</a></li>
<li class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Facilities</a>
	<div class="dropdown-content">
		<a href="../customer/facility/menu.php">New Reservation</a>
		<a href="../customer/reservation/status.php">Reservation Status</a>
	</div>
</li>
<li><a href="../customer/contact.php">Contact us</a></li>
<li style="float:right" class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
	<div class="dropdown-content">
		<a href="../customer/accountdetail.php">Account Details </a>
		<a href="../customer/logout.php">Logout </a>
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
<div>
<h2>ONLINE FACILITIES RESERVATION SYSTEM</h2>
<p>UTeM Facilities Reservation System is for people who want to conduct
any events. The purpose of this system is to prepare facilites for reservation.</p>
</div>
<img src="../img/faci.png">
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
