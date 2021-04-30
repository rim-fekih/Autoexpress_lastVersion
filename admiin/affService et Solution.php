                    <?php
                    /*if(!empty($_SESSION["nom"])){*/
                                          include ('../includes/cnx1.php') ; 


                    $sql = "SELECT ID,TITLE_fr,IMG1,DESCRIPTION_fr,BODY FROM services_and_solutions";

                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Titre</strong></td>
                          <td class="mailbox-star"><strong>Image</strong></td>


                          <td class="mailbox-star" width="800"><strong>Body</strong></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $ID = $row["ID"];
                          $titre = $row["TITLE_fr"];
                          $image = $row["IMG1"];

                          $BODY =$row["BODY"];


                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $titre             
                                        </td>
                                        <td class=\"mailbox-subject\"> <img src=\"../images/solutions/$image\"    height= \"100\" width=\"150\">        
                                        </td>
                                        <td class=\"mailbox-attachment\">$BODY</td>
                                       
                                        
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Service et Solution.php?ID=$ID&titre=$titre&image=$image&BODY=$BODY\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Service et Solution.php?ID=$ID\">
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