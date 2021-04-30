                                        <?php
                    /*if(!empty($_SESSION["nom"])){*/
                                         include ('../includes/cnx1.php') ; 


                    $sql = "SELECT ID,NAME,TEL FROM customers_support_entreprise ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Name</strong></td>
                          <td class="mailbox-star"><strong>Téléphone</strong></td>
              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $ID = $row["ID"];
                          $Name = $row["NAME"];
                          $Tel = $row["TEL"];
                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $Name             
                                        </td>
                                        <td class=\"mailbox-subject\"> $Tel             
                                        </td>
                                        
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Entreprise.php?ID=$ID&Name=$Name&Tel=$Tel\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Entreprise.php?ID=$ID\">
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