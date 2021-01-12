<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">
	<style>
		.container {
			width: 500px;
		}
	</style>
</head>
<body>

	
    

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	
	<div class="container">
		<div class="kotak_login">
			<!--<a href="Hal1.html"><img class="logo" src="#" ></a> -->
			<p class="tega">LOGIN</p>
	
			<form action="cek_login.php" method="post">
				<center><label><b>Nama Pengguna</b></label></center>
				<input type="text" name="Nama" class="form_login" placeholder="Username .." required="required">
	
				<center><label><b>Kata Sandi</b></label></center>
				<input type="password" name="sandi" class="form_login" placeholder="Password .." required="required">
	
				<input type="submit" class="tombol_login" value="MASUK" >
	
				<br/>
				<br/>
				<center>
					<a class="link">belum punya akun ? daftar <a class="link" href="add.php"><b>disini</b></a></a>
				</center>
			</form>
			
		</div>
	</div>

</body>
</html>