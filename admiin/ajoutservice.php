<?php
  session_start(); 
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
input[type=reset] {
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
    <script type="text/javascript" src="./tinymce/tinymce.min.js"></script>
    <script>tinyMCE.init({ 
mode : "textareas",
valid_elements : "em/i,strike,u,strong/b,div[align],br,#p[align],-ol[type|compact],-ul[type|compact],-li"
});
</script>
<h3><font   face="Comic Sans MS">Ajouter Service</font></h3>

<div>
 <form action="addservice.php" method="post"    enctype="multipart/form-data" name="service" >
    <label><font   face="Comic Sans MS"  >ID</font></label>
    <input type="number" name="id" id="id"  placeholder="ID..">
    <label><font   face="Comic Sans MS"  >Titre</font></label>
    <input type="text" name="titre" id="titre"  placeholder="Titre..">
 


    
   
                        
<label for="inputEmail3" ><font   face="Comic Sans MS">Body:</font></label>
                        
                            <textarea  name="body" class="form-control" style="  width: 100%;height: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;" placeholder="Body..."></textarea>
                   
                        
                        
                     
    <label><font   face="Comic Sans MS" >Ajouter l'image à inserer</font> </label>
    <input type="file" name="im" placeholder="fichier..">  
    <input type="submit" name="submit" value= "Ajouter Service">
    <input type="button" onclick="window.location.replace('Service et Solution.php')" value="Annuler" />   
  </form>

</div>

</body>
</html>