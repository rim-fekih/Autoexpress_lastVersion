<?php
                      include ('../../includes/cnx1.php') ; 

$titre=$_POST["titre"];
$desc=$_POST["desc"];
session_start();
$id=$_SESSION["idCer"];
$dat = date("d-m-Y");
$heure = date("H:i");
copy($_FILES['im']['tmp_name'], "../../images/certifications/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];

$sql = "update skills set TITLE_fr=\"$titre\", IMG1=\"$image\", DESCRIPTION_fr=\"$desc\", DATE_MODIFICATION=\"$dat\", HEURE_MODIFICATION=\"$heure\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Certificat.php');
?>