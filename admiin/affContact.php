                                        <?php
                    /*if(!empty($_SESSION["nom"])){*/
                                         include ('../include/connexion1.php') ; 

                    $sql = "SELECT NAME,EMAIL,CATEGORY,SUBJECT,MESSAGE FROM  contact order by DATE DESC , TIME DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
                                        <td class="mailbox-star"><strong>Nom</strong></td>
                          <td class="mailbox-star" style="width: 1%" nowrap><strong>Email</strong></td>
                          <td class="mailbox-star"><strong>Categorie</strong></td>
                          <td class="mailbox-star"><strong>Sujet</strong></td>
                          <td class="mailbox-star"><strong>Message</strong></td>
                          
                          
              
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $nom = $row["NAME"];
                          $email = $row["EMAIL"];
                          $categorie = $row["CATEGORY"];
                          $sujet=$row["SUBJECT"];
                          $message=$row["MESSAGE"];
                          echo "  <tr>
                                        
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$nom</a></td>
                                        <td class=\"mailbox-subject\" > $email             
                                        </td>
                                        <td class=\"mailbox-subject\"> $categorie          
                                        </td>
                                        <td class=\"mailbox-attachment\">$sujet</td>
                                        <td class=\"mailbox-attachment\">$message</td>
                                        
                                    </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    /*}
                    else{
                      //*header('location: login.php');
                     echo 'rien';
                    }*/
                    ?>