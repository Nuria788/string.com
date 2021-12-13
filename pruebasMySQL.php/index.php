<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
     $servername = "localhost";
     $username = "wp_miblog_nuria";
     $password = "4";
     $dbname = "wp_bd";
     // Create connection
     $conn = mysqli_connect($servername, $username, $password);
     
     // Check connection
     if (!$conn) {
       echo("Connection failed: " . mysqli_connect_error());
     }else{
     echo "Connected successfully";
     }
     ?> 
  
  
</body>
</html>