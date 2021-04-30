<?php


                                        include ('../includes/cnx1.php') ; 


// recuperi l infos mtaa l event
$id=$_POST["id"];
$titre=$_POST["titre"];
$body=$_POST["body"];
copy($_FILES['im']['tmp_name'], "../images/solutions/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];


// Create connection
$sql = "insert into services_and_solutions (ID,TITLE_fr,IMG1,BODY) values(\"$id\",\"$titre\",\"$image\",\"$body\")";
$conn->query($sql);
$conn->close();
header('Location: Service et Solution.php');
?>