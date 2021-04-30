<?php

//tconnecti lel base
                                        include ('../includes/cnx1.php') ; 

// recuperi l infos mtaa l event
$id=$_POST["id"];
$nom=$_POST["nom"];
copy($_FILES['vid']['tmp_name'], "../images/à la une/" .basename($_FILES['vid']['name']));
$video=$_FILES['vid']['name'];

// Create connection


// tsobhom fil base
$sql = "insert into actualite (id,nom,nom_video) values(\"$id\",\"$nom\",\"$video\")";
$conn->query($sql);
$conn->close();
header('Location: Actualites.php');
?>