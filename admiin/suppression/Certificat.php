<?php
                      include ('../../includes/cnx1.php') ; 

// sql to delete a record
$id=$_GET['idCer'];
$sql = "DELETE FROM skills WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    header('location:../Certificat.php');
} else {
    echo 'Error dans suppression veuillez visiter admiin/suppression/Mission.php ' . $conn->error;
}

$conn->close();
?>