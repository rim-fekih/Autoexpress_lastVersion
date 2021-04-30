                                        <?php
                    /*if(!empty($_SESSION["nom"])){*/
                                          include ('../includes/cnx1.php') ; 


                    $sql = "SELECT ID,TITLE_fr,BODY,IMG1 FROM partners";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Nom partenaire</strong></td>
                          
                          <td class="mailbox-star"><strong>Body</strong></td>
                          <td class="mailbox-star"><strong>Image</strong></td>

              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $titre = $row["TITLE_fr"];
                          $ID = $row["ID"];
                          $body=$row["BODY"];
                          $image=$row["IMG1"];
                          
                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $titre             
                                        </td>
                                        <td class=\"mailbox-subject\"> $body             
                                        </td>

                                        <td class=\"mailbox-subject\"> <img src=\"../images/partners/$image\"    height= \"100\" width=\"150\">             
                                        </td>
                                        <td class=\"mailbox-corps\">
                                         <div class=\"btn-group\">
                                        <a href=\"modification/Partenaire.php?ID=$ID&titre=$titre&body=$body&image=$image\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Partenaire.php?ID=$ID\">
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