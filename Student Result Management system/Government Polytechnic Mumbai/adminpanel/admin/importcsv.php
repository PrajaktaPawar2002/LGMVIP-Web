
<?php include("../../conn.php"); ?>
<!-- MAO NI ANG HEADER -->
<?php include("includes/header.php"); ?>      

<!-- UI THEME DIRI -->
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>



<div class="app-main__outer">
        <div class="app-main__inner">
        
        
                        
            <div>
                <form action="importcsv.php?exam_id=<?php echo $_GET['exam_id']?>" method="POST"  enctype="multipart/form-data">
                    Please select file : <input type="file" name="file" id="file"/>
                    <button type="submit" name="importcsv" >Submit</button>
                </form>
            </div>
                    
        </div>
</div>



<?php

    $examId = $_GET['exam_id'];

    if(isset($_POST['importcsv'])){

        // echo $examId;

        // // echo"file imported";
        $file = $_FILES["file"]["tmp_name"];

        if($_FILES["file"]["size"] > 0){

            //    echo "file upload done!";
            $quesfile = fopen($file,'r');
            
            while(($getData = fgetcsv($quesfile, 10000, ",")) !== FALSE){

                $insQuest = $conn->query("INSERT INTO exam_question_tbl(exam_id,exam_question,exam_ch1,exam_ch2,exam_ch3,exam_ch4,exam_answer) VALUES('$examId','$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]') ");

	            if($insQuest)
	            {
                    $res = array("res" => "success", "msg" => $getData[0]);
                    header("Location:manage-exam.php");
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