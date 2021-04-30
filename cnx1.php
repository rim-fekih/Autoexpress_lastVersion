<?php
                include'newcars.php';
                ?>

<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "cars");
$marque = '';
$query = "SELECT marque FROM marque_modele GROUP BY marque ORDER BY marque ASC";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $marque .= '<option value="'.$row["marque"].'">'.$row["marque"].'</option>';
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
   
   <select name="marque" id="marque" class="form-control action">
    <option value="">Select marque</option>
    <?php echo $marque; ?>
   </select>
   <br />
   <select name="modele" id="modele" class="form-control action">
    <option value="">Select modele</option>
   </select>
   <br />
   
  </div>
  <div id="owl-testimonial" class="owl-carousel">
               
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
   if(action == "marque")
   {
    result = 'modele';
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