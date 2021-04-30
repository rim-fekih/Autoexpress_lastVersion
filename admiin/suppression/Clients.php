<?php
                      include ('../../includes/cnx1.php') ; 

$id=$_GET['ID'];
$sql = "delete from customers_support_accounts where ID=$id";
$conn->query($sql);
$conn->close();
header('Location:../Clients.php');
?>