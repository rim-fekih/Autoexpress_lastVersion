<?php
                      include ('../includes/cnx1.php') ; 

$titre=$_POST["titre"];


$desc=$_POST["desc"];
$dat = date("d-m-Y");
$heure = date("H:i"); 
$im=$_FILES['im']['name'];
echo "$im";
copy($_FILES['im']['tmp_name'], '../images/certifications/' .basename($_FILES['im']['name']));


$sql = "insert into skills (TITLE_fr, DESCRIPTION_fr, IMG1, DATE, HEURE)
values (\"$titre\", \"$desc\", \"$im\", \"$dat\",\"$heure\")";

$conn->query($sql) ;

$conn->close();
header('location:./Certificat.php');
?>