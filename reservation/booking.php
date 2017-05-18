<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/Asyraf/uvrs/Userlogin.php';</script>";
}
require_once('../connect.php');
require_once('../customerconfig.php');
 ?>
<html>
<head>
<!--Testing GitHub-->
<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="../css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="../css/bookingcss.css"type="text/css">
</head>

<body>

  <div id="wrapper">
    <div id="header">
      <img src="../img/title.png" alt="img/Logo UTeM" width="500" >
      <img src="../img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
    </div>

    <div id="navigation">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Contact us</a></li>
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
      <table>
        <tr>
          <td height="800px" valign="top">
      <div class="center">
        <h2 id = "myTitle"><?php echo$_POST['name'];?></h2>
        <div class="imgdewan">
          <img src="<?php echo$_POST['facility']?>" id="myImg" alt="dewan UTeM" width="450" height="200">
        </div>
        <div class="date">
          <table class="options">
          <form>
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
          <tr>
            <th>Time:
              <?php
                for($j = 8; $j<22; $j+=2)
                {
                  echo"<th>$j.00-".($j+2).".00</th>";
                }

               ?>
             </th>
          </tr>
        </table>
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
		//var facilityname = new String(document.getElementById("myTitle"));
    var img = document.createElement('img');
    img.src = "../img/plus.png";
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
    //date.setDate(date.getDate() + 1);
      for(a=1;a<8;a++)
      {
        var r = row.insertCell(a);
        r.innerHTML="<form method='get' action='bookingdetail.php'><input type='hidden' name='name' value='<?php echo$_POST['name']?>''><input type='hidden' name='time' value="+time.getHours()+".00-"+(time.getHours()+2)+".00><button name='date' class='centerimg' value="+date.getDate()+"-"+(date.getMonth()+1)+"-"+date.getFullYear()+"><img width='30' height='30' class='centerimg' src='../img/plus.png'></button></form>";
        time.setHours(time.getHours()+2);
      }
    }

  }

  function myFacility(element){
    var text = element.options[element.selectedIndex].text;

    if(text=='Perpustakaan')
    {
      document.getElementById("myImg").src="../img/lib.jpg";
      document.getElementById("myTitle").innerHTML = "Perpustakaan";
    }
    else if ((text=='Dewan Besar')||(text=='Main Hall')||(text=='Banquet Hall')||(text=='VVIP Room')) {
      document.getElementById("myImg").src="../img/dewan.jpg";
      document.getElementById("myTitle").innerHTML = "Dewan Besar";
    }
    else if (text=='Masjid') {
      document.getElementById("myImg").src="../img/masjid.jpg";
      document.getElementById("myTitle").innerHTML = "Masjid";
    }
    else if (text=='Bas') {
      document.getElementById("myImg").src="../img/bas.jpg";
      document.getElementById("myTitle").innerHTML = "Bas";
    }


  }
  </script>

</body>
</html>
