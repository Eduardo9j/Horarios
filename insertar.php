<!DOCTYPE html>
<html lang="es">
<head>
  <title>Insertar</title>
    <title>Insertar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>



 <?php

require('base.php');



$i = $_POST['id'];
$m = $_POST['materia'];
$d = $_POST['dia'];
$h = $_POST['hora'];



$sql = "INSERT INTO materias (id, materia, dia,hora) VALUES ('$i', '$m', '$d', $h)";

if (mysqli_query($conn, $sql)) {
 
?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Excelente</h4>
          <button class="close" onclick="location.href='insertar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Datos grabados safisfactoriamente
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='insertar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php
} else 
{



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='insertar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php
          echo "Error grabando datos: <br>" . $sql . "<br>" . mysqli_error($conn);
          ?> 

        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='insertar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php



}

mysqli_close($conn);

?> 