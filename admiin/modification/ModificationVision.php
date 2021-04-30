<?php
                      include ('../../includes/cnx1.php') ; 

$titre=$_POST["titre"];
$desc=$_POST["desc"];
$corps=$_POST["corps"];
session_start();
$id=$_SESSION["idVi"];
$dat = date("d-m-Y");
$heure = date("H:i");
copy($_FILES['im']['tmp_name'], "../images/about/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];

$sql = "update articles set TITLE_fr=\"$titre\", IMG1=\"$image\", DESCRIPTION_fr=\"$desc\", BODY_fr=\"$corps\", DATE_MODIFICATION=\"$dat\", HEURE_MODIFICATION=\"$heure\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Vision.php');
?>