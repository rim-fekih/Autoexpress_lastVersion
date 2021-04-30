<?php

//tconnecti lel base

                                        include ('../includes/cnx1.php') ; 
// recuperi l infos mtaa l event
$id=$_POST["id"];
$nomentr=$_POST["nom"];
$tel=$_POST["tel"];

// Create connection


// tsobhom fil base
$sql = "insert into customers_support_entreprise (ID,NAME,TEL) values (\"$id\",\"$nomentr\",\"$tel\") ";
$conn->query($sql);
$conn->close();
header('Location: Entreprise.php');
?>