<?php

if(isset($_POST['adrmail'])&&(isset($_POST['passe'])))
{
$login=$_POST['adrmail'];
$pass=$_POST['passe'];

include('./include/log.php');
// Vérification des identifiants

$re= $bdd->prepare("SELECT NOM,PRENOM,EMAIL,PWD,DROIT FROM user WHERE EMAIL = '$login' AND PWD = '$pass'");
$rep =$bdd->prepare("SELECT * FROM customers_support_accounts WHERE EMAIL = '$login' AND PWD = '$pass'");
$rep->execute(array(
'$login','$pass'
)); 
$re->execute(array(
     '$login','$pass'
    ));
$res1=$rep->fetch();
$res=$re->fetch();
if ($res)
{   
  session_start();
$_SESSION['adrmail'] = $login;
$_SESSION['passe'] = $pass;
$_SESSION['nom']=$res["NOM"];
$_SESSION['prenom']=$res["PRENOM"];
$_SESSION['droit']=$res["DROIT"];
  header('location:./admiin/admin_dashboard.php');
}
else if ($res1)
{
  session_start();
$_SESSION['adrmail'] = $login;
$_SESSION['passe'] = $pass;
$_SESSION['nom'] =$res1["NAME"];
$_SESSION['prenom']=$res1["SURNAME"];
  header('location:./client/client_dashboard.php');
}
 else{
	 echo"<script type=\"text/javascript\">
window.alert(\"Veuillez Verifier Votre login et la mot de passe\");
document.location.href = \"./index.php\";
</script>";

    Exit;
}
}               
?>