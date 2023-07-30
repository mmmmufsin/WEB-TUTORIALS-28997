<?php

    $conn = mysqli_connect("localhost", "root", "" ,"university");

    if(!$conn){
        die("Connection failed!");
    }

    $sql = "SELECT * from students";

    $result = $conn->query($sql);

    ?>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
    ?>php
    

    if($result->num_rows> 0)
    {

        while($row = $result->fetch_assoc())
        {
        ?>
            <tr>

            </tr>
            
        }
        else
        {
            echo "no data";
            
        }
    }
?>
    </table>