<?php
require_once('../connect.php');
  $mainhall="";
  $bungaraya="";
  $aljazari="";
  $lestari="";
  $banquethall="";
  $vvipbanquetroom="";
  $mainprayinghall="";


  $total_mainhall="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='Main Hall'";
  $total_bungaraya="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='Bunga Raya'";
  $total_aljazari="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='Aljazari'";
  $total_lestari="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='Lestari'";
  $total_banquethall="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='Banquet Hall'";
  $total_vvipbanquetroom="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='VVIP Banquet Room'";
  $total_mainprayinghall="SELECT COUNT(facilityname) as total FROM reservation WHERE facilityname='Main Praying Hall'";

  $result1 = mysqli_query($conn,$total_mainhall);
  $result2 = mysqli_query($conn,$total_bungaraya);
  $result3 = mysqli_query($conn,$total_aljazari);
  $result4 = mysqli_query($conn,$total_lestari);
  $result5 = mysqli_query($conn,$total_banquethall);
  $result6 = mysqli_query($conn,$total_vvipbanquetroom);
  $result7 = mysqli_query($conn,$total_mainprayinghall);

  $data1= mysqli_fetch_assoc($result1);
  $data2= mysqli_fetch_assoc($result2);
  $data3= mysqli_fetch_assoc($result3);
  $data4= mysqli_fetch_assoc($result4);
  $data5= mysqli_fetch_assoc($result5);
  $data6= mysqli_fetch_assoc($result6);
  $data7= mysqli_fetch_assoc($result7);
  //echo$data1['total'];
  //echo$data2['total'];
 ?>
