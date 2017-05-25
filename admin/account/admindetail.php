<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');

$staffid = $_POST['staffid'];
$uname = "";
$pword = "";
$name = "";
$typeofuser = "";
$sql_admin ="SELECT * FROM `employee` WHERE staffid='$staffid'";
$result = mysqli_query($conn,$sql_admin);
if(mysqli_num_rows($result)>0){
  while ($customer_result = mysqli_fetch_array($result)) {
    $staffid = $customer_result['staffid'];
    $uname = $customer_result['username'];
    $pword = $customer_result['password'];
    $name = $customer_result['name'];
    $typeofuser = $customer_result['typeofuser'];
  }
}
 ?>
 <html>
 <head>

 <title>Online Facilities Reservation System</title>
 <link rel="stylesheet"href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/accountdetail.css"type="text/css">
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


   <form method="post" action="/ofrs/admin/account/deleteadmin.php">
     <table>
       <tr><th colspan="2" style="text-align:center">Admin Account Details</th></tr>
       <tr>
         <td>Name:</td><td><input type="text" name="name" value="<?php echo $name ?>" disabled></td>
       </tr>
       <tr>
         <td>Staff ID:</td><td><input type="text" name="staffid"  value="<?php echo $staffid ?>" disabled></td>
       </tr>
       <tr>
         <td>User Name:</td><td><input type="text" name="uname" value="<?php echo $uname ?>" disabled></td>
       </tr>
       <tr>
         <td>Password:</td><td><input type="text" name="pword" value="<?php echo $pword ?>" disabled></td>
       </tr>
       <tr>
         <td>Type Of User:</td><td><input type="text" name="typeofuser" value="<?php echo $typeofuser ?>" disabled></td>
       </tr>
       <tr>
         <td colspan="2" style="text-align:center"><button class="btn" type="submit"  name="staffid" value="<?php echo$staffid ?> "onclick = "return confirm('Are You Sure You Want To Terminate This Account?')">Terminate Account</button></td>
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
