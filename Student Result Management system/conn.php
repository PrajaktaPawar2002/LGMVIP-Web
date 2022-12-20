<?php 
$host = "localhost:3307";
$user = "root";
$pass = "";
$db   = "oes";
$conn = null;


try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>