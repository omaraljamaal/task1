<?php 
$conn = mysqli_connect("localhost", "root", "", "control of robot arm");

                                    // TO CHECK CONNECTION
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
 $Round1=$_POST['Round1'];
 $Round2=$_POST['Round2'];
 $Round3=$_POST['Round3'];
 $Round4=$_POST['Round4'];
 $Round5=$_POST['Round5'];
   $run=$_POST['run'];

if (isset($_POST['submit'])){
 

                      // ----------------- TO UPDATE DATABASE --------------------------------------

$sql="UPDATE `range` SET `Round1`='$Round1',`Round2`='$Round2',`Round3`='$Round3',`Round4`='$Round4',`Round5`='$Round5',`Round6`='$Range6' , `on or off`='$run' WHERE 1";



 //----------------- when the DATABASE IS NULL WE TURN ON --------------------------------------


 //$sql= "INSERT INTO `range` (`Round1`, `Round2`, `Round3`, `Round4`, `Round5`, `Round6`,`on or off`) VALUES ('".$_POST['Range1']."','".$_POST['Range2']."','".$_POST['Range3']."','".$_POST['Range4']."','".$_POST['Range5']."','".$_POST['Range6']."','".$_POST['run']."')";
 
echo "Record Values successfully";

$result = $conn->query($sql);
 

}