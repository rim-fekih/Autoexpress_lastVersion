<?php
                      include ('../includes/cnx1.php') ; 

$titre=$_POST["titre"];
$desc=$_POST["desc"];
$corps=$_POST["corps"];
$type="Valeur";
$dat = date("d-m-Y");
$heure = date("H:i");
copy($_FILES['im']['tmp_name'], "../images/about/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];
$sql = "insert into articles (TITLE_fr, IMG1, DESCRIPTION_fr, BODY_fr, DATE, HEURE, type)
values (\"$titre\", \"$image\", \"$desc\", \"$corps\",\"$dat\",\"$heure\",\"$type\")";

$conn->query($sql) ;

$conn->close();
header('location:./Valeur.php');
?>