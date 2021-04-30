                                        <?php
                    
                    if(!empty($_SESSION["nom"])){
                                          include ('../includes/cnx1.php') ; 


                    $sql = "SELECT * FROM skills order by DATE DESC, DATE_MODIFICATION DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>Titre</strong></td>
                          <td class="mailbox-star"><strong>Description</strong></td>
                          <td class="mailbox-star"><strong>Date</strong></td>
                          <td class="mailbox-star"><strong>Logo</strong></td>
                          

              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $titre = $row["TITLE_fr"];
                          $desc = $row["DESCRIPTION_fr"];
                          $date = $row["DATE"];
                          $image= $row["IMG1"];
                          $idCer=$row["ID"];

                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$titre</a></td>
                                        <td class=\"mailbox-subject\"> $desc             
                                        </td>
                                        <td class=\"mailbox-subject\"> $date             
                                        </td>
                                        <td class=\"mailbox-subject\">
                                        <img src=\"../images/certifications/$image\" height=\"100\" width=\"150\"></td>
                                        <td class=\"mailbox-attachment\"></td>
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Certificat.php?idCer=$idCer&titre=$titre&desc=$desc&image=$image\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Certificat.php?idCer=$idCer\">
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
                      header('location: Certificat.php');
                    }
                    ?>