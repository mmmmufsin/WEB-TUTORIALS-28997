<?php
   $conn = mysqli_connect("localhost", "root", "" , "university");
   if(!$conn)
   {
    die("Connection failed!");
   }

   echo "Database Connected";

   ?>
