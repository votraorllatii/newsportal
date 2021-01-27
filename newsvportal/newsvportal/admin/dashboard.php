<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>Dashboard i administratorit</title>
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <div id="wrapper">

            <div class="topbar">

                <div class="topbar-left">
                    <a href="index.html" class="logo"><span><span>Admin</span></span><i class="mdi mdi-layers"></i></a>
               
                </div>

            <?php include('includes/topheader.php');?>
            </div>


    <?php include('includes/leftsidebar.php');?>
           
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <title>News V-Portal</title>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                  

                        <div class="row">
<a href="manage-categories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" style="text-align:center;" >Lista e kategorive</p>
<?php $query=mysqli_query($con,"select * from tblcategory where Is_Active=1");
$countcat=mysqli_num_rows($query);
?>

                                        <h2 style="text-align:center;"><?php echo htmlentities($countcat);?> <small></small></h2>
                                    
                                    </div>
                                </div>
                            </div></a><!-- end col -->
<a href="manage-subcategories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" style="text-align:center;">Lista e nën kategorive</p>
<?php $query=mysqli_query($con,"select * from tblsubcategory where Is_Active=1");
$countsubcat=mysqli_num_rows($query);
?>
                                        <h2 style="text-align:center;"><?php echo htmlentities($countsubcat);?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>

     <a href="manage-posts.php">                       
        <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" style="text-align:center;">Lajmet</p>
<?php $query=mysqli_query($con,"select * from tblposts where Is_Active=1");
$countposts=mysqli_num_rows($query);
?>
                                        <h2 style="text-align:center;"><?php echo htmlentities($countposts);?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>
                
                  
                        </div>
                        <!-- end row -->
   
   <div class="row">
                    
      <a href="trash-posts.php"> 
      <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" style="text-align:center;">Lajmet e fshira</p>
<?php $query=mysqli_query($con,"select * from tblposts where Is_Active=0");
$countposts=mysqli_num_rows($query);
?>
                                        <h2 style="text-align:center;"><?php echo htmlentities($countposts);?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div></a>


                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow"  style="color:#337ab7;display:block;text-align:center;">Numri total i vizitoreve të faqes</p>

                                        <h2 style="text-align:center;"> <?php 
                                          session_start();
                                        if(isset($_SESSION['views'])){
                                          echo $_SESSION['views'];
                                          }
                                        ?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <?php include("config.php"); ?>

<script language="Javascript" src="<?php echo $base_url;?>count.php?page=<?php echo $_REQUEST['section'];?>">
</script>
<?php
echo "<br>";                
    

?>
</div>
                    </div> 

                </div> 
<?php include('includes/footer.php');?>

            </div>

    

        </div>



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <script src="assets/pages/jquery.dashboard.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>