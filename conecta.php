<?php

 $db =mysql_connect('localhost', 'csoft_jalisco', 'Jalisco20');
 mysql_select_db("csoft_mujeres");

  if (!$db) 
  {
    printf("Connect failed: %s\n");
    echo "<div align=center><strong><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Error: No     es posible conectarse a la base de datos. Intente más tarde</div></strong></font>";
    die('No pude por: ' . mysql_error());
    exit;
  }


?>




