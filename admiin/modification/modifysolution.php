<?php
                      include ('../../includes/cnx1.php') ; 

session_start();
$id=$_SESSION["id"];

$ide=$_POST['id'];
$nom=$_POST['nom'];
$BODY=$_POST['body'];


copy($_FILES['im']['tmp_name'], "../../images/solutions/" .basename($_FILES['im']['name']));
$image=$_FILES['im']['name'];




$sql = "update services_and_solutions set ID=\"$ide\", TITLE_fr=\"$nom\", BODY=\"$BODY\",IMG1=\"$image\" where ID='$id' ";

$conn->query($sql) ;

$conn->close();
header('location:../Service et Solution.php');
?>