<?php 

   // Create connection
  $conn = new mysqli("127.0.0.1", "root", "root", "Ventas", 3306);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

?>  
