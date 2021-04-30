                                        <?php
                    /*if(!empty($_SESSION["nom"])){*/
                                         include ('../includes/cnx1.php') ; 


                    $sql = "SELECT TITLE_fr,ID,IMG1 FROM ref";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Nom Reference</strong></td>
                          <td class="mailbox-star"><strong>Image</strong></td>
              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $titre = $row["TITLE_fr"];
                          $ID = $row["ID"];
                          $img =$row["IMG1"];
                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $titre            
                                        </td> 
                                        <td class=\"mailbox-subject\"> <img src=\"../images/References/$img\"    height= \"100\" width=\"150\">            
                                        </td>
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Reference.php?ID=$ID&titre=$titre&img=$img\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Reference.php?ID=$ID\">
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