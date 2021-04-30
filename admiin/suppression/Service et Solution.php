<?php
                      include ('../../includes/cnx1.php') ; 

$id=$_GET['ID'];
$sql = "delete from services_and_solutions where ID=$id";
$conn->query($sql);
$conn->close();
header('Location:../Service et Solution.php');
?>