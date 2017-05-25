<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
require_once('piechart.php')
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="/ofrs/css/report.css"type="text/css">



</head>

<body>

<div id="wrapper">
<div id="header">
<img src="/ofrs/img/title.png" alt="img/Logo UTeM" width="500" >
<img src="/ofrs/img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
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
<div id="content-container">
	<h3 class="backdrop">Frequent Reserved Facility</h3>
<div class="piecenter">
	<div id="piechart_3d" style="width: 400px; height: 300px;"></div>
</div>
<table class="center">
	<tr>
		<th>Facility</th><th>Number Of Reservation</th>
	</tr>
	<tr>
		<td>Main Hall</td><td><?php echo$data1['total']?></td>
	</tr>
	<tr>
		<td>Bunga Raya</td><td><?php echo$data2['total']?></td>
	</tr>
	<tr>
		<td>Aljazari</td><td><?php echo$data3['total']?></td>
	</tr>
	<tr>
		<td>Lestari</td><td><?php echo$data4['total']?></td>
	</tr>
	<tr>
		<td>Banquet Hall</td><td><?php echo$data5['total']?></td>
	</tr>
	<tr>
		<td>VVIP Banquet Room</td><td><?php echo$data6['total']?></td>
	</tr>
	<tr>
		<td>Main Praying Hall</td><td><?php echo$data7['total']?></td>
	</tr>
</table>

<div id="footer" style="margin-top:200px">
<CENTER>Copyright &copy UTeM, 2017</CENTER>
</div>

</div>

</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Facility', 'Hours per Day'],
			['Main Hall',  <?php echo$data1['total']?>],
			['Bunga Raya', <?php echo$data2['total']?>],
			['AlJazari', <?php echo$data3['total']?>],
			['Lestari', <?php echo$data4['total']?>],
			['Banquet Hall',   <?php echo$data5['total']?>],
			['VVIP Banquet Room',   <?php echo$data6['total']?>],
			['Main Praying Hall',    <?php echo$data7['total']?>],
		]);

		var options = {
			title: 'Most Reserved Facility',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
		chart.draw(data, options);
	}
</script>

</body>
</html>
