        <?php 
			include_once("header.php"); 
			$id= $_REQUEST['id'];
			if(!$id){
				header('Location:pages.php');
			}
			$qry = "SELECT * FROM pages where id=".$id." limit 1";
			$result = mysql_query($qry,$res);
			$nor = mysql_num_rows($result);
			if($nor<=0)
			{
				header('Location:pages.php');
			}
			
			if($_POST['action']=='Save')
			{
				$query = "UPDATE `pages` SET `page_name` = '".$_POST['page_name']."',`content` = '".$_POST['content']."',`status` = '".$_POST['status']."' WHERE `pages`.`id` = '".$id."'";
				//echo $query;
				mysql_query($query,$res);
				header('Location:pages.php?msg=ES');
			}
			while($page = mysql_fetch_assoc($result))
			{
				$id= $page['id'];
				$name= $page['page_name'];
				$content= $page['content'];
				$status= $page['status'];
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Website Pages</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="pages.php">Pages</a></li>
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
                                <form class="form-horizontal form-material" method="post">
									<input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="form-group row">
                                        <label class="col-md-3">Page Name</label>
                                        <div class="col-md-9">
                                            <input name="page_name" type="text" placeholder="Enter Page Name" class="form-control" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email" class="col-md-3">Content</label>
                                        <div class="col-md-9">
                                            <textarea name="content" id="page-content"><?php echo $content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Status</label>
                                        <div class="col-md-9">
                                            <input type="radio" value="Y" id="yes" class="form-control" name="status" <?php echo $status=='Y'?'checked':''; ?>> <label for="yes">Active</label>
                                            <input type="radio" value="N" id="no" class="form-control" name="status" <?php echo $status=='N'?'checked':''; ?>> <label for="no">InActive</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="action" value="Save" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
	    <?php include_once("footer.php"); ?>
		
        