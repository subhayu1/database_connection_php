<?php
$conn= new mysqli('localhost','webform', 'password');

if($conn ->connect_error){
      die("Connection Failed " , $conn->connect_error);
  }
echo "Connection successful";

?>
