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

<h3>Modification Solution</h3>
<?php session_start();
$_SESSION['id']=$_GET['ID']; 
$id=$_GET['ID'];
$titre=$_GET['titre'];
$image=$_GET['image'];
$BODY=$_GET['BODY'];

?>
<div>
 <form action="modifysolution.php" method="post"  enctype="multipart/form-data">
    <label><font   face="Comic Sans MS"  >ID</font></label>
    <input type="number" name="id" id="id"  value="<?php echo $id ?>" >
        <label><font   face="Comic Sans MS"  >Nom Parteniare</font></label>

    <input type="text" name="nom" id="nom"  value="<?php echo $titre ?>">
    
 <label><font   face="Comic Sans MS"  >Body</font></label>
    <input type="text" name="body" id="body"  value="<?php echo $BODY ?>">
    
                    

    <label><font   face="Comic Sans MS" >Ajouter l'image à inserer</font> </label>
    <input type="file" name="im" placeholder="fichier..">  
    <input type="submit" value="Modifier" >
    <input type="button" onclick="window.location.replace('../Service et Solution.php')" value="Annuler" />
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