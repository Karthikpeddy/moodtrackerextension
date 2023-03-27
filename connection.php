<?php
  $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moodtracker";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);
    
    // to ensure that the connection is made
    if (!$con)
    {
      die("Unable to connect to");
    }
    else{
      echo "connected successfully";
    }
  mysqli_close($con);
?>