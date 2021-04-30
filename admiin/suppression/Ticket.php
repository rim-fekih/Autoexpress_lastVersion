<?php
                      include ('../../includes/cnx1.php') ; 

// sql to delete a record
$id=$_GET['idTk'];
$sql = "DELETE FROM ost_ticket WHERE ticketID=$id";

if ($conn->query($sql) === TRUE) {
    header('location:../Ticket.php');
} else {
    echo 'Error dans suppression veuillez visiter admiin/suppression/Mission.php ' . $conn->error;
}

$conn->close();
?>