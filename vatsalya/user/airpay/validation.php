<?php
	
	// if($buyerEmail=='' && $buyerPhone =='' && $buyerFirstName =='' && $buyerLastName == '' && $amount == '')
	// {
	// 	createsendBack($sendBack='',$error='ALL', $id,$value,'error.php');
	// }
	if($buyerFirstName =='' && $buyerLastName == '' && $amount == '')
	{
		createsendBack($sendBack='',$error='ALL', $id,$value,'error.php');
	}
	if($buyerEmail=='')
	{
		//createsendBack($sendBack='',$error='E', $id,$value,'error.php');
	}
	else
	{	
		if (!filter_var($buyerEmail, FILTER_VALIDATE_EMAIL) ||  (strlen($buyerEmail) > 50) ){

			createsendBack($sendBack='',$error='VE', $id,$value,'error.php');	
		}
	}
	if($buyerPhone=='')
	{
		//createsendBack($sendBack='',$error='BP', $id,$value,'error.php');	
	}
	else
	{
		$regex = '/^[0-9- ]{8,15}$/i'; 
		if(!preg_match($regex,$buyerPhone)) {
			createsendBack($sendBack='',$error='VBP', $id,$value,'error.php');	
		}
	}
	if($buyerEmail=='' && $buyerPhone== '')
	{ 
       createsendBack($sendBack='',$error='EP', $id,$value,'error.php');
	}
	if($buyerFirstName=='')
	{
		createsendBack($sendBack='',$error='FN', $id,$value,'error.php');	
	}
	else
	{
		$regex = '/^[a-z \d]{1,50}$/i'; 
		if(!preg_match($regex,$buyerFirstName)) {
			createsendBack($sendBack='',$error='VFN', $id,$value,'error.php');	
		}
	}
	if($buyerLastName=='')
	{
		createsendBack($sendBack='',$error='LN', $id,$value,'error.php');	
	}
	else
	{
		$regex = '/^[a-z \d]{1,50}$/i'; 
		if(!preg_match($regex,$buyerLastName)) {
			createsendBack($sendBack='',$error='VLN', $id,$value,'error.php');	
		}
	}
	
	if($buyerAddress!='')
	{
		$regex =  '/^[a-z ,;.#$\/( )-_\d]{4,255}$/i';
		if(!preg_match($regex,$buyerAddress)) {
			createsendBack($sendBack='',$error='VADD', $id,$value,'error.php?a='.$buyerAddress);	
		}
	}
	if($buyerCity!='')
	{
		$regex =  '/^[a-z \d]{2,50}$/i';
		if(!preg_match($regex,$buyerCity)) {
			createsendBack($sendBack='',$error='VCIT', $id,$value,'error.php');	
		}
	}
	if($buyerState!='')
	{
		$regex =  '/^[a-z \d]{2,50}$/i';
		if(!preg_match($regex,$buyerState)) {
			createsendBack($sendBack='',$error='VSTA', $id,$value,'error.php');	
		}
	}
	if($buyerCountry!='')
	{
		$regex =  '/^[a-z \d]{2,50}$/i';
		if(!preg_match($regex,$buyerCountry)) {
			createsendBack($sendBack='',$error='VCON', $id,$value,'error.php');	
		}
	}

	if($buyerPinCode!='')
	{
		$regex = '/^[a-z\d]{4,8}$/i';
		if(!preg_match($regex,$buyerPinCode)) {
			createsendBack($sendBack='',$error='VPIN', $id,$value,'error.php');	
		}
	}
	
	if($amount=='')
	{
		createsendBack($sendBack='',$error='A', $id,$value,'error.php');	
	}
	else
	{
		$regex = '/^[0-9]{1,6}\.[0-9]{2,2}$/';
		if(!preg_match($regex,$amount)) {
			createsendBack($sendBack='',$error='VA', $id,$value,'error.php');	
		}
	}


function createsendBack($sendBack,$err='', $id, $value, $action){
	echo '<!DOCTYPE HTML>';
	echo '<html lang="en">';
	echo '<head>';
	echo '<meta charset="utf-8" />';
	echo '</head>';
	echo '<body onLoad="javascript:document.errorform.submit();">';
	echo '<form name="errorform" id="errorform" method="post" action="'.$action.'">';
	echo '<input type="hidden" id="bac" name="bac" value="'.htmlspecialchars($sendBack).'">';
	echo '<input type="hidden" id="status" name="status" value="'.$err.'">';
	echo '<input type="hidden" id="statusmsg" name="statusmsg" value="'.$statusmsg.'">';
	echo '<input type="hidden" id="'.$id.'" name="'.$id.'" value="'.$value.'">';
	echo '</form>';
	echo '</body>';
	echo '</html>';
	exit();
}
?>
