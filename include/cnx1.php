<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "cars");
$Marque = '';
$query = "SELECT Marque FROM autotnnewcar GROUP BY Marque ORDER BY Marque ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $Marque .= '<option value="'.$row["Marque"].'">'.$row["Marque"].'</option>';
}
?>
<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   
   <select name="Marque" id="Marque" class="form-control action">
    <option value="">Select Marque</option>
    <?php echo $Marque; ?>
   </select>
   <br />
   <select name="Modele" id="Modele" class="form-control action">
    <option value="">Select Modele</option>

   </select>
   <br />
   
  </div>
  
 </body>
</html>

<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
  if(action == "Marque")
   {
    result = 'Modele';
   }
   else
   {
    result = 'city';
   }
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>