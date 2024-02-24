<html>
<?php
include("headcopy.php");

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
					<img src="rsz_50.jpg" class="d-block img-fluid">
					<div class="carousel-caption">
						<!---<p style="font-family: Montserrat; font-size: 50px; color: rgb(255, 255, 255); top: 441px; left: 337.5px; margin: 0px; z-index: auto; width: 674px; height: 61px; padding: 0px; border-width: 0px; border-radius: 0px; letter-spacing: 0px; filter: none;" class="ls-layer" data-ls="offsetxin:60;durationin:1400;delayin:1000;easingin:easeOutQuint;parallaxlevel:0;" data-ls-slidein="1" data-ls-slideout="1" data-ls-hidden>WELCOME TO THE FAMILY</p>--->
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="rsz_151.jpg" class="d-block img-fluid">
					<div class="carousel-caption">
						
		
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="rsz_21.jpg" class="d-block img-fluid">
					<div class="carousel-caption">
						
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
		

		<!---------------About Us---------->
		<br><br><br><br><br><br><br><br><br><br><br>
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a id="aboutus"><h4 style="text-align:left;"><B>ABOUT US</B></h4></a>
						<div class="about-content" style="text-align:justify;">
							We take the liberty of introducing to you our Trust known as Vatsalya Trust, Mumbai which was registered with the Charity Commissioner, Mumbai on 08-02-1983. The main objective of our Trust is to take care of the destitute of all ages with special emphasis on children. <br>
							In particular,
							<ol>
								<li>To accept destitute / deserted children irrespective of caste, creed, religion, gender.</li>
								<li>To maintain them.</li>
								<li>To the extent possible to educate them and</li>
								<li>To the extent possible to rehabilitate them by adoption after observing the legal formalities.</li>
							</ol>
								<p>Moreover, for the past few years, we have been also actively working on providing shelter and Education to girls who are socially-economically deprived, Empowerment of women/youth through skill development programmes and Health care and guidance to children. </p>
						</div>
					</div>
					<div class="col-md-6 skills-bar" >
						<h4><b>PROGRESS IN OVERALL YEARS</b></h4><br>
						<p>Vatsalya 2014-15</p>
						<div class="progress">
						<div class="progress-bar" style="width:60%">60%</div>
						</div>
					<p>Vatsalya 2015-16</p>
						<div class="progress">
						<div class="progress-bar" style="width:75%">75%</div>
						</div>
					<p>Vatsalya 2016-17</p>
						<div class="progress">
						<div class="progress-bar" style="width:80%">80%</div>
						</div>
					<p>Vatsalya 2017-18</p>
						<div class="progress">
						<div class="progress-bar" style="width:91%">91%</div>
						</div>
					<p>Vatsalya 2018-19</p>
						<div class="progress">
						<div class="progress-bar" style="width:93%">93%</div>
						</div>
					</div>
				</div>
			</div>
			<section id="about">
				<div class="container">
					<div class="row">
					<div class="col-md-6" style="text-align:justify;">
						
							<h4><b>VISION</b></h4>
							<p>   “To create lasting solutions to improve quality of life for destitute and deprived of all ages, race, cast, religion and gender”</p>
							<h4><b>MISSION</b></h4>
							<p>“Help them to get the right to survival, protection, development and participation in societal development.  Eventually help them earn dignity and self respect"</p>
					
						
					</div>
					<div class="col-md-6">
					<video width="100%" height="100%" controls>
					  <source src="Vatsalya Trust Orphanage Visit.mp4" type="video/mp4">
					</video>
					</div>
					</div>
					</div>
					</section>
		</section>
		<?php 
		$qry = "SELECT * FROM pages order by position";
		$result = mysql_query($qry,$res);

		while($page=mysql_fetch_assoc($result)) { //print_r($page); ?>
		<section id="id_<?php echo $page['id']; ?>">
        <a class="nav-link" href="#id_<?php echo $page['id']; ?>"><?php echo $page['content']; ?></a>
		</section>
		<?php } ?> 
		
		<!------------Branches---------->

		<section id="branches">
			<div class="container">
				<h2><b>OUR INITIATIVES</b></h2>
			<div class="row branches">
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-home"></i>
				</div>
				<h3>Mumbai <br>(Kanjur Marg) </h3>
				<p><ol align="left">
					<a href="CCO.php"><li>Child Care (Orphanage)</li></a>
					<a href="aakar.php"><li>Rehabilitation Center(Aakar /Khushi)</li></a>
					<a href="K3.php"><li>Women Empowerment and Skill Development</li></a>
				</ol></p>
			</div>
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-home"></i>
				</div>
				<h3>Navi Mumbai (Sanpada) </h3>
				<p><ol align="left">
					<a href="OLDSAN.php"><li>Old Age Home</li></a>
					<a href="BSANPADA.php"><li>Balikashram</li></a>
					<a href="skill.php"><li>Skill Development Centre (PAP /Computer training)</li></a>
					<a href="Rehabilitysanpada.php"><li>Rehabilitation Center</li></a>
				</ol></p>
			</div>
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-home"></i>
				</div>
				<h3>Alibaug<br></h3><br>
				<p><ol align="left">
					<a href=""><li>Child Care Centre (Orphanage)</li></a>
					<a href=""><li>Rehabilitation Center</li></a>
				</ol></p>
			</div>
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-home"></i>
				</div>
				<h3> Badlapur<br>(proposed)</h3><br>
				<p><ol align="left">
					<a href=""><li>Old Age Home</li></a>
					<a href=""><li>Medical Centre</li></a>
					<a href=""><li>Skill Development Centre</li></a>
				</ol></p>
			</div>
			</div>
			</div>
		</section>

		










		<!-----------------Get in Touch----------->

		<!---<section id="contact">
			<div class="container">
				<a id="contactus"><h2><B>Get In Touch</B></h2></a>
				<div class="row">
				<div class="col-md-6">
				<form class="contact-form" method="post" action="feedback.php">
				<h3><b>Send Feedback</b></h3><br><br>
				<div class="form-group">
				<input type="text" name="Name" class="form-control" placeholder="Your Name">
				</div>
				<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Your Email">
				</div>
				<div class="form-group">
				<input type="text" name="subject" class="form-control" placeholder="Subject">
				</div>
				<div class="form-group">
				<textarea name="message" class="form-control" rows="6" placeholder="Message"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>
				<div class="col-md-6 contact-info">
					<form class="contact-form">
						<h3><b>Become a Volunteer</b></h3><br><br>
						<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone Number">
						</div>
						<div class="form-group">
						<textarea name="message" class="form-control" rows="6" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
				</div>
				</div>
			</div>
		</section>---->
		
		<!--------------------------Maps ------------------->

		<section id="contact">
			<div class="container">
				<h4 style="text-align:center;"><b>LOCATION</b></h4><br>
				<div class="row">
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5082432586646!2d72.9354902143776!3d19.12921745526974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7844f2030a3%3A0x553b3adfe6366e85!2sVatsalya%20Trust!5e0!3m2!1sen!2sin!4v1577613885120!5m2!1sen!2sin" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
				<div class="col-md-6 contact-info">
					<div class="follow"><b>Address : </b><i class="fa fa-map-marker"></i> Vatsalya Trust Near Kanjurmarg Police Station, Kanjurmarg (East), Mumbai - 400 042.
					</div>
					<div class="follow"><b>Phone : </b><i class="fa fa-phone"></i> 91-22-25782958/ 25794798 /25784810.
					</div>
					<div class="follow"><b>Fax : </b><i class="fa fa-fax"></i> 25784820.
					</div>
					<div class="follow"><b>Email : </b><i class="fa fa-envelope-o"></i> vatsalyatrustmumbai@gmail.com
					</div>
					<div class="follow"><label><b>Get Social : </b></label>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-youtube-play"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>	
				</div>
				</div>
			</div>
		</section>
		
		<!--------------Footer------------>

<?php
include("footer.php");
?>
</body>
</html>