<?php
                      include ('../../includes/cnx1.php') ; 


// sql to delete a record
$id=$_GET['id'];
$sql = "DELETE FROM actualite WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('location:../Actualites.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>