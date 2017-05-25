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
<!--Testing GitHub-->
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
      <table width="850px">
        <tr>
          <td height="800px" valign="top">
      <div class="center">
        <h2 id = "myTitle"><?php echo$_POST['name'];?></h2>
        <div class="imgdewan">
          <img src="<?php echo$_POST['facility']?>" id="myImg" alt="dewan UTeM" width="450" height="200">
        </div>
        <div class="date">
          <table class="options">
          <form action=""method="post">
						<tr>
							<td>Type Of Booking</td>
							<td>
								<select id="bookingType">
									<option value="" disabled selected></option>
									<option value="day">Number Of Day</option>
									<option value="hour">Number Of Hours</option>
								</select>

							</td>
						</tr>
            <tr>
              <td>Date:</td>
                <td><input type = "date" value="date" name="date" id="myDate" onchange="myFunction()"></td>
            </tr>
            <tr>
              <td>Facilities:</td>
                <td>
                  <select id="facility" onchange="myFacility(this);">
                  <option value="<?php echo$_POST['name']?>"><?php echo$_POST['name'] ?></option>
									</select>
                </td>
              </tr>
          </form>
          </table>
        </div>
        <table id="myTable">
        </table>
				<form method='get' action='bookingdetail.php'>
					<table id='myTableDay'>
					</table>
				</form>
        </div>

<!--  -->
</td>
</tr>
</table>
  <div id="footer">
    <CENTER>Copyright © UTeM, 2017</CENTER>
  </div>

  </div>

  </div>

  <script>
  function myFunction() {
		document.getElementById("myTableDay").innerHTML ="";
		document.getElementById("myTable").innerHTML ="";
		var e = document.getElementById("bookingType");
		var type = e.options[e.selectedIndex].value;

		if(type=="hour")
		{

			document.getElementById("myTable").innerHTML = "<tr><th>Time:<?php for($j = 8; $j<22; $j+=2) { echo'<th>'.$j.'.00-'.($j+2).'.00</th>';}  ?> </th></tr>";
			var img = document.createElement('img');
	    img.src = "/ofrs/img/plus.png";
	    var table = document.getElementById("myTable");
	    var date = new Date(document.getElementById("myDate").value);
	    var time=  new Date();
	    time.setHours(8);
	    if ((table.rows.length)>1){
	      for (i=0;i<1;i++) {
	        table.deleteRow(- 1);
	      }

	    }
	    for(i=1;i<2;i++)
	    {
	    var row = table.insertRow(i);
	    var b = row.insertCell(0);
	    b.innerHTML = date.getDate()+"-"+(date.getMonth()+1)+"-"+date.getFullYear();
			var day = date.getDate();
			var month = date.getMonth()+1;
			var year = date.getFullYear();
			if (month < 10) month = "0" + month;
			if (day < 10) day = "0" + day;
			var fullDate = year + "-" + month + "-" + day;
	    //date.setDate(date.getDate() + 1);
	      for(a=1;a<8;a++)
	      {
	        var r = row.insertCell(a);
	        r.innerHTML="<form method='get' action='bookingdetail.php'><input type='hidden' name='name' value='<?php echo$_POST['name']?>''><input type='hidden' name='time' value="+time.getHours()+".00-"+(time.getHours()+2)+".00><input type='hidden' name='datefrom' value="+fullDate+"><button name='dateto' class='centerimg' value="+fullDate+"><img width='30' height='30' class='centerimg' src='/ofrs/img/plus.png'></button></form>";
	        time.setHours(time.getHours()+2);
	      }
	    }
		}
		else if(type=="day") {
			var time1=  new Date();
			time1.setHours(0);
			var table = document.getElementById("myTable");
	    var date = new Date(document.getElementById("myDate").value);
			var day = date.getDate();
			var month = date.getMonth()+1;
			var year = date.getFullYear();
			if (month < 10) month = "0" + month;
			if (day < 10) day = "0" + day;
			var fullDate = year + "-" + month + "-" + day;
			document.getElementById("myTableDay").innerHTML ="<tr><td><input type='hidden' name='name' value='<?php echo$_POST['name']?>'><input type='hidden' name='time' value="+time1.getHours()+".00-"+(time1.getHours()+23)+".00>Booking Date From:<input name='datefrom' type='date' value ="+fullDate+" required></td><td>Booking Date To:</td><td><input type='date' name='dateto' min="+fullDate+" required></td><td><button name='reserve'value='reservation'>Create Reservation</button></td></tr>";
			//document.getElementById("theDate").value = fullDate;
		}
  }
  </script>

</body>
</html>
