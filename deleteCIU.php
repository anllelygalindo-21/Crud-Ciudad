<?php

include("conexionCIU.php");
$con=conectar();

if(isset($_GET['id_ciu'])) {
  $id_ciu = $_GET['id_ciu'];
  $query = "DELETE FROM ciudad WHERE id_ciu='$id_ciu'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: ciudad.php"); 
}

?>