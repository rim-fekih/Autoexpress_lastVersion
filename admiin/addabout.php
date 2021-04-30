<?php
                      include ('../includes/cnx1.php') ; 

$titre=$_POST["titre"];

$desc=$_POST["desc"];
$corps=$_POST["corps"];
$type="About";
$dat = date("d-m-Y");
$heure = date("H:i"); 
copy($_FILES['imageabout']['tmp_name'], '../images/about/' .basename($_FILES['imageabout']['name']));
$image=$_FILES['imageabout']['name'];
echo"$image";
$sql = "insert into articles (TITLE_fr, IMG1, DESCRIPTION_fr, BODY_fr, DATE, HEURE, type)
values (\"$titre\", \"$image\", \"$desc\", \"$corps\",\"$dat\",\"$heure\",\"$type\")";

$conn->query($sql) ;

$conn->close();
header('location:./About.php'); 
?>