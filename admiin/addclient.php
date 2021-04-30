<?php

//tconnecti lel base

                                        include ('../includes/cnx1.php') ; 

// recuperi l infos mtaa l event
$id=$_POST["id"];
$ide=$_POST["ide"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$pass=$_POST["pwd"];
$mail=$_POST["mail"];

// Create connection
// Check connection

// tsobhom fil base
$sql = "insert into customers_support_accounts (ID,ID_ENTREPRISE,NAME,SURNAME,EMAIL,PWD) values(\"$id\",\"$ide\",\"$nom\",\"$prenom\",\"$mail\",\"$pass\")";
$conn->query($sql);
$conn->close();
header('Location: Clients.php');
?>