<?php
     $dbHost ="localhost";
     $dbUser ="root";
     $dbPass ="";
     $dbName ="sec_c";

     $conn1 = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
      
     if($conn1){
        //echo "Connected to DAta base";

     }
     else {
         die("Databases connection failed");
     }
    ?>