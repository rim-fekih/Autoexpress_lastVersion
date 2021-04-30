<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "cars");
 $output = '';
 if($_POST["action"] == "marque")
 {
  $query = "SELECT modele FROM marque_modele WHERE marque = '".$_POST["query"]."' GROUP BY modele";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select modele</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["modele"].'">'.$row["modele"].'</option>';
  }
 }
 if($_POST["action"] == "modele")
 {
  $query = "SELECT city FROM marque_modele WHERE modele = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select City</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["city"].'">'.$row["city"].'</option>';
  }
 }
 echo $output;
}
?>

