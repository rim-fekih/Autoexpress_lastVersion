<?php
                      include ('../../includes/cnx1.php') ; 

session_start();
$id=$_SESSION["id"];

$ide=$_GET['id'];
$ident=$_GET['ident'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$email=$_GET['mail'];
$pwd=$_GET['pwd'];



$dat = date("d-m-Y");
$heure = date("H:i");
$sql = "update customers_support_accounts set ID=\"$ide\", ID_ENTREPRISE=\"$ident\", NAME=\"$nom\", SURNAME=\"$prenom\", EMAIL=\"$email\", PWD=\"$pwd\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Clients.php');
?>