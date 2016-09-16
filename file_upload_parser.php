<?php

$d_expedientelink =  strtoupper($_REQUEST["d_id"]);
$d_id = strtoupper($_REQUEST["d_id"]).'.jpg';

 //Insertar los datos de la imagen, despues cambiar el nombre de la imagen
 require("conecta.php"); 
 $query="insert into fotoife ( id, descripcion, expedientelink) values (null,null,".$d_expedientelink.")";
 $results =mysql_query($query);

 //Obtebgo id max y grabo con ese nombre
 $query2 = "select max(id) as id from fotoife where expedientelink=".$d_expedientelink."";
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

  //Mostrar fotos subidas
  $query3="select * from fotoife where expedientelink=".$d_expedientelink."";
  $results3 =mysql_query($query3);
  $num_results3 = mysql_num_rows($results3);
  $j = 0;
		  
  for ($i=0; $i <$num_results3; $i++)
    {
       $row = mysql_fetch_array($results3);
			 
       $nombre_fichero = 'fotos/'.$row[0].'.jpg';
	 
	   if (file_exists($nombre_fichero)) 
	   {
	      $j++;
		  echo '<div id="myDiv"><b>Foto '.$j.'</b><br>
                <img alt="Client Logo" title="Jalisco" src="fotos/'.$row[0].'.jpg" />
                </div>'.$nombre_fichero ;
			 
	   }
	   else
	   {
		  $query4="delete from fotoife where id=".$row[0]."";
          $results4 =mysql_query($query4);
          $num_results4 = mysql_num_rows($results4);   
	   }
			 
    }



?>