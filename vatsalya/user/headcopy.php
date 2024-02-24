<?php
session_start();
require("connection.php");
$qry = "SELECT * FROM pages order by position";
$result = mysql_query($qry,$res);

?>

<html>
		<head>
			<title> Vatsalya Trust </title>
			<link rel="stylesheet" href="Styles.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		</head>
		
		<link rel="icon" type="logo/jpg" sizes="16x16" href="logo.png">
    <title>Vatsalya Trust</title>
	
<body>

<!-------------Navigation------------------->
		<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="logo.png" height="60px" width="80px"></a>
		<h5 style="color:#ffffff;">&nbsp; &nbsp; VATSALYA TRUST<br><small>&nbsp; &nbsp; Love, Care & Affection</small></h5>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto" >
		<li class="nav-item active">
		<a class="nav-link" href="Vatsalya_bk.php"><i class="fa fa-home"><big> Home |</big></i><span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item ">
		<a class="nav-link" href="aboutus.php"><i class="fa fa-about"><big> About Us |</big></i></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="Projects.php"><i class="fa fa-initiative"><big> Initiatives |</big></i></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="gallery.php"><i class="fa fa-picture-o"><big> Gallery |</big></i></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="contact.php"><i class="fa fa-phone"><big> Contact Us |</big></i></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="donate.php"><i class="fa fa-gift"><big> Donate </big></i></a>
		</li>
				<!--<?php while($page=mysql_fetch_assoc($result)) { ?>
		<li class="nav-item">
        <a class="nav-link" href="#id_<?php echo $page['id']; ?>"><?php echo $page['page_name']; ?></a>
		</li>
		<?php } ?>
		--->
		
		
		</ul>
		</div>
		</nav>
		</section>
		</body>
		</html>
		