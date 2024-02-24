        <?php 
			$msg='';
			if(isset($_GET['msg']) && $_GET['msg']=='ES')
			{$msg = "Page edited successfully!";}
			if(isset($_GET['msg']) && $_GET['msg']=='AS')
			{$msg = "Page added successfully!";}
			include_once("header.php"); 
			if($_POST['filter_subject']){
				$where = ' WHERE subject ="'.$_POST['filter_subject'].'"';
			}
			$qry = "SELECT * FROM volunteer ".$where." order by createdon desc";
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Volunteers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Volunteers</li>
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
								<div class="row jq-icon-success"><?php echo $msg; ?></div>
								<form action name="volunteer_form" action="" method="post">
								<div class="form-group">
									<label for="sel1">Filter by : </label>
									<select name="filter_subject" placeholder="Subject" onchange="this.form.submit();"  >
									
									<option class="form-control" value="">All Subject</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Child Care(Orphanage)')?'selected':''; ?> value="Child Care(Orphanage)">Child Care(Orphanage)</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Rehabiliation Center')?'selected':''; ?> value="Rehabiliation Center">Rehabiliation Center</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Women Empowerment')?'selected':''; ?>  value="Women Empowerment">Women Empowerment</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Skill Development')?'selected':''; ?>  value="Skill Development">Skill Development</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Old Age Home')?'selected':''; ?>  value="Old Age Home">Old Age Home</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Balikashram')?'selected':''; ?>  value="Balikashram">Balikashram</option>
									<option class="form-control" <?php echo ($_POST['filter_subject']=='Medical Center')?'selected':''; ?>  value="Medical Center">Medical Center</option>
								  </select>
								  </div>
								  </form>
                                <div class="table-responsive mt-4">
                                    <table class="table" id="volunteerTable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Name</th>
                                                <th>Email</th>
												<th>Subject</th>
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
                                                <td><?php echo $page['name']; ?></td>
                                                <td><?php echo $page['email']; ?></td>
												<td><?php echo $page['Subject']; ?></td>
												<td><?php echo $page['createdon']; ?></td>
												<td><a href="volunteer_details.php?id=<?php echo $page['id']; ?>" class="btn">Detail</a></td>
                                                
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
		