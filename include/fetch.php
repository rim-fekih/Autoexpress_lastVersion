<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "cars");
 $output = '';
 if($_POST["action"] == "Marque")
 {
  $query = "SELECT Modele FROM autotnnewcar WHERE Marque = '".$_POST["query"]."' GROUP BY Modele";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select Modele</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Modele"].'">'.$row["Modele"].'</option>';
  }
 }
 if($_POST["action"] == "Modele")
 {
  $query = "SELECT city FROM autotnnewcar WHERE Modele = '".$_POST["query"]."'";
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

