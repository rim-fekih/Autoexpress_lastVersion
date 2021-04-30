                                        <?php
                    /*if(!empty($_SESSION["nom"])){*/
                                          include ('../includes/cnx1.php') ; 


                    $sql = "SELECT ID,NAME,SURNAME,EMAIL,PWD,ID_ENTREPRISE FROM customers_support_accounts  " ;

                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Nom</strong></td>
                          <td class="mailbox-star"><strong>Prenom</strong></td>

                          

                          <td class="mailbox-star"><strong>EMAIL</strong></td>
              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $ID = $row["ID"];
                          $ID_ENTREPRISE=$row["ID_ENTREPRISE"];
                          $nom = $row["NAME"];
                          $prenom = $row["SURNAME"];
                          $email=$row["EMAIL"];
                          $pwd=$row["PWD"];


                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $nom             
                                        </td>
                                        <td class=\"mailbox-subject\"> $prenom             
                                        </td>
                                        <td class=\"mailbox-attachment\">$email</td>
                                        
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Clients.php?ID=$ID&nom=$nom&prenom=$prenom&ID_ENTREPRISE=$ID_ENTREPRISE&email=$email&pwd=$pwd\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Clients.php?ID=$ID\">
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
                    /*}
                    else{
                      //*header('location: login.php');
                     echo 'rien';
                    }*/
                    ?>