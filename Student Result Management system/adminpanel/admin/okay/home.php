<?php 
session_start();

if(!isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:index1.php");


 ?>

<?php include("conn.php"); ?>

<!-- MAO NI ANG HEADER -->
<?php 
include("includes/header.php"); 
?>      
<!-- UI THEME DIRI -->
<?php
 //include("includes/ui-theme.php"); 
 ?>






<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>














    <?php 





   @$page = $_GET['page'];














   if($page != '')
   {
     if($page == "exam")
     {
       include("pages/exam.php");
     }
     else if($page == "result")
     {
       include("pages/result.php");
     }
     else if($page == "myscores")
     {
       include("pages/myscores.php");
     }
     
   }
   // Else ang home nga page mo display
   else
   {
     include("pages/home.php"); 
   }
 ?> 








<!-- <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                <img src="images/bg.jpg" class="img-responsive banner-img" >
                </div>
        </div>  -->
<!-- <div>

<img src="images/exam.png" class="img-thumbnail" alt="...">

  </div> -->













<!-- MAO NI IYA FOOTER -->








<!-- 
 <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                <img src="images/exam.png" class="img-responsive banner-img" >
                </div>
        </div>  -->

        <?php include("includes/footer.php"); ?>
        <?php include("includes/modals.php"); ?>


