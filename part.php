<?php
include ('include/connexion1.php') ;

$sql2 = "SELECT * FROM partners";
$result2 = $conn->query($sql2);

while ($row2 = $result2->fetch_assoc()) {
  $nom=$row2["TITLE_fr"];
  $body=$row2["BODY"];
  $image=$row2["IMG1"];
  echo"<div class=\"item\">
			<div class=\"row\">
				<div class=\"col-md-offset-2 col-md-8\">
					<center><img src=\"images/animation/$image\"  eight=\"100\" width=\"75%\"></center>
					<center><h2>$nom </h2> </center>
					<p>$body</p>		
				</div>
			</div>
		</div>";
} 
?>