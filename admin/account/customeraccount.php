<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('../connect.php');
require_once('customer.php');
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/status.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/customeraccount.css"type="text/css">
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
			<a href="ofrs/admin/reservation/customerbooking.php">Customer Reservation</a>
		</div>
	</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Accounts</a>
		<div class="dropdown-content">
			<a href="/ofrs/admin/facility/menu.php">Customer Accounts</a>
			<a href="/ofrs/admin/account/registeradmin.php">Add Admin Accounts</a>
			<a href="/ofrs/admin/reservation/status.php">Edit Admin Accounts</a>
		</div>
	</li>
	<li style="float:right" class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
		<div class="dropdown-content">
			<a href="/ofrs/admin/accountdetail.php">Account Details </a>
			<a href="/ofrs/admin/logout.php">Logout </a>
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
  <h3 class="backdrop">My Reservation</h3>
  <div class="inputcenter">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Filter for usernames.." id="myInput" onkeyup="myFunction()">
  </div>
<div id="main">

<table class="center" id="myTable">
  <?php
  echo "
      <script type=\"text/javascript\">
      function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        table = document.getElementById('myTable');
        tr = table.getElementsByTagName('tr');
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName('td')[0];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = '';
            } else {
              tr[i].style.display = 'none';
            }
          }
        }
      }
      </script>
  ";

  echo"<tr><th>Username</th><th>Name</th><th>Phone Number</th><th>Email</th><th></th></tr>";
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
      echo"<tr><td>".$uname."</td><td>".$firstname."</td><td>".$phoneno."</td><td>".$email."</td><td><form method='post' action='customerdetail.php'><button name='uname' value=".$uname.">Details</button></td></tr>";
    }
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
