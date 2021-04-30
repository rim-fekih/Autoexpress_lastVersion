<?php

//tconnecti lel base
                                        include ('../includes/cnx1.php') ; 

// recuperi l infos mtaa l event
$id=$_POST["id"];
$nompartenaire=$_POST["nom"];
$body=$_POST["body"];
copy($_FILES['image']['tmp_name'], "../images/partners/" .basename($_FILES['image']['name']));
$image=$_FILES['image']['name'];




// tsobhom fil base
$sql = "insert into partners (ID,TITLE_fr,BODY,IMG1) values (\"$id\",\"$nompartenaire\",\"$body\",\"$image\") ";
$conn->query($sql);
$conn->close();
header('Location: Partenaire.php');
?>