        <?php 
			$msg='';
			if(isset($_GET['msg']) && $_GET['msg']=='ES')
			{$msg = "Page edited successfully!";}
			if(isset($_GET['msg']) && $_GET['msg']=='AS')
			{$msg = "Page added successfully!";}
			include_once("header.php"); 
			$qry = "SELECT * FROM pages";
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Website Pages</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Pages</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="new_page.php" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Add New</a>
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
								<div class="row jq-icon-success"><?php echo $msg; ?></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Page Name</th>
                                                <th>Status</th>
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
                                                <td><?php echo $page['page_name']; ?></td>
                                                <td><?php echo $page['status']=='Y'?'Active':'Inactive'; ?></td>
												<td><?php echo $page['createdon']; ?></td>
                                                <td><a href="edit_page.php?id=<?php echo $page['id']; ?>" class="btn">Edit</a></td>
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