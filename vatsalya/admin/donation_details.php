        <?php 
			include_once("header.php"); 
			$id= $_REQUEST['id'];
			if(!$id){
				header('Location:donations.php');
			}
			$qry = "SELECT * FROM donations where id=".$id." limit 1";
			$result = mysql_query($qry,$res);
			$nor = mysql_num_rows($result);
			if($nor<=0)
			{
				header('Location:donations.php');
			}
			
			while($page = mysql_fetch_assoc($result))
			{
				$id= $page['id'];
				$buyerEmail= $page['buyerEmail'];
				$buyerPhone= $page['buyerPhone'];
				$buyerFirstName= $page['buyerFirstName'];
				$buyerLastName= $page['buyerLastName'];
				$buyerAddress= $page['buyerAddress'];
				$buyerCity= $page['buyerCity'];
				$buyerState= $page['buyerState'];
				$buyerCountry= $page['buyerCountry'];
				$buyerPincode= $page['buyerPinCode'];
				$status= $page['status'];
				$message= $page['message'];
				$amount= $page['amount'];
				$createdon= $page['createdon'];
			}

			
		?>
        <?php include_once("head.php"); ?>
		<!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Feedbacks</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="feedbacks.php">Feedbacks</a></li>
                            <li class="breadcrumb-item active"><?php echo $name; ?></li>
                        </ol>
                    </div>
                    <!--div class="col-md-7 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Add New</a>
                    </div-->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
								<div class="form-group row">
									<label class="col-md-3">Order Id :</label>
									<div class="col-md-9">
										#<?php echo $id; ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Email Id :</label>
									<div class="col-md-9">
										<?php echo $buyerEmail; ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Phone Number :</label>
									<div class="col-md-9">
										<?php echo $buyerPhone; ?>
									</div>
								</div>
								

								<div class="form-group row">
									<label class="col-md-3">First Name :</label>
									<div class="col-md-9">
										<?php echo $buyerFirstName; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Last Name :</label>
									<div class="col-md-9">
										<?php echo $buyerLastName; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Address:</label>
									<div class="col-md-9">
										<?php echo $buyerAddress; ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3">City :</label>
									<div class="col-md-9">
										<?php echo $buyerCity; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">State :</label>
									<div class="col-md-9">
										<?php echo $buyerState; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Country :</label>
									<div class="col-md-9">
										<?php echo $buyerCountry; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Pincode :</label>
									<div class="col-md-9">
										<?php echo $buyerPincode; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Order Id :</label>
									<div class="col-md-9">
										<?php echo $orderid; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Amount :</label>
									<div class="col-md-9">
										<?php echo $amount; ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-3">Donated Date :</label>
									<div class="col-md-9">
										<?php echo $createdon; ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Transaction Status :</label>
									<div class="col-md-9">
										<?php echo $status; ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Message :</label>
									<div class="col-md-9">
										<?php echo $message; ?>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
                </div>
	    <?php include_once("footer.php"); ?>
		
        