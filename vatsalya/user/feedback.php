<?php
$Name = filter_input(INPUT_POST, 'Name');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

if(!empty($Name)){
	if(!empty ($email)){
		if(!empty ($subject)) {
			if(!empty ($message)) {
				$host = "localhost";
				$dbName = "root";
				$dbemail = "";
				$dbsubject = "";
				$dbmessage = "";
				$dbname = "feedback";
			}
			else{
				echo"Message should not be empty";
				die();
			}
		}
		else{
				echo"Subject should not be empty";
				die();
			}
		}
		else{
				echo"Email should not be empty";
				die();
			}
		}
		else{
				echo"Name should not be empty";
				die();
			}
		
		
?>