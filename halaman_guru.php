<!DOCTYPE html>
<html>
<head>
	<title>GURU</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body bgcolor="yellow">
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<div class="rpl"><font size="5"><strong><b><i>GURU SMK NEGERI 9 SEMARANG</i></a></b></strong></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<font size="3" font color="black"><b>
			<a href="siswarpl2.html">SISWA RPL</a>-
		    <a href="list-siswa.php">ABSENSI SISWA</a>-</font></b></div>
		    <div class="tb"><font color="white"><center>ABSENSI SISWA SMKN 9 SEMARANG</div></font></center>
		 	<br>
		 	<br>
		 	<br>
		 	<br>
		 	<div class="tokoonline"><center><i><font color="black"><b>Rekayasa Perangkat Lunak | SMK NEGERI 9 Semarang | JL.Peterongansari No.02 Semarang | Tlp/Wa : 0856266797</i></font></center></div></b>
		 	<center>
		 		<br>
		 		<br>
		 		<br>
		 		<img src="profil.jpg" width="810" height="255">
		 		<br>
		 		<div class="marque"><marquee style="font-family: arial; font-size: 1pgs; color: black">Selamat Datang di Absen Online Smk N 9 Semarang</marquee></div>
		 		<br>
		 		<br>
		 		<div class="SelamatDatang"><center><font color="white" font size="4">Selamat Datang</font></center>
		 		</div>
		 		<br>
		 		<br>
		 		<div class="kotak">
		    	<tr>
		    		<td>
		    			<h1 align="center"><font color="black" font size="5"><b>
		    				Selamat Datang Di Presensi Online SMK Negeri 9 Semarang
		    				<br>
		    				<br>
		    				<img src="logo.png" width="200" height="230">
		    				<br>
		    				By Afifah Devianda </h1></font></b>
		    	</td>
		      </tr>
		    </div>
		    <br>
		    <br>
    <div class="tuku"><center><font color="white">Didik Sri Purwdi</font></center></div>
	<br>
	<br>
	<br>
	<br>
	<div class="cr"><center><font color="white">copyright@afifahdvn_</font></center></div>
	<br>
	<br>
	<br>
	<div class="rpll"><font size="3" font color="black"><a href="logout.php">LOGOUT</a></font></div>
</body>
</html>