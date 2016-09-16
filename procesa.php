<?php
  session_start();

  $_SESSION['var_nombre'] = $_REQUEST["d_usuario"];
  $_SESSION['var_password'] = strtoupper($_REQUEST["d_password"]);
  

   

  if ($_SESSION['var_nombre']=='')
  {
   exit;
  }

  $d_usuario  = strtoupper($_REQUEST["d_usuario"]);
  $d_password = strtoupper($_REQUEST["d_password"]);
  $num_results = 0;
  $num_results1 = 0;

  
  //Conecta a la Bd
  require("conecta.php"); 
  
  $query="select * from usuario where curp ='" .$d_usuario. "' and password= '" .$d_password. "'";
  
  $results = mysql_query($query);
 
  $num_results = mysql_num_rows($results);
  
  $query="select * from usuario where administrador = 'T' and curp ='". $d_usuario."'";
  $results =mysql_query($query);
  $num_results1 = mysql_num_rows($results);
  
  $_SESSION['var_administra'] = $num_results1;
  $_SESSION['var_usuario'] = $num_results;

  


  ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Mujeres Empoderadas | Registro</title>
    <meta name="description" content="	Jalisco">
	
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
                       
                        <!-- Left Items -->
                        
                        <div class="eight columns right">
                        
                            <ul class="jx-right-infobar">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                            <a href="index.html"><img src="images/header_logo.png" alt="" /></a>
                        </div>
                        <!-- Logo -->
                    </div>                
                    
                
                    <div class="twelve columns right">
                    
                        <div class="nav_container right">
                            <ul id="jx-main-menu" class="menu">
                                <!-- Item 1 -->
                              
                        <?php
						if ($num_results>0)
     {
include("menu2.php");
	 }
?>     

                                        
                            </ul>                          	                  
                        </div>
                        <!-- EOF Menu -->
                    
                    </div>
                
                </div>
            </div>    
        </div>
    </header>
    


    
    <!-- EDF Header -->
    
    <!-- BOF Main Content -->
    <div role="main" class="main no-top-padding">
              
        <!-- BOF Partner Logo -->
        
        <div class="jx-container jx-white-bg jx-padding">                        
            <div class="container">
            
                <div class="sixteen columns">
                    <div class="jx-section-title-1">                
                        <div ><img src="images/logo_16.png" alt=""></div>
                        <div class="jx-title jx-uppercase">Sistema de Administración de Apoyos</div>  
                        <div class="jx-subtitle mb40"> 
                        
                        
                        	<?php 
	

	
	if ($num_results==0)
     {
	   echo '

                    <div class="jx-section-title-4">
                        <div class="jx-related-date"></div>
                        <div class="jx-title">Error: Usuario o Password incorrecto</div>
                      
                    </div>
		
		
		 
		  <div class="jx-section-title-3">
                        <div class="jx-related-date"></div>
                        <h6>Regrese a la página anterior e intente de nuevo.</h6></div>
                      
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
	 
  
	 
	
    
	?> 
                        
                        
                        </div>  
                    </div>        
                </div>
            
                
               
        
            </div>
        </div>
        
		<!-- EOF Partner Logo -->
        
        <!-- BDF Tagline -->
        
        <div class="jx-container jx-padding-tiny jx-default-bg">          
        	<div class="jx-container-slope jx-bottom-slope jx-right-slope"></div>
            <div class="jx-container-slope jx-top-slope jx-left-slope jx-default-bg"></div>
            <!-- container slope -->
                      
           
            
         </div>    
         
        <!-- EDF Tagline -->   
       
    </div>
    <!-- EOF Main Content -->
    
    
    <!-- BOF Footer -->
    
  <footer class="jx-footer-section">

        <div class="jx-footer jx-container">

        

        	<div class="jx-container-slope jx-bottom-slope jx-right-slope jx-default-bg">

            	<div class="container">

            		<div class="jx-copy-left"><br><a href="https://www.facebook.com/GobiernoJalisco" target="_blank"><img src="facebook-liv.png" width="24" height="24"></a> <a href="https://twitter.com/GobiernoJalisco" target="_blank"><img src="twitter-liv.png" width="24" height="24"> </a><img src="googleplus-liv.png" width="24" height="24"> &nbsp;&nbsp;&nbsp;&nbsp;©  2016</div>

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
    
    <!-- Google Map -->
   
    
</body>
</html>