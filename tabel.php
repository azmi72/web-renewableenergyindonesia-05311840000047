<!DOCTYPE HTML>

<html>
	<head>
		<title>Renewable Energy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<nav>
					<ul>
						<li><a href="udahlogin.php">Home</a></li>
						<li><a href="#intro">Table</a></li>
						<li><a href="#one">Users</a></li>
						<li><a href="Hal1.php">Logout</a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>Table</h2>
					</header>
					<p style="font-size: 30px;">Daftar Users</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>  
        
            <section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Users</h2>
					</header>
					<p> <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi,"SELECT * FROM akun ORDER BY Nama DESC");
        ?>
        <form action="" method="post">
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomer HP</th>
            </tr>
                <?php if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["Nama"];?></td>
                    <td><?php echo $data["email"];?></td>
                    <td><?php echo $data["No_hp"];?></td>
                    
                </tr>
                <?php $no++; } ?>
                <?php } ?>
            </table>
        </form>
    </p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
       

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
					</ul>

                    
				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Azmi</li><li>NRP: 05311840000047</li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>