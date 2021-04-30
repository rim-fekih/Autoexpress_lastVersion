 <?php
                    
                    if(!empty($_SESSION["nom"])){
                                          include ('../includes/cnx1.php') ; 


                    $sql = "SELECT * FROM ost_ticket order by created ASC, updated ASC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>Nom et Prenom</strong></td>
                          <td class="mailbox-star"><strong>Entreprise</strong></td>
                          <td class="mailbox-star"><strong>Adresse Mail</strong></td>
                          <td class="mailbox-star"><strong>Nom Fichier (Uploads/Fichier)</strong></td>

                          <td class="mailbox-star"><strong>Date</strong></td>
                          <td class="mailbox-star"><strong>Numéro de Tél</strong></td>
                          <td class="mailbox-star"><strong>Type de Problème</strong></td>
                          <td class="mailbox-star"><strong>Sujet</strong></td>

              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $Nom = $row["name"];
                          $entreprise = $row["entreprise"];
                          $email = $row["email"];
                          $tel=$row["phone"];
                          $type=$row["helptopic"];
                          $sujet=$row["subject"];
                          $fichier=$row["isanswered"];
                          $idTk=$row['ticketID'];
                          $Dat=$row["created"];
                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$Nom</a></td>
                                        <td class=\"mailbox-subject\"> $entreprise             
                                        </td>
                                        <td class=\"mailbox-subject\"> $email             
                                        </td>
                                                                  <td class=\"mailbox-star\">$fichier</td>

                                        <td class=\"mailbox-subject\"> $Dat             
                                        </td>
                                        <td class=\"mailbox-subject\"> $tel             
                                        </td>
                                        <td class=\"mailbox-subject\"> $type             
                                        </td>
                                        <td class=\"mailbox-subject\"> $sujet             
                                        </td>
                                        <td class=\"mailbox-attachment\"></td>
                                        <td class=\"mailbox-email\">
                                        <div class=\"btn-group\">
                                        <a href=\"suppression/Ticket.php?idTk=$idTk\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></a>
                                        </div>
                                        </i>                    
                                        </button>
                                        </td>
                                    </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    }
                    else{
                      header('location: Ticket.php');
                    }
                    ?>