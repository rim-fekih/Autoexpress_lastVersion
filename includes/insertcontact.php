<?php
if(isset($_POST['submit']))
{
if ((isset($_POST['name'])) AND (isset($_POST['email']))AND (isset($_POST['message'])) AND (isset($_POST['subject'])) )

{  
$d=date("d-m-Y");
$h=date("H:i");
$dat=$d.' '.$h;
$name=$_POST['name'];
$msg=$_POST['message'];
$adr=$_POST['email'];
$s=$_POST['subject'];
mail('AutoExpress@gmail.com',$s.' issue de '.$name.':'.$adr,$msg);

include('cnx.php');


$req = $bdd->prepare('INSERT INTO contact(NAME,EMAIL,SUBJECT,MESSAGE,IP,DATE,TIME) 
VALUES(:NAME,:EMAIL,:SUBJECT,:MESSAGE,:IP,:DATE,:TIME)');
$req->execute(array(
 'NAME' =>$_POST['name'] ,
 'EMAIL'=>$_POST['email'],
 'SUBJECT'=>$_POST['subject'],
 'MESSAGE' =>$_POST['message'],
 'IP' =>'',
 'DATE' =>$d,
 'TIME' =>$h
));
echo '<script type="text/javascript">
    alert("Votre message a \351t\351 bien envoy\351");
    document.location.href = "../index.php";
</script>'  ;

}	
}	

?>