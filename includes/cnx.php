<?php
//se connecter à la base de données de auto Express
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=cars', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		echo"erreur de la connexion" ;
}
?>