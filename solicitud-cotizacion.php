<?php

$input=$_POST['input'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$url=$_POST['url'];
$textarea=$_POST['textarea'];
$multiple=$_POST['multiple[]'];
$radio=$_POST['radio'];

$mensaje=$mensaje."Nombre: $input"."\n";
$mensaje=$mensaje."E-mail: $email"."\n";
$mensaje=$mensaje."Telefono: $phone"."\n";
$mensaje=$mensaje."Sitio Web: $url"."\n";
$mensaje=$mensaje."Descripcion: $textarea"."\n";
$mensaje=$mensaje."Servicios: $multiple"."\n";
$mensaje=$mensaje."Respuesta: $radio"."\n";

$header="From:$email.\n"; 
$header=$header."X-Mailer:PHP/".phpversion()."\n"; 
$header=$header."Mime-Version: 1.0\n"; 
$header=$header."Content-Type: text/html";

mail("javicho73@hotmail.com","$input Solicita COTIZACION desde Hosting Cusco.",$mensaje,"From:$email");

?>

<!doctype html>

<html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Formulario de Cotización de Servicios</title>
    
    <meta name="keywords" content="formulario cotizacion,cotizacion servicios,cotizaciones web,cotizacion web,cotizacion online" /> 
    <meta name="description" content="Formulario de Cotizacion Web procesado, en breve nos pondremos en contacto con ustedes" /> 
    
    <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
 
	<!-- Favicon --> 
	<link rel="shortcut icon" href="favicon.ico">

	<!-- ######### CSS STYLES ######### -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "css/color-switcher.css" />
	
    
    <!-- ######### JS FILES ######### -->
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
     
     <!-- style switcher -->
    <script src="js/jquery-1.js"></script>
    <script src="js/styleselector.js"></script>
     
    <!-- Main Menu -->  
    <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/selectnav.js"></script>
    
</head>

<body>

<div id="page-wrapper">
<div class="container">
	
    <div class="columns seventeen">
    
    	<div id="sitetop_div_fullw">
        <div id="sitetop_div">
        	
          
          <?php include ('secciones/fecha.html'); ?>
		
        <!-- end date -->
        
        <div class="columns ten">
        
        <?php include ('secciones/menu-superior.html'); ?>
        </div>
    	</div>
        </div>
   	 </div>
     <!-- end top links -->
     
   <!-- header -->
    <div class="columns seventeen header_bg2">
     
     <div class="down_arrow1"></div><!-- end down arrow1 --> 
    
    <div class="columns seventeen">
    <div class="site_goto_center">
    	<!-- logo -->
    	<div class="columns seven first">
        	<div id="site_logo"></div>
        </div>
        <!-- end logo -->
        
     <!-- main menu -->
     <div class="columns ten">

       <nav id="access" class="access" role="navigation">
        <?php include ('secciones/menu-servicios.html'); ?>
  	</nav>
    </div>
    </div>
    </div>
	<!-- end main menu -->

</div>
<!-- end header -->
    
<div class="columns seventeen">
	
    <!-- page title -->
	<div class="page-main-title">
		<div class="site_goto_center">
		<div class="leaft-title">
		  <h1>SOLICITUD DE COTIZACION</h1></div>
        <span class="reght-pagenation"><a href="index.html">Inicio</a> <i>/</i> Solicitud de Cotización</span>
		</div><div class="waves_graphic"></div>
	</div>
    
</div>
<!-- end Punchline Text --> 
    
<!-- Content --> 
<div class="columns seventeen">

<div class="site_goto_center">

	<div class="margin_top1"></div>
	
<div id="content">
	<div class="container">
    
    	<!-- content left area -->
        <div class="content-left">
        	<h3>SOLICITUD DE COTIZACION</h3>
            <blockquote>
              <p><strong>Gracias por su confianza en Hosting Cusco, en breve atenderemos su solicitud y responderemos por el medio sugerido. Continúe su visita en nuestro sitio web.</strong></p>
              <p><strong>Atentamente</strong></p>
              <p><strong>HOSTING CUSCO</strong></p>
            </blockquote>
            <ul class="list_text">
              <li></li>
</ul>
<div class="divider_line"></div>
            
            <!-- team --><!-- end team --></div><!-- end content left area -->
        
        
        
        <!-- content right sidebar area -->
        <div class="content-right-sidebar">
        
        
        	<h3>servicios relacionados</h3>
			
            <div class="sidebars-navigation">
			<ul class="sidebars-navigation-list">		
                <li><a href="diseno-web-basico.html">Diseño Web Básico</a></li>
                <li><a href="diseno-web-estandar.html">Diseño Web Estándar</a></li>
                <li><a href="diseno-web-profesional.html">Diseño Web Profesional</a></li>
                <li><a href="diseno-web-movil-adaptativo.html"><strong>Diseño Web Móvil y Adaptativo</strong></a></li>
                <li><a href="diseno-web-cms-wordpress.html">Diseño Web CMS <strong>Wordpress</strong></a></li>
                <li><a href="diseno-web-e-commerce.html">Diseño Web E-commerce</a></li>
                <li><a href="diseno-web-blogs.html">Diseño de <strong>BLOGS</strong></a></li>
                <li><a href="diseno-web-personalizado.html">Diseño Web Personalizado</a></li>
                <li><a href="#">Solicitud de Cotización</a></li>
                <li><a href="#">Contáctenos</a></li>
                <li><a href="#">Visitar el BLOG</a></li>
			</ul>			
			</div>	<!-- end sidebars navigation -->
            
            <div class="clearfix"></div>
            
			<div class="popular-posts-area">
			
				<h3>siguenos en facebook</h3>
			
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHosting-Cusco%2F353709838017311&amp;width=230&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:258px;" allowTransparency="true"></iframe>
				
			</div><!-- end popular posts area -->
			
			<div class="clearfix"></div>
        </div><!-- end content right sidebar area -->
        
        
       
        

    
    </div>
</div>
    
    
    
</div>  
    
</div>





<!-- Footer --> 

<footer>
<div class="columns seventeen">
	<div class="margin_top3"></div><!-- end twitter widget -->
	</div>
    

	<div class="columns seventeen">
    	<?php include ('secciones/footer.html'); ?>
    </div>
    <!-- end Footer -->
    
    <div class="columns seventeen">
    	
    	<div class="copyright-info">
			<div class="site_goto_center">
            <span class="leaft">Copyright © 2019 Hosting Cusco. Derechos Reservados.</span>
            <span class="reght"><a href="http://www.hosting-cusco.com">Diseño Web</a> | <a href="http://blog.hosting-cusco.com" target="_blank">Blog</a></span>
            </div><!-- end copyright info -->
    	</div>
    </div>
</footer>
</div>


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
</div>



<script type="text/javascript" src="js/scripts.js"></script>



<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>
</body>
</html>
