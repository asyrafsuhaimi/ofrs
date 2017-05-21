<?php
  mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
  mysql_select_db("ofrs") or die(mysql_error());

  $booked = mysql_query("SELECT * FROM reservation ") or die(mysql_error());

 ?>
