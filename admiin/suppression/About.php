<?php
                      include ('../../includes/cnx1.php') ; 

// sql to delete a record
$id=$_GET['idAb'];
$sql = "DELETE FROM articles WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    header('location:../About.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>