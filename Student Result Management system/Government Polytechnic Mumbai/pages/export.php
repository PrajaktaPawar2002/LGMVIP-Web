<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost:3307", "root", "", "oes");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Name', 'Address', 'Gender', 'Designation', 'Age'));  
      $query = "SELECT * from tbl_employee ORDER BY id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  