<?php
                      include ('../../includes/cnx1.php') ; 

session_start();
$id=$_SESSION["id"];

$ide=$_POST['id'];
$nom=$_POST['nom'];
$body=$_POST['body'];
copy($_FILES['im']['tmp_name'], "../../images/partners/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];


$sql = "update partners set ID=\"$ide\", TITLE_fr=\"$nom\" ,BODY=\"$body\",IMG1=\"$image\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Partenaire.php');
?>