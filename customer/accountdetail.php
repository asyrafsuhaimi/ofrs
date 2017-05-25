<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
require_once('../customerconfig.php');
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="../css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="../css/accountdetail.css"type="text/css">
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
<form method="post" action="/ofrs/customer/updatedetail.php">
  <table>
    <tr><th colspan="2" style="text-align:center">Account Details</th></tr>
    <tr>
      <td>First Name:</td><td><input type="text" name="firstname" value="<?php echo $firstname ?>" required></td>
    </tr>
    <tr>
      <td>Last Name:</td><td><input type="text" name="lastname"  value="<?php echo $lastname ?>" required></td>
    </tr>
    <tr>
      <td>User Name:</td><td><input type="text" name="uname" value="<?php echo $uname ?>" required></td>
    </tr>
    <tr>
      <td>Password:</td><td><input type="text" name="pword" value="<?php echo $pword ?>" required></td>
    </tr>
    <tr>
      <td>IC No:</td><td><input type="text" name="icno" value="<?php echo $icno ?>" required></td>
    </tr>
    <tr>
      <td>Email:</td><td><input type="email" name="email" value="<?php echo $email ?>" required></td>
    </tr>
    <tr>
      <td>Phone Number:</td><td><input type="number" name="phoneno" value="<?php echo $phoneno ?>"required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="hidden" name="customerid" value="<?php echo $customerid ?>"required></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center"><button class="btn" type="submit"  onclick = "return confirm('Are You Sure You Want To Delete?')">Update Account Details</button></td>
    </tr>
  </table>
</form>
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
