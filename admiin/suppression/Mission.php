<?php
                      include ('../../includes/cnx1.php') ; 


// sql to delete a record
$id=$_GET['idMs'];
$sql = "DELETE FROM articles WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    header('location:../Mission.php');
} else {
    echo 'Error dans suppression veuillez visiter admiin/suppression/Mission.php ' . $conn->error;
}

$conn->close();
?>