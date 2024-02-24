<?php
session_start();
require("connection.php");
$qry = "SELECT * FROM pages order by position";
$result = mysql_query($qry,$res);

?>
<html>
		<head>
			<title> Vatsalya Trust  </title>
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		</head>
		
		<link rel="icon" type="logo/jpg" sizes="16x16" href="logo.jpg">
    
	
<body>

<!-------------Navigation------------------->
		<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="logo.jpg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto" >
		
		<?php while($page=mysql_fetch_assoc($result)) { ?>
		<li class="nav-item">
        <a class="nav-link" href="#id_<?php echo $page['id']; ?>"><?php echo $page['page_name']; ?></a>
		</li>
		<?php } ?>
		
		
		</ul>
		</div>
		</nav>
		</section>