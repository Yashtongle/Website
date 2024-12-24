<?php
  session_start();
 $severname="localhost";
 $username="root";
 $password="";
 $database="rock";

 $conn= mysqli_connect($severname,$username,$password,$database);
   if(!$conn){
    die("Something went wrong!");
   }
 ?>