<?php
                                        include ('../includes/cnx1.php') ; 


$nom=$_GET["name"];
$email=$_GET["email"];
$pren=$_GET["firstname"];
$grade=$_GET["grade"];
$picture=$_GET["picture"];

// Create connection
 

$sql = "insert into member values (\"$email\",\"$nom\",\"$pren\",\"$grade\",\"$picture\");";
$conn->query($sql);
$conn->close();
header('Location: Gmembers.php');
?>