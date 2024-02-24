<html>
<?php
include("header.php");
?>
<body>
		
		<!--------------Slider------------>
		<div id="slider">
			<div id="headerSlider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
				  <li data-target="#headerSlider" data-slide-to="1"></li>
				  <li data-target="#headerSlider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="50.jpg" class="d-block img-fluid">
					<div class="carousel-caption">
						<h5>
							
						</h5>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="51.jpg" class="d-block img-fluid">
					<div class="carousel-caption">
						<h5>
							
						</h5>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="img5.webp" class="d-block img-fluid">
					<div class="carousel-caption">
						<h5>
							
						</h5>
					</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
		</div>
		<?php 
		$qry = "SELECT * FROM pages order by position";
		$result = mysql_query($qry,$res);

		while($page=mysql_fetch_assoc($result)) { //print_r($page); ?>
		<section id="id_<?php echo $page['id']; ?>">
        <a class="nav-link" href="#id_<?php echo $page['id']; ?>"><?php echo $page['content']; ?></a>
		</section>
		<?php } ?>

		

		<!--------------Footer------------>

<?php
include("footer.php");
?>
</body>
</html>