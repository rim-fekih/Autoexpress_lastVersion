<?php 
session_start();
if(empty($_SESSION['passe']))
{
echo "vous n'etes pas connectés";
header('location:../../index.php');
}

?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=file], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #3c8dbc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button] {
    width: 100%;
    background-color: #3c8dbc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #3c8dbc;
}
input[type=button]:hover {
    background-color: #3c8dbc;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-left: 30%;
    margin-right: 30%;
    margin-bottom: 20%; 
}
h3 {
    font-size: 35px;
    text-align: center;
    color: #3c8dbc;
}
</style>

<body background="background.jpg">

<h3>Modification About</h3>
<?php session_start();
$_SESSION['idAb']=$_GET['idAb']; 
$titre=$_GET['titre'];
$desc=$_GET['desc'];
$image=$_GET['image'];
$corps=$_SESSION["corps"];
?>
<div>
  <form action="ModificationAbout.php" method="POST" enctype="multipart/form-data">
    <label>Titre</label>
    <input type="text" name="titre" value="<?php echo $titre ?>">
    <label>Description </label>
    <input type="text" name="desc" value="<?php echo $desc ?>">
    <label>Corps </label><br>
    <textarea name="corps" style="width: 485px; height: 150px"><?php echo '  '.$corps ?></textarea><br>
                      
    <label><font   face="Comic Sans MS" >Ajouter l'image à inserer</font> </label>
    <input type="file" name="im" placeholder="fichier.."> 

    <input type="submit" value="Modifier" >
    <input type="button" onclick="window.location.replace('../About.php')" value="Annuler" />
  </form>
</div>
<script type="text/javascript">
    function Verif()
    {
        t=document.f1.titre.value;
        d=document.f1.desc.value;
        c=document.f1.corps.value;
        i=document.f1.image.value;
        test=true;
        if((t=='')||(d=='')||(c=='')||(i==''))
        {
            alert('Tous les champs doivent-etre remplies');
            test=false;
        }
        return test;
    }
</script>

</body>
</html>