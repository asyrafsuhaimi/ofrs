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
        <h2>Dewan Besar UTeM</h2>
        <div class="imgdewan">
          <img src="../img/dewan.jpg" alt="dewan UTeM" width="500" height="200">
        </div>
        <div class="date">
          <form>
            Date:<input type = "date" value="date" name="date" id="myDate" onchange="myFunction()">
            Facilities:<select>
              <option>Dewan Besar<option>
            </select>
          </form>

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
    var img = document.createElement('img');
    img.src = "../img/plus.png";
    var table = document.getElementById("myTable");

    var date = new Date(document.getElementById("myDate").value);
    if ((table.rows.length)>1){
      for (i=0;i<7;i++) {
        table.deleteRow(-1);
      }

    }
    for(i=1;i<8;i++)
    {
    var row = table.insertRow(i);
    var b = row.insertCell(0);
    b.innerHTML = date.getDate()+"-"+date.getMonth()+"-"+date.getFullYear();
    date.setDate(date.getDate() + 1);
      for(a=1;a<8;a++)
      {
        //var row1= table.insertRow(2);
        var r = row.insertCell(a);
        r.innerHTML="<a href='bookingdetail.php'><img width='30' height='30' class='centerimg' src='../img/plus.png'></a>";
        //var c = row.insertCell()
      }
    }

  }
  </script>

</body>
</html>
