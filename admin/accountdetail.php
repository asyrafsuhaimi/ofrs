<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
require_once('adminconfig.php');
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
 	<li><a href="../admin/index.php">Home</a></li>
 	<li class="dropdown">
 		<a href="javascript:void(0)" class="dropbtn">Facilities</a>
 		<div class="dropdown-content">
 			<a href="../admin/reservation/customerbooking.php">Customer Reservation</a>
 		</div>
 	</li>
 	<li class="dropdown">
 		<a href="javascript:void(0)" class="dropbtn">Accounts</a>
 		<div class="dropdown-content">
 			<a href="../admin/account/customeraccount.php">Customer Accounts</a>
 			<a href="../admin/account/registeradmin.php">Add Admin Accounts</a>
 			<a href="../admin/account/adminaccount.php">Admin Accounts</a>
 		</div>
 	</li>
 	<li style="float:right" class="dropdown">
 		<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
 		<div class="dropdown-content">
 			<a href="../admin/accountdetail.php">Account Details </a>
 			<a href="../admin/logout.php">Logout </a>
 		</div>
 	</li>
 	<li><a href="../admin/report.php">Report</a></li>
 	</ul>
 </div>
 <div id="mr">
 	<tr>
 			<td height="33" id="menu">
             <marquee class="font14" scrollamount="2"><font color="#F00"><strong>&#10003;</strong></font> Any facilities that customer want to rent avalaible on UTeM &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font > Facilities that avalaible on UTeM included : Main Hall, Sport Centre, and others &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font> For more information can contact the administrator</marquee>
             </td>
 	</tr>
 </div>
 <<form method="post" action="updateadmin.php">
 <table>
   <tr>
     <th colspan="2" style="text-align:center;" >Update Account Details</th>
   </tr>
   <tr>
     <td>Staff ID</td><td><input type="text" name="staffid" value="<?php echo$staffid?>" disabled></td>
   </tr>
   <tr>
     <td>Name</td><td><input type="text" name="name" value="<?php echo$name?>"></td>
   </tr>
   <tr>
     <td>Username</td><td><input type="text" name="uname" value="<?php echo$uname?>"></td>
   </tr>
   <tr>
     <td>Password</td><td><input type="text" name="pword" value="<?php echo$password?>"></td>
   </tr>
   <tr>
     <td colspan="2" style="text-align:center"><input type="hidden" name="staffid" value="<?php echo$staffid ?>"><button type="submit">Update Account Details</button></td>
   </tr>
   <table>
 </div>
 </form>
 <!--
 add comment to test tortoiseSVN
  -->

 <div id="footer" style="margin-top:100px">
 <CENTER>Copyright &copy UTeM, 2017</CENTER>
 </div>

 </div>

 </div>

 </body>
 </html>
