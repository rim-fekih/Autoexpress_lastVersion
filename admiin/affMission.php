                                      <?php
                    
                    if(!empty($_SESSION["nom"])){
                                          include ('../includes/cnx1.php') ; 

                    $sql = "SELECT ID,TITLE_fr,DESCRIPTION_fr,BODY_fr,IMG1 FROM articles where type='Mission' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>Titre</strong></td>
                          <td class="mailbox-star"><strong>Description</strong></td>
                          <td class="mailbox-star"><strong>Corps</strong></td>
                          <td class="mailbox-star"><strong>Image</strong></td>

              
              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $titre = $row["TITLE_fr"];
                          $desc = $row["DESCRIPTION_fr"];
                          $corps = $row["BODY_fr"];
                          $img=$row["IMG1"];
                          $idMs=$row["ID"];
                          $_SESSION["corps"]=$corps;

                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$titre</a></td>
                                        <td class=\"mailbox-subject\"> $desc             
                                        </td>
                                        <td class=\"mailbox-subject\"> $corps             
                                        </td>
                                        <td class=\"mailbox-subject\">
                                        <img src=\"../images/about/$img\" height=\"100\" width=\"150\"></td>
                                        <td class=\"mailbox-attachment\"></td>
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Mission.php?idMs=$idMs&titre=$titre&image=$img&desc=$desc\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Mission.php?idMs=$idMs\">
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
                      header('location: Mission.php');
                    }
                    ?>