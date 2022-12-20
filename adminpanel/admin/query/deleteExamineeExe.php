<?php 
 include("../../../conn.php");


extract($_POST);

$delExam = $conn->query("DELETE  FROM examinee_tbl WHERE exmne_id='$id'  ");
if($delExaminee)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>