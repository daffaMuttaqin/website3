<?php
	session_start();
	if($_SESSION['status_login']!= true){
		echo '<script>window.location="login.php"</script>';
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widh=device-widht, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>

<body>
	<header>
		<div class="container">

			<h1><a href="dashboard.php">tokonline</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data kategori</a></li>
				<li><a href="data-produk.php">Produk</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</div>
	</header>

	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Welcome <?php echo $_SESSION['a_global']->admin_name?></h4>
		
			</div>
		</div>
	</div>


		<footer>
			<div class="container">
				<small>Copyright &copy; 2021 - tokonline.</small>

		</footer>
</body>
</html>