<?php
                      include ('../../include/connexion1.php') ; 

$id=$_GET['ID'];
$sql = "delete from user where ID=$id";
$conn->query($sql);
$conn->close();
header('Location:../Admins.php');
?>