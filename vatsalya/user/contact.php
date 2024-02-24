<?php
$msg = $msg1 = "";
include("headcopy.php");
if(isset($_POST['feedback']))
{
	if($_SESSION['msg-digest']!= $_POST['msg-digest']){
	$_SESSION['msg-digest'] = $_POST['msg-digest'];
	$formtype='feedback';
		$feedbackQry = "INSERT INTO `feedback` (`name`, `email`, `message`, `subject`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."', '".$_POST['subject']."')";
		$result = mysql_query($feedbackQry,$res);
		$insertId = mysql_insert_id();
		if($insertId)
		{
			$msg = "Feedback Submitted Successfully!";
			//unset($_SESSION['msg-digest']);
		}
	}
}
if(isset($_POST['volunteer']))
{
	if($_SESSION['msg-digest'] != $_POST['msg-digest'] ){
	$_SESSION['msg-digest'] = $_POST['msg-digest'];
	
	$formtype='volunteer';
	$volunteerQry = "INSERT INTO `volunteer` (`name`, `email`, `ph-no`, `message`, `Subject`) VALUES ('".$_POST['name1']."', '".$_POST['email1']."', '".$_POST['phno']."', '".$_POST['message']."','".$_POST['Subject']."')";
	$result = mysql_query($volunteerQry,$res);
	$insertId = mysql_insert_id();
	if($insertId)
	{
		$msg1 = " Submitted Successfully!";
	}
	}
}
 ?>
		


		<!-----------------Get in Touch----------->
<!-----------------Get in Touch----------->
				<img src="conus.jpg" width="100%" height="70%"><!--cous.jpg-->
		<section id="contact">
			<div class="container">
				<a id="contactus"><h2 style="text-align:center;"><B>GET IN TOUCH</B></h2></a>
				<div class="row">
				
				<div class="col-md-6">
				<form class="contact-form" method="post" action="contact.php">
				<input type="hidden" name="msg-digest" value ="<?php echo rand(); ?>">
				<h3><b>SEND FEEBACK</b></h3><br>
				<div class="form-group">
				<?php echo $msg; ?>
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Your Name" value="">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Your Email" value="">
				</div>
				<!---<div class="form-group">
				<input type="text" class="form-control" name="subject" placeholder="Subject" value="">
				</div>--->
				<div class="form-group">
				<textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
				</div>
				<div class="form-group">
				<label for="sel1">Subject: &nbsp; &nbsp;</label>

				<select  placeholder="Subject" class="form-control" name="subject" placeholder="Subject"   >
				<option class="form-control" value="Child Care(Orphanage)">Child Care(Orphanage)</option>
				<option class="form-control" value="Rehabiliation Center">Rehabiliation Center</option>
				<option class="form-control" value="Women Empowerment">Women Empowerment</option>
				<option class="form-control" value="Skill Development">Skill Development</option>
				<option class="form-control" value="Old Age Home">Old Age Home</option>
				<option class="form-control" value="Balikashram">Balikashram</option>
				<option class="form-control" value="Medical Center">Medical Center</option>
			  </select>
			  </div>
				<button name="feedback" type="submit" value="" class="btn btn-primary">Submit</button>
				</form>
				</div>
				<div class="col-md-6 contact-info">
					<form class="contact-form"  method="post" action="contact.php">
						<input type="hidden" name="msg-digest" value ="<?php echo rand(); ?>">
						<h3><b>BECOME A VOLUNTEER</b></h3><br>
						<div class="form-group">
				        <?php echo $msg1; ?>
				        </div>
						<div class="form-group">
						<input type="text" class="form-control" name="name1" placeholder="Your Name" value="">
						</div>
						
						<div class="form-group">
						<input type="email" class="form-control" name="email1" placeholder="Your Email" value="">
						</div>
						<div class="form-group">
						<input type="text" pattern="[789][0-9]{9}" class="form-control" name="phno" placeholder="Phone Number" value="">
						</div>
						<div class="form-group">
				<textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
				</div>
						<div class="form-group">
				<label for="sel1">Subject: &nbsp; &nbsp;</label>
				<select name="Subject" placeholder="Subject"  >
				<option class="form-control" value="Child Care(Orphanage)">Child Care(Orphanage)</option>
				<option class="form-control" value="Rehabiliation Center">Rehabiliation Center</option>
				<option class="form-control" value="Women Empowerment">Women Empowerment</option>
				<option class="form-control" value="Skill Development">Skill Development</option>
				<option class="form-control" value="Old Age Home">Old Age Home</option>
				<option class="form-control" value="Balikashram">Balikashram</option>
				<option class="form-control" value="Medical Center">Medical Center</option>
			  </select>
			  </div>
						<button name="volunteer" type="submit" class="btn btn-primary">Submit</button>
						</form>
				</div>
				</div>
			</div>
		</section>
		
	
		
		<!--------------------------Maps ------------------->

		<section id="contact">
			<div class="container">
				<h2 style="text-align:center;"><b>LOCATION</b></h2>
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
<?php include("footer.php"); ?>