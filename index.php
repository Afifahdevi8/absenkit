<html>
<head>
	<title>absenkit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
 <img src="logo.png" width="200" height="230">
</center>
	<h3><b>Login</br></br> Absensi Rekayasa Perangkat Lunak</br></br> SMK NEGERI 9 SEMARANG</b></h3>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
<center>
	<div class="kotak_login">
		<p class="tulisan_login"></p>
<form action="cek_login.php" method="POST">
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
		</form>
	</div>
</center>
</body>
</html>