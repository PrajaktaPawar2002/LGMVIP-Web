

<?php 
session_start();

if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");


 ?>

<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
   
		background: <img src="images/bg.jp1" class="img-fluid" alt="..."> !important
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >



<?php 
  include("../../../conn.php");
  include("../query/countData.php");
 ?>








<!-- UI THEME DIRI -->
<?php
//include("includes/ui-theme.php"); 
 ?>


<div class="app-main__outer">
     <div class="app-main__inner">
        <div class="app-page-title">
        
                        

            <form action="student-add.php" method="POST" enctype="multipart/form-data">

            Enter Your csv file : <input type="file" name="file" enctype="multipart/form-data"/>
            <button type="submit" name="importcsv" class="btn btn-primary">Submit</button>

            </form>
    
        </div>
    </div>
</div> 






<?php

    

    if(isset($_POST['importcsv'])){

        $file = $_FILES["file"]["tmp_name"];

        if($_FILES["file"]["size"] > 0){

            //    echo "file upload done!";
            $quesfile = fopen($file,'r');
            
            while(($getData = fgetcsv($quesfile, 10000, ",")) !== FALSE){

             
                $insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_password) VALUES('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]','$getData[6]')  ");

	            if($insData)
	            {
                    $res = array("res" => "success", "msg" => $getData[0]);
                    header("Location:../home.php");
	            }
	            else
	            {
                    $res = array("res" => "failed");
	            }
                
            }

        }
        else{
            echo "file not uploaded!";
        }


    }


?>
















