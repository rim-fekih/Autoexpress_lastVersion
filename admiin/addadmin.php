<?php

                                       include ('../include/connexion1.php') ; 


// recuperi l infos mtaa l event
$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$droit=$_POST["droit"];
$pass=$_POST["pwd"];
$mail=$_POST["mail"];

// Create connection
// Check connection



// tsobhom fil base
$sql = "insert into user (ID,DROIT,NOM,PRENOM,EMAIL,PWD) values(\"$id\",\"$droit\",\"$nom\",\"$prenom\",\"$mail\",\"$pass\")";
$conn->query($sql);
$conn->close();
header('Location: Admins.php');
?>