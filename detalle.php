<?php
  session_start();


  ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en">
<style type="text/css">
body {
	margin-left: 0px;
}

    label {
  display: inline-block;
  width: 240px;
  text-align: left;
}?
</style>

<style style="text/css">
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* Define the default color for all the table rows */
	.hoverTable tr{
		background: #b8d1f3;
	}
	/* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
</style>
 <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Mujeres Empoderadas | Administracion</title>
    <meta http-equiv="Page-Enter" content="revealtrans(duration=5,transition=11)">
    
    <script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
	
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	
    <!-- Web Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,500,300' rel='stylesheet' type='text/css'>
    
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/theme.css">   
    <link rel="stylesheet" href="css/theme-animate.css">   
    <link rel="stylesheet" href="css/theme-elements.css">   
    <link rel="stylesheet" href="css/plugins.css">    
    
    <!-- Skin CSS -->
<link id="skin" rel="stylesheet" href="css/skins/torquze.css">
        
    <!-- Icon Fonts -->
    <link rel='stylesheet' href='fonts/font-awesome.min.css' type='text/css' media='screen' />    
    
    <!-- Library Css -->
    <link rel="stylesheet" href="css/skeleton.css"> 
    <link rel="stylesheet" href="vendor/flexslider/flexslider.css">
    
    <link rel="stylesheet" href="vendor/isotope/isotope.css">
    <link rel="stylesheet" href="vendor/owl/owl.carousel.css">
    <link rel="stylesheet" href="vendor/prettyPhoto/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen" /> 
    
    <!-- Responsive Theme -->
    <link rel="stylesheet" href="css/theme-responsive.css">
    
    <!-- Library Js -->
	<script src="vendor/modernizr.js"></script>
    
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
    

<!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    
    <!--[if lte IE 8]>
        <script src="vendor/respond.js"></script>
    <![endif]-->
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>  
<body>
	<!-- BOF Loader -->
<div class="loader">
         <div class="spinner spinner-double-bounce">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
         </div>
	</div>
    <!-- EOF Loader -->
    
    
    
    <!-- BOF Header -->
    
    <header>
        <div class="jx-header-1 jx-sticky">
        
	<!-- Top Menu -->

                <div class="jx-top-menu">

                	<div class="container">

                        <div class="eight columns left">

                            

                            <ul class="jx-left-infobar">

                                <li><a href="#"><i class="fa fa-phone"></i><span>01 (33) 30 30 12 20 Extensi&oacute;n 51 002   </span></a></li>

                                <li><a href="#"><i class="fa fa-envelope"></i><span> lizett.franco@jalisco.gob.mx </span></a></li>

                                <li><a href="#"><i class="fa fa-o-clock"></i><span>Lun - Vie: 8:00 - 20:00pm</span></a></li>

                            </ul>

                        

                        </div>

                        <!-- Left Items -->

                        

                        <div class="eight columns right">

                        

                            <ul class="jx-right-infobar">

                                <li><a href="https://www.facebook.com/GobiernoJalisco" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="https://twitter.com/GobiernoJalisco"><i class="fa fa-twitter"></i></a></li>

                               

                                <!-- Social icons-->

                                

                               

                                <!-- Search box -->

                            </ul>

                        

                        

                        </div>

                    </div>

                    <!-- Right Items -->

                

                </div>
                <!-- Top Menu -->     
                    
            <div class="jx-header jx-white-bg">
            	<div class="jx-container-slope jx-bottom-slope jx-right-slope jx-white-bg"></div>
                <!-- container slope -->
                
                <div class="container">
                
                    <div class="four columns">
                    
                        <div class="jx-header-logo">
                            <a href="index.php"><img src="images/header_logo.png" alt="" /></a>
                      </div>
                        <!-- Logo -->
                    </div>                
                    
                
                    <div class="twelve columns right">
                    
                        <div class="nav_container right">
                            <ul id="jx-main-menu" class="menu">
                                <!-- Item 1 -->
                              
                         <?php
include("menu2.php");
?>   
                              
            
                                   
                                </li>
                                        
                            </ul>                          	                  
                        </div>
                        <!-- EOF Menu -->
                    
                    </div>
                
                </div>
            </div>    
        </div>
    </header>
    

    <div class="jx-page-titlebar jx-container jx-darkgrey-bg">
   		 <div class="jx-container-slope jx-top-slope jx-right-slope"></div>         
         	<div class="container jx-titlebar">
                <div class="sixteen columns">
                    <div class="jx-breadcrumb left"><a href="#">Home</a> > <span>Consulta</span></div>
                    <div class="jx-page-title right">USUARIO</div>
                </div>
            </div> 
     </div> 
    <!-- EDF Header -->
    
    <!-- BOF Main Content -->
    <div role="main" class="main no-top-padding">
              
        <!-- BOF Partner Logo -->
        
        <div class="jx-container jx-white-bg jx-padding">                        
            <div class="container">
            
                <div>
                    <div class="jx-section-title-1">                
                        <div ><img src="images/logo_16.png" alt=""><BR><BR> ADMINISTRACION SOLICITUD DE APOYOS </div>
                        <div class="jx-title jx-uppercase"></div>  
                        <div class="jx-subtitle mb40"> 
                                 
                        	<?php 
	  

     if (isset($_SESSION['var_password'])== False)
    {
		echo '  <div class="jx-section-title-4">
                        <div class="jx-related-date"></div>
                        <div class="jx-title">Error: La Sesi�n a Caducado<br>
						Regrese a la p�gina anterior e intente de nuevo</div>
                      
                    </div>
		
		
		 
		  <div class="jx-section-title-3">
                        <div class="jx-related-date"></div>
                        <h6>Regrese a la p�gina anterior e intente de nuevo.</h6></div>
                      
                    </div>
					
				
		 <div class="container">             
               <div class="jx-blog-2"> 
<div class="jx-btn-center"> 
            <a href="admin.php" class="jx-btn-default"><i class="fa  fa-mail-forward"></i>Regresar</a>
            </div>
			</div>
			<!-- Blog Button -->
        </div>	
	
					';
					
					
		
      exit;
    }
    //Conecta a la Bd
    require("conecta.php"); 




	
	if ($_SESSION['var_usuario']==0)
     {
	   echo '

                    <div class="jx-section-title-4">
                        <div class="jx-related-date"></div>
                        <div class="jx-title">Error: Usuario o Password incorrecto</div>
                      
                    </div>
		
		
		 
		  <div class="jx-section-title-3">
                        <div class="jx-related-date"></div>
                        <h6>Regrese a la p�gina anterior e intente de nuevo.</h6></div>
                      
                    </div>
		 

	 
		 <div class="container">             
               <div class="jx-blog-2"> 
<div class="jx-btn-center"> 
            <a href="admin.php" class="jx-btn-default"><i class="fa  fa-mail-forward"></i>Regresar</a>
            </div>
			</div>
			<!-- Blog Button -->
        </div>';
	   exit; 
	 }	 
	 
  
     $d_id  = $_REQUEST["d_id"];  
	 
	$query="select expediente.id, UPPER(Concat(expediente.nombre,' ',expediente.apellidopaterno,' ',expediente.apellidomaterno)), apoyo.nombre,  expediente.fecharegistro
	         from expediente, apoyo
        where  expediente.apoyolink = apoyo.id
		and expediente.statuslink = 12";
		
		
		
      $results =mysql_query($query);
      $num_results = mysql_num_rows($results);
		 
	  if ($num_results=0)

	   {
		    echo '   <div class="jx-section-title-3">
                        <div class="jx-related-date"></div>
                        <h6>Error: El Id del usuario no existe<br>
						Favor de consultar el correcto<br>
						</h6></div>
                      
                    </div>
					
					<div class="container">             
               <div class="jx-blog-2"> 
<div class="jx-btn-center"> 
            <a href="usuarioadmin_consulta.php" class="jx-btn-default"><i class="fa  fa-mail-forward"></i>Regresar</a>
            </div>
			</div>
			<!-- Blog Button -->
        </div>
					
					';
		   

	     exit; 
	    }
  

	?> 
      
     <form name="form" method="post" action="detallep.php">   
        
        <div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Información</li>
    <li class="TabbedPanelsTab" tabindex="0">Seguimiento</li>
    <li class="TabbedPanelsTab" tabindex="0">Archivos</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    <?php 
	
      $query="select nombre, apellidomaterno, apellidopaterno, cuentafacebook, calle, colonia, estadolink, municipiolink, 
	  localidad, hijos,  fechanacimiento, celular, apoyolink, id, observaciones, capacitaciones, factoresdesarrollo, statuslink from expediente where  id =" .$d_id. "";
	  
	 
	  
	  $results =mysql_query($query);
      $num_results = mysql_num_rows($results);
	
		  if ($num_results>0)
      {
	    for ($i=0; $i <$num_results; $i++)
        {
           $row = mysql_fetch_array($results, MYSQLI_NUM);
         }
       }
	  
	   
	 $nombre = $row[0];	
     $apellidomaterno = $row[1];
	 $apellidopaterno =$row[2];
     $cuentafacebook =$row[3];
     $calle = $row[4];
     $colonia = $row[5];
     $estadolink =$row[6];
     $municipiolink =$row[7];
     $localidad= $row[8];
     $hijos =$row[9];
     $fechanacimiento = $row[10];
     $celular = $row[11];
     $apoyolink = $row[12];
	 $id = $row[13];
	 $observaciones = $row[14];
	 $capacitaciones = $row[15];
	 $factor = $row[16];
	 $statuslink = $row[17];	
	?>
    
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr >
    <td> 
    <input name="d_id" type="hidden" value="<?php echo $id?>">
    <label>Nombre</label>
    <input name="d_nombre" type="text" id="d_nombre" size="30" maxlength="30" placeholder="Nombre" class="jx-form-text" value="<?php echo $nombre?>">
    </td>
  </tr>
  
  <tr >
    <td>
    <label>Apellido Paterno</label>
   <input name="d_apellidopaterno" type="text" id="d_apellidopaterno" size="30" maxlength="30" placeholder="Apellido Paterno" class="jx-form-text" value="<?php echo $apellidomaterno?>">
    </td>
  </tr>
  
    <tr >
    <td>
    <label>Apellido Materno</label>
   <input name="d_apellidomaterno" type="text" id="d_apellidomaterno" size="30" maxlength="30" placeholder="Apellido Materno" class="jx-form-text" value="<?php echo $apellidopaterno?>">
    </td>
  </tr>
  
    <tr >   
    <td>
     <label>Facebook</label>
      <input name="d_facebook" type="text" id="d_facebook" size="30" maxlength="30" placeholder="Cuenta Facebook" class="jx-form-text" value="<?php echo $cuentafacebook?>">
    </td>
  </tr> 
  
   <tr >   
    <td>
     <label>Calle</label>
      <input name="d_calle" type="text" id="d_calle" size="30" maxlength="30" placeholder="Calle y numero" class="jx-form-text" value="<?php echo $calle?>">
    </td>
  </tr> 
  
     <tr >   
    <td>
      <label>Colonia</label>
      <input name="d_colonia" type="text" id="d_colonia" size="30" maxlength="30" placeholder="Colonia" class="jx-form-text" value="<?php echo $colonia?>">
    </td>
  </tr> 
  
   <tr >
    <td><label>Estado</label>
    <select name="d_estado" id="d_estado">
                <?php
          	$query="select id, nombre from estado order by estado.nombre";
		    $results =mysql_query($query);
            $num_results = mysql_num_rows($results);
		  
		    for ($i=0; $i <$num_results; $i++)
            {
              $row = mysql_fetch_array($results);
			 
			   if ($row[0]<>  $estadolink)
	          {
                echo "<option value=\"$row[0]\">$row[1]</options>";
	          }
	          else   
	          {
		        echo  "<option value=$row[0] selected> $row[1]</option>"; 
	          }
            }
          ?>
            </select>
    </td>
  </tr>
   
  <tr >
    <td><label>Municipio</label>
   <select name="d_municipio" id="d_municipio">
                <?php
            $query1="select * from municipio order by nombre"; 
		    $results1 =mysql_query($query1);
            $num_results1 = mysql_num_rows($results1);
		  
		    for ($i=0; $i <$num_results1; $i++)
            {
              $row = mysql_fetch_array($results1);
			 
			   if ($row[0]<> $municipiolink)
	          {
                echo "<option value=\"$row[0]\">$row[1]</options>";
	          }
	          else   
	          {
		        echo  "<option value=$row[0] selected> $row[1]</option>"; 
	          }
            }
          ?>
            </select>
    </td>
  </tr>
  
      <tr >
    <td>
    <label>Localidad</label>
    <input name="d_localidad" type="text" id="d_localidad" size="4" maxlength="4" placeholder="Numero de Localidad : Se encuentra en el IFE" class="jx-form-text" value="<?php echo $localidad?>">
    </td>
  </tr>
  
  <tr >
    <td>
    <label>Número de Hijos</label>
<input name="d_hijos" type="text" id="d_hijos" size="30" maxlength="5" placeholder="Número de Hijos menores de 18 años" class="jx-form-text" value="<?php echo $hijos?>">
    </td>
  </tr>
  
     <tr >
    <td>
    <label>Fecha de nacimiento</label>
 <input name="d_fechanacimiento" type="text" id="d_fechanacimiento" size="30" maxlength="30" placeholder="Fecha de Nacimiento YYYY/MM/DD" class="jx-form-text" value="<?php echo $fechanacimiento?>">
    </td>
  </tr>
  
    <tr >
    <td>
    <label>Celular</label>
  <input name="d_celular" type="text" id="d_celular" size="30" maxlength="30" placeholder="Celular" class="jx-form-text" value="<?php echo $celular?>">
    </td>
  </tr>
    
 
  

           

  
  
</table>
                 
               


    
    </div>
    
    <div class="TabbedPanelsContent">

      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      
          <tr >
    <td><label>Apoyo solicitado</label>
   <select name="d_apoyo" id="d_apoyo">
                <?php
            $query1="select * from apoyo order by nombre"; 
		    $results1 =mysql_query($query1);
            $num_results1 = mysql_num_rows($results1);
		  
		    for ($i=0; $i <$num_results1; $i++)
            {
              $row = mysql_fetch_array($results1);
			 
			   if ($row[0]<>  $apoyolink)
	          {
                echo "<option value=\"$row[0]\">$row[1]</options>";
	          }
	          else   
	          {
		        echo  "<option value=$row[0] selected> $row[1]</option>"; 
	          }
            }
          ?>
            </select>
    </td>
  </tr> 
  
      <tr >
    <td><label>Status</label>
   <select name="d_statuslink" id="d_statuslink">
                <?php
            $query1="select * from status order by nombre"; 
		    $results1 =mysql_query($query1);
            $num_results1 = mysql_num_rows($results1);
		  
		    for ($i=0; $i <$num_results1; $i++)
            {
              $row = mysql_fetch_array($results1);
			 
			   if ($row[0]<>  $statuslink)
	          {
                echo "<option value=\"$row[0]\">$row[1]</options>";
	          }
	          else   
	          {
		        echo  "<option value=$row[0] selected> $row[1]</option>"; 
	          }
            }
          ?>
            </select>
    </td>
  </tr> 
  
  
     <tr >
    <td><label>Observaciones</label>
 <textarea rows="4" name="d_observaciones"  id="d_observaciones"   placeholder="Observaciones" class="jx-form-text" ><?php echo $observaciones?></textarea>
    </td>
  </tr>
  
       <tr >
    <td><label>Capacitaciones</label>
 <textarea rows="4" name="d_capacitaciones"  id="d_capacitaciones"   placeholder="Capacitaciones" class="jx-form-text" ><?php echo $capacitaciones?></textarea>
    </td>
  </tr>
        <tr >
    <td><label>Factor desarrollo</label>
 <textarea rows="4" name="d_factor"  id="d_factor"   placeholder="Factor" class="jx-form-text" ><?php echo $factor?></textarea>
    </td>
  </tr> 
   
    </table>
    </div>

 
    <div class="TabbedPanelsContent">
    	<?php 
		

		
		//Mostrar fotos subidas
  $query3="select * from fotoife where expedientelink=".$d_id."";
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
	   
			 
    }
    ?> 
      
    
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
<table>
 <tr >
    <td height="50" valign="bottom" ><input type="submit" name="button" id="button" value="Actualizar"></td>
  </tr>       
 </table>         
 </form>     
    
    
      
                 
                 
                   
                 
                        
                        </div>  
                    </div>        
                </div>
            
                
               
        
            </div>
        </div>
        
		<!-- EOF Partner Logo -->
        
        <!-- BDF Tagline -->
        
        
         
        <!-- EDF Tagline -->   
       
    </div>
    <!-- EOF Main Content -->
    
    
    <!-- BOF Footer -->
    
 <footer class="jx-footer-section">

        <div class="jx-footer jx-container">

        

        	<div class="jx-container-slope jx-bottom-slope jx-right-slope jx-default-bg">

            	<div class="container">

            		<div class="jx-copy-left"><br><a href="https://www.facebook.com/GobiernoJalisco" target="_blank"><img src="facebook-liv.png" width="24" height="24"></a> <a href="https://twitter.com/GobiernoJalisco" target="_blank"><img src="twitter-liv.png" width="24" height="24"> </a><img src="googleplus-liv.png" width="24" height="24"> &nbsp;&nbsp;&nbsp;&nbsp;�  2016</div>

            	</div>

            </div>

            <!-- container slope -->

            <div class="container">

             <div class="image"><img src="images/logo-inf.png" alt=""></div>

                           

                <!-- EOF RECENT POSTS -->

                

                            

                <!-- EOF ARCHIVE POSTS -->

            

            </div>

        </div>

    </footer>
     
    <!-- EOF Footer -->
    
        
    <!-- Footer -->
    
	<script type="text/javascript" src="vendor/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="vendor/respond.js"></script>
    <script type="text/javascript" src="vendor/jquery.appear.js"></script>    
    <script type="text/javascript" src="vendor/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="vendor/isotope/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="vendor/owl/owl.carousel.js"></script>
    <script type="text/javascript" src="vendor/flexslider/jquery.flexslider.js"></script>
    <script type="text/javascript" src="vendor/form-validator/jquery.form-validator.min.js"></script> 
    <script type="text/javascript" src="vendor/twitterjs/twitter.js"></script>
    <script type="text/javascript" src="vendor/jquery.validate.js"></script>	
    <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- Home JS -->
	<script src="js/custom/home.js"></script>
    
    <!-- Theme Initializer -->
	<script src="js/theme.js"></script>
    
  
<link rel="Stylesheet" href="jquery.validity.css" />
    <script src="jquery-1.9.0.min.js"></script>
    <script src="jquery.validity.min.js"></script>
    <script>
        $(function() {
            $("form").validity(function() {
                $("#d_nombre").require("El nombre requerido");
			    $("#d_apellidopaterno").require("El Apellido Paterno requerido");
			    $("#d_apellidomaterno").require("El Apellido Materno requerido");
				$("#d_calle").require("La Calle es requerido");
                $("#d_colonia").require("La Colonia es requerido");
                $("#d_localidad").require("El número de localidad es requerido");
				$("#d_hijos").match("integer","El número hijos es entero"); 
				$("#d_fechanacimiento").require("La fecha de nacimiento es requerido");
            });   
				
			
        });    
    </script>
</body>
</html>