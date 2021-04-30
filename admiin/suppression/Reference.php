<?php
                      include ('../../includes/cnx1.php') ; 

$id=$_GET['ID'];
$sql = "delete from ref where ID=$id";
$conn->query($sql);
$conn->close();
header('Location:../Reference.php');
?>