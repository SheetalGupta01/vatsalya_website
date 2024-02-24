
 <?php 
			$msg='';
			if(isset($_GET['msg']) && $_GET['msg']=='ES')
			{$msg = "Page edited successfully!";}
			if(isset($_GET['msg']) && $_GET['msg']=='AS')
			{$msg = "Page added successfully!";}
			include_once("header.php"); 
			$qry = "SELECT * FROM donations order by createdon desc";
			$result = mysql_query($qry,$res);

			
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Donations</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Donations</li>
                        </ol>
                    </div>
                    
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
								<div class="row jq-icon-success"></div>
                                <div class="table-responsive mt-4">
                                    <table class="table" id="feedbackTable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
												<th>Order Id</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
												<th>Amount</th>
												<th>Created On</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
										<?php $i =0;
										while($page=mysql_fetch_assoc($result)) { // print_r($page); 
										$i++;
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>#<?php echo $page['id']; ?></td>
                                                <td><?php echo $page['buyerEmail']; ?></td>
                                                <td><?php echo $page['buyerPhone']; ?></td>
												<td><?php echo $page['buyerFirstName']; ?></td>
												<td><?php echo $page['buyerLastName']; ?></td>
												<td><?php echo $page['amount']; ?></td>
												<td><?php echo $page['createdon']; ?></td>
                                                <td><a href="donation_details.php?id=<?php echo $page['id']; ?>" class="btn">Detail</a></td>
                                            </tr>
										<?php } ?>
                                        </tbody>
		                           </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		
        <?php include_once("footer.php"); ?>
		
