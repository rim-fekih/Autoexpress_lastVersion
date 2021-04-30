                                        <?php
                    
                    if(!empty($_SESSION["nom"])){
                      include ('../includes/cnx1.php') ; 

                    $sql = "SELECT id,nom_video,nom FROM actualite  ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Nom</strong></td>
                          <td class="mailbox-star"><strong>Video</strong></td>
              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $id = $row["id"];
                          $nom = $row["nom"];
                          $video = $row["nom_video"];
                          

                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$id</a></td>
                                        <td class=\"mailbox-subject\"> $nom             
                                        </td>
                                       
                                        <td class=\"mailbox-subject\">
                                         <video width=\"220\" height=\"90\" autoplay>
                                            <source src=\"../images/à la une/$video\" type=\"video/mp4\">
                                                              </td>
                                                              <td class=\"mailbox-attachment\"></td><td class=\"mailbox-corps\"><div class=\"btn-group\"><a href=\"modification/Actualites.php?id=$id&nom=$nom&video=$video\"></button></a><a href=\"suppression/Actualites.php?id=$id\"><button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></a></div></i></button></td>
                                        
                                    </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    }
                    else{
                      header('location: Actualites.php');
                    }
                    ?>