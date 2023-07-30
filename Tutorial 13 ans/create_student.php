<?php
   $conn = mysqli_connect("localhost", "root", "" , "university");
   $id = $_REQUEST["id"];
   $name = $_REQUEST["name"];
   $email = $_REQUEST["email"];
   $password = $_REQUEST["password"];
   if(!$conn)
   {
    die("Connection failed!");
   }

   $sql = "insert into students(id,name,email,password) values('".$id."','".$name."','".$email."','".$password."')";
   
   $conn->query($sql);

   
?>