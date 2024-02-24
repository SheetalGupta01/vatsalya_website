        <?php 
			include_once("header.php"); 
			$id= $_REQUEST['id'];
			if(!$id){
				header('Location:feedbacks.php');
			}
			$qry = "SELECT * FROM feedback where id=".$id." limit 1";
			$result = mysql_query($qry,$res);
			$nor = mysql_num_rows($result);
			if($nor<=0)
			{
				header('Location:feedbacks.php');
			}
			
			while($page = mysql_fetch_assoc($result))
			{
				$id= $page['id'];
				$name= $page['name'];
				$email= $page['email'];
				$subject= $page['subject'];
				$message= $page['message'];
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
									<label class="col-md-3">Name :</label>
									<div class="col-md-9">
										<?php echo $name; ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Email :</label>
									<div class="col-md-9">
										<?php echo $email; ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Subject :</label>
									<div class="col-md-9">
										<?php echo $subject; ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3">Message :</label>
									<div class="col-md-9">
										<?php echo $message; ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3">Created Date :</label>
									<div class="col-md-9">
										<?php echo $createdon; ?>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
                </div>
	    <?php include_once("footer.php"); ?>
		
        