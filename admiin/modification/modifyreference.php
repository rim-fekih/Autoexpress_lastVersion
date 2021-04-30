<?php
                      include ('../../includes/cnx1.php') ; 

session_start();
$id=$_SESSION["id"];

$ide=$_POST['id'];
$nom=$_POST['nom'];




copy($_FILES['im']['tmp_name'], "../../images/References/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];
$dat = date("d-m-Y");
$heure = date("H:i");
$sql = "update ref set ID=\"$ide\", TITLE_fr=\"$nom\"  ,  IMG1=\"$image\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Reference.php');
?>