<?php
                      include ('../../includes/cnx1.php') ; 

$id=$_GET['ID'];
$sql = "delete from contact where NAME=$nom";
$conn->query($sql);
$conn->close();
header('Location:../Contact.php');
?>