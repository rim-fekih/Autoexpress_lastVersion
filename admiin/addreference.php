<?php

//tconnecti lel base
                                        include ('../includes/cnx1.php') ; 


// recuperi l infos mtaa l event
$id=$_POST["id"];
$nomref=$_POST["reference"];
copy($_FILES['image']['tmp_name'], "../images/References/" .basename($_FILES['image']['name']));
$img=$_FILES['image']['name'];



// Create connection


// tsobhom fil base
$sql = "insert into ref (ID,TITLE_fr,IMG1) values (\"$id\",\"$nomref\",\"$img\") ";
$conn->query($sql);
$conn->close();
header('Location: Reference.php');
?>