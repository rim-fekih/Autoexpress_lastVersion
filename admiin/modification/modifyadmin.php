<?php
                      include ('../../includes/cnx1.php') ; 

session_start();
$id=$_SESSION["id"];

$ide=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$email=$_GET['mail'];
$pwd=$_GET['pwd'];

$droit=$_GET['droit'];


$dat = date("d-m-Y");
$heure = date("H:i");
$sql = "update users set ID=\"$ide\", DROIT=\"$droit\", NOM=\"$nom\", PRENOM=\"$prenom\", EMAIL=\"$email\", PWD=\"$pwd\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Admins.php');
?>