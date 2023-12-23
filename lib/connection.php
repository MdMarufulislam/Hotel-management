<?php 
  
  $host ="localhost";
  $user ="root";
  $pass ="";
  $db 	="database_one";

  $conn = new mysqli($host,$user,$pass,$db);

  if ($conn -> connect_error){
  	die($conn -> error);
  }else{
  	// echo "Database Connected";
  }


 ?>