<?php
                      include ('../../includes/cnx1.php') ; 

$id=$_GET['ID'];
$sql = "delete from customers_support_entreprise where ID=$id";
$conn->query($sql);
$conn->close();
header('Location:../Entreprise.php');
?>