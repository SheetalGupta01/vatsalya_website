<html>
<?php
include("headcopy.php");
$msg = $msg1 = "";
if(!empty($_POST))
{
	if($_SESSION['msg-digest']!= $_POST['msg-digest']){
	$_SESSION['msg-digest'] = $_POST['msg-digest'];
	$formtype='donations';
		$donationQry = "INSERT INTO `donations`(`buyerEmail`, `buyerPhone`, `buyerFirstName`, `buyerLastName`, `buyerAddress`, `buyerCity`, `buyerState`, `buyerCountry`, `buyerPinCode`, `amount`, `status`, `message`) VALUES ('".$_POST['buyerEmail']."', '".$_POST['buyerPhone']."','".$_POST['buyerFirstName']."','".$_POST['buyerLastName']."','".$_POST['buyerAddress']."','".$_POST['buyerCity']."','".$_POST['buyerState']."','".$_POST['buyerCountry']."','".$_POST['buyerPinCode']."','".$_POST['amount']."','Pending','Awaiting response from payment gateway')";
		
		$result = mysql_query($donationQry,$res);
		//print_r($result); exit;
		$insertId = mysql_insert_id();
		if($insertId)
		{
			$_POST['orderid'] = $insertId;
			include('airpay/sendtoairpay.php');
			//unset($_SESSION['msg-digest']);
		}
	}
}
?>
<head>

<style>
.form-horizontal
	{
    
	 background: #efefef;
    padding-top: 40px;
    padding-bottom: 40px;
    color: #777;
	
}
::placeholder
{
    color: #999 !important;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 50%;
  background-color: #3385ff;
  color: #000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #99c2ff;
}



</style>
</head>
<body>
<!---------------Donation------------------>
<img src="donation.jpg" width="100%" height="70%"><br>
<h2 style="text-align:center;"><b>DONATION</b></h2>
<center>
<form class="form-horizontal" name="make_trans" action="" method="post" onsubmit="return validate();" >
<input type="hidden" name="msg-digest" value ="<?php echo rand(); ?>">

    <div>
        <label>Email Id<font color = "red"></font></label>
        <div>
            <input type="text" placeholder="Enter your Email Id" id="buyerEmail" name="buyerEmail" onkeypress = "changecolor(this.id,'buyerEmailspan')" maxlength = "50"> <span id = "buyerEmailspan" name = "buyerEmailspan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>Phone Number<font color = "red"></font></label>
        <div>
            <input type="text" placeholder="Enter your Phone Number" id="buyerPhone" name="buyerPhone" onkeypress = "changecolor(this.id,'buyerPhonespan')" maxlength = "15"> <span id = "buyerPhonespan" name = "buyerPhonespan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>First Name<font color = "red">*</font></label>
        <div>
            <input type="text" placeholder="Enter your First Name" id="buyerFirstName" name="buyerFirstName" onkeypress = "changecolor(this.id,'buyerFirstNamespan')" maxlength = "50">
			 <span id = "buyerFirstNamespan" name = "buyerFirstNamespan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>Last Name<font color = "red">*</font></label>
        <div>
            <input type="text" placeholder="Enter your Last Name " id="buyerLastName" name="buyerLastName" onkeypress = "changecolor(this.id,'buyerLastNamespan')" maxlength = "50">
			 <span id = "buyerLastNamespan" name = "buyerLastNamespan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>Address</label>
        <div>
            <input type="text" placeholder="Enter your Address" id="buyerAddress" name="buyerAddress" maxlength = "255" onkeypress = "changecolor(this.id,'buyerAddressspan')">
			<span id = "buyerAddressspan" name = "buyerAddressspan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>City</label>
        <div>
            <input type="text" placeholder="Enter your City" id="buyerCity" name="buyerCity" maxlength = "50" onkeypress = "changecolor(this.id,'buyerCityspan')">
			<span id = "buyerCityspan" name = "buyerCityspan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>State</label>
        <div>
            <input type="text" placeholder="Enter your State" id="buyerState" name="buyerState" maxlength = "50" onkeypress = "changecolor(this.id,'buyerStatespan')">
			<span id = "buyerStatespan" name = "buyerStatespan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>Country</label>
        <div>
            <input type="text" placeholder="Enter your Country" id="buyerCountry" name="buyerCountry" maxlength = "50" onkeypress = "changecolor(this.id,'buyerCountryspan')">
			<span id = "buyerCountryspan" name = "buyerCountryspan" style = "display:none" class = "makeRed"></span>
        </div>
    </div><div>
        <label>Pincode</label>
        <div>
            <input type="text" placeholder="Enter your Pincode" id="buyerPinCode" name="buyerPinCode" maxlength = "8" onkeypress = "changecolor(this.id,'buyerPinCodespan')" >
			<span id = "buyerPinCodespan" name = "buyerPinCodespan" style = "display:none" class = "makeRed"></span>
        </div>
    </div>
	<div>
        <label>Amount<font color = "red">*</font></label>
        <div>
            <input type="text" id="amount" name="amount" value="1.00" readonly onkeypress = "changecolor(this.id,'amountspan')">
            <span id = "amountspan" name = "amountspan" style = "display:none" class = "makeRed"></span>
        </div>
    </div>
	
	
    <div>
		<br>
        <div>
           <!-- <button type="submit" class="btn">Pay Here</button>--->
			<input type="submit" class="btn" value="Pay Here">
        </div>
    </div>
</form>
</center>
<script type="text/javascript">
function validate(){
			var rt_type;
            document.getElementById('buyerEmailspan').innerHTML = '';
            document.getElementById('buyerEmail').style.borderColor  = '';
            document.getElementById('buyerPhonespan').innerHTML = '';
            document.getElementById('buyerPhonespan').style.borderColor  = '';
			if(document.getElementById('buyerEmail').value == "")
			{
				document.getElementById('buyerEmail').style.borderColor  = 'red';
				<!--document.getElementById('buyerEmailspan').style.display  = '';-->
				document.getElementById('buyerEmailspan').innerHTML = alert("Please enter email address.");
				rt_type = false;
			}
			else
			{
				var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
				if (reg.test(document.getElementById('buyerEmail').value)){
					rt_type;
				}else
				{
					document.getElementById('buyerEmail').style.borderColor  = 'red';
					<!---document.getElementById('buyerEmailspan').style.display  = '';-->
					document.getElementById('buyerEmailspan').innerHTML = alert("Please enter valid email.");
					rt_type = false;
				}
			}
			if(document.getElementById('buyerPhone').value == "")
			{
				document.getElementById('buyerPhone').style.borderColor  = 'red';
				<!---document.getElementById('buyerPhonespan').style.display  = '';-->
				document.getElementById('buyerPhonespan').innerHTML = alert("Please enter phone number.");
				rt_type = false;
			}
			else
			{
				var specials=/^[\d\s\.\-]+$/
				if (!specials.test(document.getElementById('buyerPhone').value)){
					document.getElementById('buyerPhone').style.borderColor  = 'red';
					<!--document.getElementById('buyerPhonespan').style.display  = '';-->
					document.getElementById('buyerPhonespan').innerHTML = alert("Please enter valid phone number.");
					rt_type = false;
				}
				else
				{
					var phone = document.getElementById('buyerPhone').value;
					if(phone.length<8)
					{
						document.getElementById('buyerPhone').style.borderColor  = 'red';
						<!--document.getElementById('buyerPhonespan').style.display  = '';-->
						document.getElementById('buyerPhonespan').innerHTML = alert("Phone number should be minimum 8 digit.");
						rt_type = false;
					}
				}

			}
		    if(document.getElementById('buyerEmail').value == "" && document.getElementById('buyerPhone').value == ""){
              		document.getElementById('buyerPhone').style.borderColor  = 'red';
					<!--document.getElementById('buyerPhonespan').style.display  = '';-->
					document.getElementById('buyerPhonespan').innerHTML = alert("Please enter either email or phone number.");
					rt_type = false;
			}
			if(document.getElementById('buyerFirstName').value == "")
			{
				document.getElementById('buyerFirstName').style.borderColor  = 'red';
				<!--document.getElementById('buyerFirstNamespan').style.display  = '';-->
				document.getElementById('buyerFirstNamespan').innerHTML = alert("Please enter first name.");
				rt_type = false;
			}
			else
			{
				var reg = /^[A-Za-z\d\s]+$/;
				if (!reg.test(document.getElementById('buyerFirstName').value)){
					document.getElementById('buyerFirstName').style.borderColor  = 'red';
					<!---document.getElementById('buyerFirstNamespan').style.display  = '';--->
					document.getElementById('buyerFirstNamespan').innerHTML = alert("Please enter valid first name.");
					rt_type = false;
				}
				else
				{
					var fname = document.getElementById('buyerFirstName').value;
					if(fname.length<1)
					{
						document.getElementById('buyerFirstName').style.borderColor  = 'red';
						<!---document.getElementById('buyerFirstNamespan').style.display  = '';-->
						document.getElementById('buyerFirstNamespan').innerHTML = alert("First name should be minimum 1 character.");
						rt_type = false;
					}
				}

			}
			if(document.getElementById('buyerLastName').value == "")
			{
				document.getElementById('buyerLastName').style.borderColor  = 'red';
				<!---document.getElementById('buyerLastNamespan').style.display  = '';-->
				document.getElementById('buyerLastNamespan').innerHTML = alert("Please enter last name.");
				rt_type = false;
			}
			else
			{
				var reg = /^[A-Za-z\d\s]+$/;
				if (!reg.test(document.getElementById('buyerLastName').value)){
					document.getElementById('buyerLastName').style.borderColor  = 'red';
					<!--document.getElementById('buyerLastNamespan').style.display  = '';-->
					document.getElementById('buyerLastNamespan').innerHTML = alert("Please enter valid last name.");
					rt_type = false;
				}
				else
				{
					var fname = document.getElementById('buyerLastName').value;
					if(fname.length<1)
					{
						document.getElementById('buyerLastName').style.borderColor  = 'red';
						<!--document.getElementById('buyerLastNamespan').style.display  = '';-->
						document.getElementById('buyerLastNamespan').innerHTML = alert("Last name should be minimum 1 character.");
						rt_type = false;
					}
				}

			}
			if(document.getElementById('buyerAddress').value != "")
			{
				var reg = /^[A-Za-z. ,;#$\/()-_]*$/;
				if (!reg.test(document.getElementById('buyerAddress').value)){
					document.getElementById('buyerAddress').style.borderColor  = 'red';
					<!--document.getElementById('buyerAddressspan').style.display  = '';-->
					document.getElementById('buyerAddressspan').innerHTML = alert("Please enter valid address.");
					rt_type = false;
				}
			}
			if(document.getElementById('buyerPinCode').value != "")
			{

				var reg = /^[A-Za-z\d]+$/;
				if (!reg.test(document.getElementById('buyerPinCode').value)){
					document.getElementById('buyerPinCode').style.borderColor  = 'red';
					<!--document.getElementById('buyerPinCodespan').style.display  = '';-->
					document.getElementById('buyerPinCodespan').innerHTML = alert("Please enter valid pincode.");
					rt_type = false;
				}
			}

				
			if(document.getElementById('amount').value == "")
			{
				document.getElementById('amount').style.borderColor  = 'red';
				<!--document.getElementById('amountspan').style.display  = '';-->
				document.getElementById('amountspan').innerHTML = alert("Please enter amount.");
				rt_type = false;
			}
			else
			{
				val = document.getElementById('amount').value;
				if (!val.match(/^(\d{1,6})(\.\d{2})$/)) {
					document.getElementById('amount').style.borderColor  = 'red';
					<!--document.getElementById('amountspan').style.display  = '';-->
					document.getElementById('amountspan').innerHTML = alert("Please enter valid amount e.g. 99.50");
					rt_type = false;
				}
			}
			
			
			 return rt_type;
		}
		function changecolor(txtid, spanid)
		{
			document.getElementById(txtid).style.borderColor  = '';
			document.getElementById(spanid).style.display  = 'none';
		}
		</script>
<!--------------Footer------------>

<?php
include("footer.php");
?>
</body>
</html>
