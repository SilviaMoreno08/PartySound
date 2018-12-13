<?php
  
      $servername = "mysql.hostinger.co";
      $username = "u579153173_party";
      $password = "party123.";
      $dbname = "u579153173_party";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

  ?>