<?php
                      include ('../../includes/cnx1.php') ; 

session_start();
$id=$_SESSION["id"];

$ide=$_GET['id'];
$nom=$_GET['nom'];
$tel=$_GET['tel'];




$dat = date("d-m-Y");
$heure = date("H:i");
$sql = "update customers_support_entreprise set ID=\"$ide\", NAME=\"$nom\",TEL=\"$tel\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Entreprise.php');
?>