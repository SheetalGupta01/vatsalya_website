<?php
$msg = $msg1 = "";

if(isset($_POST['feedback']))
{
	if($_SESSION['msg-digest']!= $_POST['msg-digest']){
	$_SESSION['msg-digest'] = $_POST['msg-digest'];
	$formtype='feedback';
		$feedbackQry = "INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['message']."')";
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
		
<link rel="stylesheet" type="text/css" href="contactstyle.css">

		<!-----------------Get in Touch----------->

		<section id="contact">
			<div class="container">
				<a id="contactus"><h2 style="text-align:center;"><B>Get In Touch</B></h2></a>
				<div class="row">
				
				<div class="col-md-6">
				<form class="contact-form" method="post" action="contact.php">
				<input type="hidden" name="msg-digest" value ="<?php echo rand(); ?>">
				<h3><b>Send Feedback</b></h3><br>
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
				<select placeholder="Subject" class="form-control" name="subject" >
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
						<h3><b>Become a Volunteer</b></h3><br>
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
		
	