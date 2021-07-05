<?php
                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "control of robot arm");
                                  
                                   // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `range` WHERE 1"); 

          // LOOP TO PRINT DATA

While($row = $result->fetch_assoc()){

                echo "المحرك1 : ".$row['Range1']."<br>";
                echo "المحرك ا2 : ".$row['Range2']."<br>";
                echo "المحرك ا3 : ".$row['Range3']."<br>";
                echo "المحرك ا4 : ".$row['Range4']."<br>";
                echo "المحرك ا5 : ".$row['Range6']."<br>";
                echo "المحرك ا6 : ".$row['Range6']."<br>";
                echo "Run Button : ".$row['on or off']."<br>";


          }

          $conn->close(); 

          ?>