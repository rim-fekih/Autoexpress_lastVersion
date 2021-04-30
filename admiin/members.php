<?php
if(!empty($_SESSION["nom"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "club";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT email,grade,nom FROM member";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          $nnom = $row["nom"];
                          $email = $row["email"];
                          $grade = $row["grade"];
                          echo "  <tr>
                                        <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                        <td class=\"mailbox-name\"><a href=\"read-mail.html\">$nnom</a></td>
                                        <td class=\"mailbox-subject\"><b>$email</b> - $grade             
                                        </td>
                                        <td class=\"mailbox-attachment\"></td>
                                        <td class=\"mailbox-date\">
                                        <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-gears\"></i></button><a href=\"delmember.php?email=$email\">
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
                    $conn->close();}
                    else {
                      header('location: login.html');
                    }
                    ?>