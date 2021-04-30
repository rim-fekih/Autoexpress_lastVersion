<?php
                    
                    /*if(!empty($_SESSION["nom"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "techprotn";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } */

                      include('../includes/cnx.php');  
            echo'<tr>
                          <td class="mailbox-star"><strong>Titre</strong></td>
                          <td class="mailbox-star"><strong>Logo</strong></td>

              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';

$req = $bdd->query('SELECT * FROM news ORDER BY DATE DESC');
$req2=$bdd->query('SELECT * FROM partners ORDER BY DATE DESC');
$req3=$bdd->query('SELECT * FROM ref ORDER BY DATE DESC');
$rq=$bdd->query('SELECT * FROM skills ORDER BY DATE DESC');
$rq1=$bdd->query('SELECT * FROM services_and_solutions ORDER BY DATE DESC');
while($donnees=$req->fetch())
{ 

echo '<tr>';

echo '<td>';

echo $donnees['TITLE_fr']; 
echo '</td>';
echo '<td>';

echo '<img src="../uploads/actualite/'.$donnees['IMG1'].'" height="100" width="150">';
echo '</td>';
echo'</tr>';

  
  
}

$req->closeCursor();
while($d=$req2->fetch())
{
  echo '<tr>';

echo '<td>';

echo $d['TITLE_fr']; 
echo '</td>';
echo '<td>';

echo '<img src="../uploads/partenaires/'.$d['IMG1'].'" height="100" width="150">';
echo '</td>';
echo'</tr>';
  
  
}
$req2->closeCursor();
while($r=$req3->fetch())
{
  echo '<tr>';

echo '<td>';

echo $r['TITLE_fr']; 
echo '</td>';
echo '<td>';

echo '<img src="../uploads/references/'.$r['IMG1'].'" height="100" width="150">';
echo '</td>';
echo'</tr>';
  
  
}
$req3->closeCursor();
while($res=$rq->fetch())
{
  echo '<tr>';

echo '<td>';

echo $res['TITLE_fr']; 
echo '</td>';
echo '<td>';

echo '<img src="../uploads/skills/'.$res['IMG1'].'" height="100" width="150">';
echo '</td>';
echo'</tr>';
  
  
}
$rq->closeCursor();
while($s=$rq1->fetch())
{ 

echo '<tr>';

echo '<td>';

echo $s['TITLE_fr']; 
echo '</td>';
echo '<td>';
if ($s['type']=='solution')
{
echo '<img src="../uploads/solutions/'.$s['IMG1'].'" height="100" width="150">';
echo '</td>';
}
else
{
echo '<img src="../uploads/services/'.$s['IMG1'].'" height="100" width="150">';
echo '</td>'; 
}
echo'</tr>';

  
  


$rq1->closeCursor();
}

?>