<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ofrs";

$connect = new mysqli($servername,$username,$password,$db_name);
if($connect->connect_errno)
{
	echo "Failed to connect to MYSQL".$connect->error;
}

error_reporting(0);
//variable declaration
//login
$uname = $connect->real_escape_string(stripslashes($_POST['uname']));
$pword = $connect->real_escape_string(stripslashes($_POST['pword']));

/*
//guru
$guru_id = $connect->real_escape_string(stripslashes($_POST['guru_id']));
$guru_nama = $connect->real_escape_string(stripslashes($_POST['guru_nama']));
$guru_jantina = $connect->real_escape_string(stripslashes($_POST['guru_jantina']));
$guru_notelefon = $connect->real_escape_string(stripslashes($_POST['guru_notelefon']));
$guru_email = $connect->real_escape_string(stripslashes($_POST['guru_email']));
$guru_jawatan = $connect->real_escape_string(stripslashes($_POST['guru_jawatan']));
$guru_alamat = $connect->real_escape_string(stripslashes($_POST['guru_alamat']));
$guru_daerah = $connect->real_escape_string(stripslashes($_POST['guru_daerah']));
$guru_poskod = $connect->real_escape_string(stripslashes($_POST['guru_poskod']));
$guru_negeri = $connect->real_escape_string(stripslashes($_POST['guru_negeri']));

//upload gambar
$gambar = $connect->real_escape_string(stripslashes($_FILES['gambar']['name']));
$target = "../image/admin/";
$target = $target.basename($gambar);
$target2 = "../image/staff/";
$target2 = $target2.basename($gambar);
$target3 = "../image/director/";
$target3 = $target3.basename($gambar);

//admin
$pentadbir_id = $connect->real_escape_string(stripslashes($_POST['pentadbir_id']));
$pentadbir_nama = $connect->real_escape_string(stripslashes($_POST['pentadbir_nama']));
$pentadbir_jantina = $connect->real_escape_string(stripslashes($_POST['pentadbir_jantina']));
$pentadbir_notelefon = $connect->real_escape_string(stripslashes($_POST['pentadbir_notelefon']));
$pentadbir_email = $connect->real_escape_string(stripslashes($_POST['pentadbir_email']));
$pentadbir_jawatan = $connect->real_escape_string(stripslashes($_POST['pentadbir_jawatan']));
$pentadbir_alamat = $connect->real_escape_string(stripslashes($_POST['pentadbir_alamat']));
$pentadbir_daerah = $connect->real_escape_string(stripslashes($_POST['pentadbir_daerah']));
$pentadbir_poskod = $connect->real_escape_string(stripslashes($_POST['pentadbir_poskod']));
$pentadbir_negeri = $connect->real_escape_string(stripslashes($_POST['pentadbir_negeri']));

//pengetua
$pengetua_id = $connect->real_escape_string(stripslashes($_POST['pengetua_id']));
$pengetua_nama = $connect->real_escape_string(stripslashes($_POST['pengetua_nama']));
$pengetua_jantina = $connect->real_escape_string(stripslashes($_POST['pengetua_jantina']));
$pengetua_notelefon = $connect->real_escape_string(stripslashes($_POST['pengetua_notelefon']));
$pengetua_email = $connect->real_escape_string(stripslashes($_POST['pengetua_email']));
$pengetua_jawatan = $connect->real_escape_string(stripslashes($_POST['pengetua_jawatan']));
$pengetua_alamat = $connect->real_escape_string(stripslashes($_POST['pengetua_alamat']));
$pengetua_daerah = $connect->real_escape_string(stripslashes($_POST['pengetua_daerah']));
$pengetua_poskod = $connect->real_escape_string(stripslashes($_POST['pengetua_poskod']));
$pengetua_negeri = $connect->real_escape_string(stripslashes($_POST['pengetua_negeri']));

//pelajar
$pelajar_id = $connect->real_escape_string(stripslashes($_POST['pelajar_id']));
$pelajar_nama = $connect->real_escape_string(stripslashes($_POST['pelajar_nama']));
$pelajar_jantina = $connect->real_escape_string(stripslashes($_POST['pelajar_jantina']));
$pelajar_notelefon = $connect->real_escape_string(stripslashes($_POST['pelajar_notelefon']));
$pelajar_jawatan = $connect->real_escape_string(stripslashes($_POST['pelajar_jawatan']));
$pelajar_email = $connect->real_escape_string(stripslashes($_POST['pelajar_email']));
$pelajar_alamat = $connect->real_escape_string(stripslashes($_POST['pelajar_alamat']));
$pelajar_daerah = $connect->real_escape_string(stripslashes($_POST['pelajar_daerah']));
$pelajar_poskod = $connect->real_escape_string(stripslashes($_POST['pelajar_poskod']));
$pelajar_negeri = $connect->real_escape_string(stripslashes($_POST['pelajar_negeri']));
$pelajar_status = $connect->real_escape_string(stripslashes($_POST['pelajar_status']));
$pelajar_tingkatan = $connect->real_escape_string(stripslashes($_POST['pelajar_tingkatan']));
$pelajar_kelas = $connect->real_escape_string(stripslashes($_POST['pelajar_kelas']));

//subjek 
$subjek_id = $connect->real_escape_string(stripslashes($_POST['subjek_id']));
$subjek_wajib1 = $connect->real_escape_string(stripslashes($_POST['subjek_wajib1']));
$subjek_wajib2 = $connect->real_escape_string(stripslashes($_POST['subjek_wajib2']));
$subjek_pilihan1 = $connect->real_escape_string(stripslashes($_POST['subjek_pilihan1']));
$subjek_pilihan2 = $connect->real_escape_string(stripslashes($_POST['subjek_pilihan2']));
*/

?>