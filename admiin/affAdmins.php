                                        <?php
                    /*if(!empty($_SESSION["nom"])){*/
                      include ('../include/connexion1.php') ; 
                    $sql = "SELECT ID,DROIT,NOM,PRENOM,EMAIL,PWD FROM user";

                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
            echo'<tr>
              <td class="mailbox-star"></td>
                          <td class="mailbox-star"><strong>ID</strong></td>
                          <td class="mailbox-star"><strong>Nom</strong></td>
                          <td class="mailbox-star"><strong>Prenom</strong></td>

                          <td class="mailbox-star"><strong>Droit</strong></td>

                          <td class="mailbox-star"><strong>Email</strong></td>
              <td class="mailbox-star"></td>
              <td class="mailbox-star"></td>
                    </tr>';
                        while($row = $result->fetch_assoc()) {
                          $ID = $row["ID"];
                          $nom = $row["NOM"];
                          $prenom = $row["PRENOM"];

                          $droit =$row["DROIT"];
                          $email=$row["EMAIL"];
                          $pwd=$row["PWD"];
                          if ($droit=="admin" ){

                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $nom             
                                        </td>
                                        <td class=\"mailbox-subject\"> $prenom             
                                        </td>
                                        <td class=\"mailbox-attachment\">$droit</td>
                                        <td class=\"mailbox-attachment\">$email</td>
                                        
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Admins.php?ID=$ID&nom=$nom&prenom=$prenom&droit=$droit&email=$email&pwd=$pwd\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        <a href=\"suppression/Admins.php?ID=$ID\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></a>
                                        </div>
                                        </i>                    
                                        </button>
                                        </td>
                              
                                    </tr>"; }

                       else  if($droit=="superadmin") {
                        echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$ID</a></td>
                                        <td class=\"mailbox-subject\"> $nom             
                                        </td>
                                        <td class=\"mailbox-subject\"> $prenom             
                                        </td>
                                        <td class=\"mailbox-attachment\">$droit</td>
                                        <td class=\"mailbox-attachment\">$email</td>
                                        
                                        <td class=\"mailbox-corps\">
                                        <div class=\"btn-group\">
                                        <a href=\"modification/Admins.php?ID=$ID&nom=$nom&prenom=$prenom&droit=$droit&email=$email&pwd=$pwd\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button></a>
                                        
                                        </div>
                                        </i>                    
                                        </button>
                                        </td>
                              
                                    </tr>";






                       }










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