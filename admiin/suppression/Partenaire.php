<?php
                      include ('../../includes/cnx1.php') ; 

$id=$_GET['ID'];
$sql = "delete from partners where ID=$id";
$conn->query($sql);
$conn->close();
header('Location:../Partenaire.php');
?>