<?php

$d_vehiculolink =  strtoupper($_REQUEST["d_id"]);
$d_id = strtoupper($_REQUEST["d_id"]).'.jpg';

 //Insertar los datos de la imagen, despues cambiar el nombre de la imagen
 require("conecta.php"); 
 $query="insert into foto ( id, descripcion, vehiculolink) values (null,null,".$d_vehiculolink.")";
 $results =mysql_query($query);

 //Obtebgo id max y grabo con ese nombre
 $query2 = "select max(id) as id from foto where vehiculolink=".$d_vehiculolink."";
 $results =mysql_query($query2);
 
 while($row = mysql_fetch_assoc($results)) {
         $folio =  $row['id'];
      }

 $folio = $folio.'.jpg'; 

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Busca un archivo antes de presionar el boton Subir .";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "fotos/$folio")){
    echo "Se ha completado con exito";
} else {
    echo "move_uploaded_file function failed";
}





?>