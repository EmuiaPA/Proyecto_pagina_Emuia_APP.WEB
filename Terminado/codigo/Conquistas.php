<!DOCTYPE html>

<html style="font-size: 16px;"> <!-- APERTURA HTML -->

  <head> <!-- APERTURA HEAD -->
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- METAPROGRAMACIÓN -->
    <meta charset="utf-8"> <!-- METAPROGRAMACIÓN -->
    <meta name="keywords" content="Contact Us"> <!-- METAPROGRAMACIÓN -->
    <meta name="description" content=""> <!-- METAPROGRAMACIÓN -->
    <meta name="page_type" content="np-template-header-footer-from-plugin"> <!-- METAPROGRAMACIÓN -->
	
    <title>Conquistas</title> <!-- TÍTULO DE LA PÁGINA -->
	
    <link rel="stylesheet" href="nicepage.css" media="screen"> <!-- ESTILOS EN CASCADA CSS -->
	<link rel="stylesheet" href="Conquistas.css" media="screen"> <!-- ESTILOS EN CASCADA CSS -->
	
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script> <!-- JQUERY -->
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script> <!-- JQUERY -->
	
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com"> <!-- METAPROGRAMACIÓN -->
	
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"> <!-- ESTILOS EN CASCADA CSS -->
     
    <script type="application/ld+json"> <!-- JQUERY -->
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": 
		[
				"https://www.facebook.com/",
				"https://twitter.com/?lang=ES",
				"https://www.instagram.com/"
		]
	}
	</script>
	
    <meta name="theme-color" content="#478ac9"> <!-- METAPROGRAMACIÓN -->
    <meta name="twitter:site" content="@"> <!-- METAPROGRAMACIÓN -->
    <meta name="twitter:card" content="summary_large_image"> <!-- METAPROGRAMACIÓN -->
    <meta name="twitter:title" content="Conquistas"> <!-- METAPROGRAMACIÓN -->
    <meta name="twitter:description" content=""> <!-- METAPROGRAMACIÓN -->
    <meta property="og:title" content="Conquistas"> <!-- METAPROGRAMACIÓN -->
    <meta property="og:type" content="website"> <!-- METAPROGRAMACIÓN -->
	
  </head>
  
  <body class="u-body"> <!-- APERTURA BODY -->
  
  <header class=" u-clearfix u-header u-section-row-container" id="sec-a446"> <!-- APERTURA HEADER -->
 
		<?php
		
		/* INICIAMOS SESIÓN PARA PODER CONTINUARLA SI EL LOGIN SE REALIZÓ CON ÉXITO. */
		session_start();
		
		/* MANTENEMOS LA SESIÓN INICIADA. */
		require_once("isLogin.php");
		
		?>
		
		<!-- NOS LLEVAMOS Y GUARDAMOS LA VARIABLE : USUARIO -->
		<input type="hidden" name="Usuario" value="<?php echo $user?>" />
		
		<?php		
			
			/* DEFINIMOS LA VARIABLE USER COMO LA PERSONA USUARIO QUE INICIÓ SESIÓN. */
			@$user = $_SESSION["Usuario"];
					
					/* COMPROBAMOS QUE ESTÁ LOGUEADO. */
					if($estado)
					{
						
		?>
						
  <div class="u-section-rows"> <!-- APERTURA 1º DIV HEADER -->
  
        <div class="u-align-center-xs u-grey-80 u-section-row u-section-row-1" id="sec-b03b"> <!-- APERTURA 2º DIV HEADER -->
		
          <div class="u-clearfix u-sheet u-sheet-1"> <!-- APERTURA 3º DIV HEADER -->
		  
            <div class="u-social-icons u-spacing-10 u-social-icons-1"> <!-- APERTURA 4º DIV HEADER -->
			  
			  
			  <!-- ICONO DE REDES SOCIALES : FACEBOOK -->
              <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/"> <!-- APERTURA 1º ENLACE -->
				
				<span class="u-icon u-social-facebook u-social-icon u-icon-1"> <!-- APERTURA 1º SPAN (COTENEDOR DE LINEA) 4º DIV HEADER -->
				  
				  <!-- 1º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
					
					<!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7d08"></use>
				  
				  </svg> <!-- CIERRE 1º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  
				  <!-- 2º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7d08">
					  
					  <!-- CIRCLE EN SVG / ELEMENTO SVG GENÉRICO - CREAR CÍRCULO -->
					  <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
					  
					  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
					  <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
				  
				  </svg> <!-- CIERRE 2º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  
				</span> <!-- CIERRE 1º SPAN (COTENEDOR DE LINEA) 4º DIV HEADER -->
				
              </a> <!-- CIERRE 1º ENLACE -->
			  
			  
			  <!-- 2º ICONO DE REDES SOCIALES : TWITTER -->
              <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/?lang=ES"> <!-- APERTURA 2º ENLACE -->
			  
				<span class="u-icon u-social-icon u-social-twitter u-icon-2"> <!-- APERTURA 2º SPAN (COTENEDOR DE LINEA) 4º DIV HEADER -->
				  
				  <!-- 1º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
					
					<!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-de91"></use>
				  
				  </svg> <!-- CIERRE 1º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  
				  <!-- 2º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-de91">
					  
					  <!-- CIRCLE EN SVG / ELEMENTO SVG GENÉRICO - CREAR CÍRCULO -->
					  <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
					  
					  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
					  <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
				  
				  </svg> <!-- CIERRE 2º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
			  
				</span> <!-- CIERRE 2º SPAN (COTENEDOR DE LINEA) 4º DIV HEADER -->
			  
              </a> <!-- CIERRE 2º ENLACE -->
			  
			  
			  <!-- 1º ICONO DE REDES SOCIALES : INSTAGRAM -->
              <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/"> <!-- APERTURA 3º ENLACE -->
			  
				<span class="u-icon u-social-icon u-social-instagram u-icon-3"> <!-- APERTURA 3º SPAN (COTENEDOR DE LINEA) 4º DIV HEADER -->
				  
				  <!-- 1º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
					
					<!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-15de"></use>
				  
				  </svg> <!-- CIERRE 1º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  
				  <!-- 2º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
				  <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-15de">
					  
					  <!-- CIRCLE EN SVG / ELEMENTO SVG GENÉRICO - CREAR CÍRCULO -->
					  <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
					  
					  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
					  <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
					  
					  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
					  <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
				  
				  </svg> <!-- CIERRE 2º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
			  
				</span> <!-- CIERRE 3º SPAN (COTENEDOR DE LINEA) 4º DIV HEADER -->
			  
              </a> <!-- CIERRE 3º ENLACE -->
			  
            </div> <!-- CIERRE 4º DIV HEADER -->
			
				<p class="u-align-left u-text u-text-1">INFORMACIÓN SOBRE LA HISTORIA ANTIGUA Y LEYENDAS</p>
			
			
			<form class="navbar-form navbar-right" method="post" action="logout.php" role="form"> <!-- APERTURA 1º *FORM* EN EL HEADER CERRAR SESIÓN -->
						
				<button  class="u-btn u-btn-submit u-button-style"> Cerrar Sesión </button>  
						
			</form> <!-- CIERRE 1º *FORM* EN EL HEADER CERRAR SESIÓN -->		 	
				
				
          </div> <!-- CIERRE 3º DIV HEADER -->
                 
        </div> <!-- CIERRE 2º DIV HEADER -->
		
        <div class="u-align-center-xs u-section-row u-section-row-2" id="sec-71fa"> <!-- APERTURA 5º DIV HEADER -->
		
          <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-2"> <!-- APERTURA 6º DIV HEADER -->
			
			
			<!-- APERTURA 2º *FORM* EN EL HEADER - BOTÓN SEARCH -->
            <form action="#" method="get" class="u-border-1 u-border-grey-30 u-search u-search-right u-white u-search-1">
			
              <button class="u-search-button" type="submit"> <!-- APERTURA BOTÓN SEARCH 2º *FORM* EN EL HEADER -->
			  
                <span class="u-search-icon u-spacing-10">
				
                  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966">
					
					<!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1ce0"></use>
				  
				  </svg>
				  
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-1ce0" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
					
					<!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - CREAR FIGURAS -->
					<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
				  
				  </svg>
				  
                </span>
				
              </button> <!-- CIERRE BOTÓN SEARCH 2º *FORM* EN EL HEADER -->
			  
              <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
			  
            </form> <!-- CIERRE 2º *FORM* EN EL HEADER - BOTÓN SEARCH -->
			
			
			<br>
			
			<h1 class="u-align-left u-text u-text-1"> Has iniciado sesión como <?php echo $user ?>, disfruta del contenido. </h1>
			
			<p> <a href="Comentarios.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1"> Comentarios </a> </p>
			
          </div> <!-- CIERRE 6º DIV HEADER -->
                 
        </div> <!-- CIERRE 5º DIV HEADER -->
		
        <div class="u-grey-5 u-section-row u-section-row-3" id="sec-13b1"> <!-- APERTURA 7º DIV HEADER -->
		
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-3"> <!-- APERTURA 8º DIV HEADER -->
		  
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1"> <!-- APERTURA 1º NAV HEADER -->
			
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;"> <!-- APERTURA 9º DIV HEADER -->
			  
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
				
                  <svg>
				  
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
				  
				  </svg>
				  
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				  
					  <defs>
						  <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
							  <rect y="1" width="16" height="2"></rect>
							  <rect y="7" width="16" height="2"></rect>
							  <rect y="13" width="16" height="2"></rect>
						  </symbol>
					  </defs>
				  
				  </svg>
				  
                </a>
				
              </div> <!-- CIERRE 9º DIV HEADER -->
			  
              <div class="u-custom-menu u-nav-container"> <!-- APERTURA 10º DIV HEADER -->
			  
                <ul class="u-nav u-unstyled u-nav-1">
				
					<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Principal.php" style="padding: 10px 20px;">Principal</a> </li>
					
					<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Dinastía.php" style="padding: 10px 20px;">Dinastía</a> </li>
					
					<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Conquistas.php" style="padding: 10px 20px;">Conquistas</a> </li>
					
					<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Un-Hogar.php" style="padding: 10px 20px;">Un Hogar</a> </li>
				
				</ul>
				
              </div> <!-- CIERRE 10º DIV HEADER -->
			  
              <div class="u-custom-menu u-nav-container-collapse"> <!-- APERTURA 11º DIV HEADER -->
			  
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav"> <!-- APERTURA 12º DIV HEADER -->
				
                  <div class="u-inner-container-layout u-sidenav-overflow"> <!-- APERTURA 13º DIV HEADER -->
				  
                    <div class="u-menu-close"> </div> <!-- APERTURA Y CIERRE 14º DIV HEADER -->
					
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
					
						<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Principal.php" style="padding: 10px 20px;">Principal</a></li>
					
						<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Dinastía.php" style="padding: 10px 20px;">Dinastía</a></li>
						
						<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Conquistas.php" style="padding: 10px 20px;">Conquistas</a></li>
						
						<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Un-Hogar.php" style="padding: 10px 20px;">Un Hogar</a></li>
					
					</ul>
					
                  </div> <!-- CIERRE 13º DIV HEADER -->
				  
                </div> <!-- CIERRE 12º DIV HEADER -->
				
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div> <!-- APERTURA Y CIERRE 15º DIV HEADER -->
				
              </div> <!-- CIERRE 11º DIV HEADER -->
			  
            </nav> <!-- CIERRE 1º NAV HEADER -->
			
          </div> <!-- CIERRE 8º DIV HEADER -->
               
        </div> <!-- CIERRE 7º DIV HEADER -->
		
      </div> <!-- CIERRE 1º DIV HEADER -->
	  
  </header> <!-- CIERRE HEADER -->
	  
	  
    <section class="u-align-right u-clearfix u-section-1" id="sec-970f">
	
      <div class="u-clearfix u-sheet u-sheet-1">
	  
        <div class="fr-view u-align-left u-clearfix u-rich-text u-text u-text-1">
		
          <h2 style="text-align: left;">&nbsp;Amergin mac Míled, hijo de Golamh ( Conocido como Merlín )</h2>
          
		  <p>
            <span style="line-height: 2.0;">
              <span style="font-size: 1.25rem; font-weight: 700;">Amhairghin mac Míled</span>
              <span style="font-size: 1.25rem;">&nbsp;(o&nbsp;</span>
              <span style="font-size: 1.25rem; font-weight: 700;">Amergin</span>
              <span style="font-size: 1.25rem;">, conocido a día de hoy como&nbsp;</span>
              <span style="font-size: 1.25rem; font-weight: 700;">Merlín</span>
              <span style="font-size: 1.25rem;">), conocido también como&nbsp;</span>
              <span style="font-size: 1.25rem; font-weight: 700;">Amhairghin glúngel</span>
              <span style="font-size: 1.25rem;">&nbsp;("</span>
              <span style="font-size: 1.25rem; font-weight: 700;">
                <span class="u-text-palette-1-dark-1">Amergin rodilla blanca</span>
              </span>
              <span style="font-size: 1.25rem;">"), fue el hijo de&nbsp;</span>
              <span style="font-size: 1.25rem; font-weight: 700;">Míl Espáine</span>
              <span style="font-size: 1.25rem;">&nbsp;(</span>
            </span>
            <span style="font-size: 1.25rem; font-weight: 700;">
              <span class="u-text-palette-1-dark-1">Mil de Hispania</span>
            </span>
            <span style="line-height: 2.0;">
              <span style="font-size: 1.25rem;">) druida, filidh y juez de los Milesianos, identificados dentro de la mitología Irlandesa como los primeros habitantes gaélicos de Irlanda. Existen varios poemas atribuidos a&nbsp;</span>
              <span style="font-size: 1.25rem; font-weight: 700;">Amergin</span>
              <span style="font-size: 1.25rem;">&nbsp;dentro de las sagas y leyendas irlandesas.&nbsp;</span>
              <span style="font-size: 1.25rem; font-weight: 700;">risus nullam</span>.<img align="center" style="width: 382px;" class="fr-dii fr-fic fr-fil" src="images/Amergin.PNG" width="430">&nbsp; &nbsp; 
            </span>
          </p>
		  
          <h2 style="text-align: left;">
            <br>Milesios, descendientes de Mil Espáine&nbsp;
          </h2>
		  
          <p>
            <span style="font-size: 1.25rem;">Los Milesios llegaron a Irlanda procedentes de Galicia para vengar la muerte de <span style="font-weight: 700;">Ith</span> (hijo de <span style="font-weight: 700;">Breogán</span>, tío de <span style="font-weight: 700;">Golamh</span> y hermano de <span style="font-weight: 700;">Bile</span>; padre de <span style="font-weight: 700;">Golamh</span>), un explorador que fue asesinado por tres de los Reyes de los <span class="u-text-palette-2-dark-1" style="font-weight: 700;">Tuatha Dé Danann</span>, los dioses irlandeses;&nbsp;
            </span>
            <span style="font-weight: 700; font-size: 1.25rem;">
              <span class="u-text-palette-2-dark-1">Mac Cuill</span>
            </span>
            <span style="font-size: 1.25rem;">,&nbsp;</span>
            <span style="font-weight: 700;">
              <span class="u-text-palette-2-dark-1" style="font-size: 1.25rem;">Mac Cecht</span>
            </span>
            <span style="font-size: 1.25rem;">&nbsp;y&nbsp;</span>
            <span class="u-text-palette-2-dark-1" style="font-size: 1.25rem;">Mac Gréine</span>
            <span style="font-size: 1.25rem;">. Al llegar a tierra y pisar por primera vez con el pie derecho la Isla, <span style="font-weight: 700;">Amergin</span> entonó un himno, conocido como <span style="font-weight: 700;">"</span>
            </span>
            <span style="font-weight: 700; font-size: 1.25rem;">
              <span class="u-text-palette-1-dark-1">La canción de Amergin</span>
            </span>
            <span style="font-size: 1.25rem;">
              <span style="font-weight: 700;">"</span>. Las tres reinas de los <span class="u-text-palette-2-dark-1" style="font-weight: 700;">Tuatha Dé Dannan</span>, (
            </span>
            <span style="font-weight: 700; font-size: 1.25rem;">
              <span class="u-text-palette-2-dark-1">Banba</span>
            </span>
            <span style="font-size: 1.25rem;">,&nbsp;</span>
            <span style="font-weight: 700;">
              <span class="u-text-palette-2-dark-1" style="font-size: 1.25rem;">Ériu</span>
            </span>
            <span style="font-size: 1.25rem;">&nbsp;y&nbsp;</span>
            <span style="font-weight: 700;">
              <span class="u-text-palette-2-dark-1" style="font-size: 1.25rem;">Fódla</span>
            </span>
            <span style="font-size: 1.25rem;">), dieron permiso a <span style="font-weight: 700;">Amergin</span> y su gente para asentarse en Irlanda. Cada una pidió que la Isla fuera nombrada en su honor; a lo cual <span style="font-weight: 700;">Amergin</span> accedió,&nbsp;
            </span>
            <span class="u-text-palette-2-dark-1" style="font-weight: 700; font-size: 1.25rem;">Ériu</span>
            <span style="font-size: 1.25rem;">&nbsp;se convirtió en el nombre principal de la isla, actualmente llamada&nbsp;</span>
            <span class="u-text-palette-2-dark-1" style="font-weight: 700; font-size: 1.25rem;">Éire</span>
            <span style="font-size: 1.25rem;">&nbsp;en gaélico Irlandés, y&nbsp;</span>
            <span class="u-text-palette-2-dark-1" style="font-size: 1.25rem; font-weight: 700;">Banba</span>
            <span style="font-size: 1.25rem;">&nbsp;y&nbsp;</span>
            <span style="font-weight: 700; font-size: 1.25rem;">
              <span class="u-text-palette-2-dark-1">Fódla</span>
            </span>
            <span style="font-size: 1.25rem;">&nbsp;son nombres poéticos que se le dan a la isla, así como <span style="font-weight: 700;">Albión</span> para Inglaterra.
            </span>
          </p>
		  
        </div>
		
        <p class="u-align-left u-text u-text-2">Mago Amergin de los Milesios, hijo de Míl Espáine</p>
		
      </div>
	  
    </section>
	
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-palette-3-light-2 u-section-2" data-image-width="2000" data-image-height="1333" id="sec-5b95">
	
      <div class="u-clearfix u-sheet u-sheet-1">
	  
        <h2 class="u-text u-text-default u-text-1"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 24 24" style="width: 1em; height: 1em;"><g><path d="M21.8699341,15.5764771C21.9526978,15.0563965,22,14.5276489,22,14.0001221   c0-4.0748291-2.4532471-7.5820923-5.9572144-9.1385498c-1.3567505-3.1307373-3.6651001-4.7110596-3.7654419-4.7774658   c-0.1679688-0.1123047-0.3867188-0.1123047-0.5546875,0c-0.1362305,0.0909424-2.4417725,1.6750488-3.779541,4.7869263   C4.3302002,6.4780273,2,10.0346069,2,14.0001221c0,0.5303345,0.0539551,1.0548096,0.1365356,1.5739136   C0.0371704,18.7572021,0,20.4297485,0,20.5001221c0,0.2382812,0.1679688,0.4433594,0.4023438,0.4902344   c1.1191406,0.2241211,2.6699219,0.453125,4.3251953,0.453125c0.1936646,0,0.3898315-0.0065918,0.5858765-0.0132446   C7.1522217,23.0861206,9.5216675,24.0001221,12,24.0001221c2.5352783,0,4.880249-0.9442139,6.6779175-2.5661621   c0.1923218,0.0064697,0.3847656,0.0129395,0.5750122,0.0129395c1.6796875,0,3.2578125-0.2387695,4.3447266-0.456543   C23.8320312,20.9434814,24,20.7384033,24,20.5001221C24,20.4223022,23.9700317,18.7622681,21.8699341,15.5764771z    M13.2226562,19.9161377c0.3675537,0.244873,0.7716064,0.456604,1.199646,0.6439209   C13.6624146,20.8381958,12.8494873,21.0001221,12,21.0001221c-0.8303833,0-1.6494141-0.1575317-2.421936-0.4420166   c0.4165039-0.1813965,0.8205566-0.3894043,1.1992798-0.6419678c0.3841553-0.2563477,0.7994385-0.5391846,1.2221069-0.843811   C12.4237061,19.3782959,12.8394775,19.6606445,13.2226562,19.9161377z M6.3920288,18.164917   c-0.4356689-0.5852051-0.7828979-1.217041-1.0142212-1.8918457c0.4471436-0.505127,0.9241943-0.9747314,1.4346824-1.3823242   c0.350657-0.2805786,0.7128396-0.5150757,1.0753274-0.7185669c0.4647217,1.1061401,1.0673828,2.0264282,1.7426758,2.7940063   C8.8669434,17.4171143,7.8018799,17.8684082,6.3920288,18.164917z M10,9.5001221   c0-0.8354492,0.161438-1.6071167,0.3916626-2.3027344C10.9174805,7.0737915,11.4555664,7.0001221,12,7.0001221   c0.5553589,0,1.0929565,0.0706177,1.6112061,0.1912231C13.8646851,7.9631958,14,8.7385254,14,9.5001221   c0,0.2456055-0.0360107,0.4755249-0.06073,0.7105713C12.8129883,10.003418,12.0372314,10.0001221,12,10.0001221   c-0.0753784,0-0.8445435,0.0089722-1.9373169,0.2079468C10.0385132,9.9715576,10,9.7351685,10,9.5001221z M11.998291,14.7406006   c-0.2820435-0.3474731-0.6889038-0.9073486-1.0631714-1.6283569c0.6379395-0.1071777,1.053894-0.1121216,1.0639038-0.1121216   c0.005249,0,0.4196777,0.0038452,1.0526123,0.1080322C12.6768188,13.8268433,12.2783203,14.3946533,11.998291,14.7406006z    M7.0970459,11.1105957c-0.6114502,0.2696533-1.2303467,0.6049805-1.8309937,1.0222778   c0.317688-1.1387939,0.9195557-2.1832275,1.7520142-3.0328369C7.0136719,9.2346191,7,9.3624268,7,9.5001221   C7,10.052124,7.0373535,10.5889282,7.0970459,11.1105957z M17.6199341,18.171814   c-1.3994751-0.2921143-2.4677124-0.7451172-3.2529907-1.2116089c0.741394-0.8450317,1.3244629-1.7677002,1.7492676-2.7770996   c0.378479,0.2141113,0.7428589,0.4447021,1.0712795,0.7076416c0.5502415,0.4399414,1.0210667,0.9066162,1.4264011,1.364624   C18.3756714,16.9561157,18.0418091,17.6004639,17.6199341,18.171814z M16.9855957,9.0776978   c0.8300171,0.8406372,1.4483643,1.8922119,1.7674561,3.0814209c-0.5646362-0.3943481-1.1838989-0.7390137-1.8547363-1.0344849   C16.9587402,10.5999146,17,10.0632935,17,9.5001221C17,9.3587646,16.9904785,9.2185669,16.9855957,9.0776978z" fill="#303C42"></path><path d="M21,14.0001221c0,0.1061401-0.0100708,0.2120972-0.0137939,0.3182983   c-0.0298462-0.0402222-0.0553589-0.0775146-0.0858154-0.118103c-0.2861938-0.3814697-0.6071777-0.7346802-0.9511108-1.0684204   C19.5096436,9.0583496,16.116272,6.0001221,12,6.0001221c-0.3891602,0-0.7753906,0.0338745-1.157959,0.0894165   c0.1972046-0.4019775,0.4048462-0.7622681,0.6047974-1.0664673C11.630249,5.0119019,11.8137207,5.0001221,12,5.0001221   C16.9628906,5.0001221,21,9.0377197,21,14.0001221z" fill="#9CADB7"></path><path d="M12,5.0001221c-0.1862793,0-0.369751,0.0117798-0.5531616,0.0229492   c-0.0411987,0.0626221-0.083313,0.137207-0.124939,0.2044678c0.0698242-0.0026855,0.138855-0.008667,0.2093506-0.008667   c4.8078003,0,8.7352905,3.7922363,8.9767456,8.5406494c0.1290894,0.1483765,0.274292,0.2833862,0.392395,0.4407959   c0.0304565,0.0405884,0.0559692,0.0778809,0.0858154,0.118103C20.9899292,14.2122192,21,14.1062622,21,14.0001221   C21,9.0377197,16.9628906,5.0001221,12,5.0001221z" fill="#FFFFFF" opacity="0.2"></path><path d="M15.6655884,19.9498901c-0.7025146-0.218811-1.3430786-0.5028076-1.8882446-0.8657837   c-1.640564-1.093689-3.8474731-2.5884399-4.9906616-5.3509521c0.399292-0.1672974,0.7865601-0.298584,1.1461792-0.3979492   c0.6756592,1.3847656,1.4864502,2.2814331,1.6691895,2.47229c0.2329102,0.3666382,1.6155396,2.3105469,5.2647095,3.22229   C16.5027466,19.3826294,16.0970459,19.6848145,15.6655884,19.9498901z" fill="#9CADB7"></path><path d="M11.9990234,11.0001221c0.0084839,0,0.7318115,0.0045776,1.7719116,0.1962891   c-0.0839844,0.3411865-0.1818848,0.6642456-0.2994995,0.9707031C12.6109619,12.0032349,12.027771,12.0001221,12,12.0001221   c-0.1298828,0-3.2050781,0.0239258-5.81251,2.109375c-0.3821921,0.3059692-0.7444358,0.6470947-1.0952659,1.0040894   C5.0344849,14.7487183,5,14.3776245,5,14.0001221c0-0.1367188,0.0163574-0.2712402,0.0244141-0.4069824   C7.9060059,11.0444946,11.9587402,11.0001221,11.9990234,11.0001221z" fill="#9CADB7"></path><path d="M5.0244141,14.2181396c2.8815918-2.548645,6.9343262-2.5930176,6.9746094-2.5930176   c0.0079346,0,0.6500244,0.0061035,1.5886841,0.1652222c0.0631714-0.1954956,0.1318359-0.3851929,0.1832275-0.5939331   c-1.0401001-0.1917114-1.7634277-0.1962891-1.7719116-0.1962891c-0.0402832,0-4.0930176,0.0443726-6.9746094,2.5930176   C5.0163574,13.7288818,5,13.8634033,5,14.0001221c0,0.0889893,0.0180664,0.1741943,0.0217285,0.2625122   C5.0227661,14.2478027,5.0235596,14.2329712,5.0244141,14.2181396z" fill="#FFFFFF" opacity="0.2"></path><path d="M12.0009766,1.1251221c0.538269,0.4281006,1.748291,1.5218506,2.6971436,3.255188   c-0.515564-0.1448975-1.0453491-0.2548218-1.5908203-0.3152466c-0.4126587-0.5670776-0.7388306-0.9035034-0.7537842-0.918457   c-0.1875-0.1875-0.5195312-0.1875-0.7070312,0C11.5380859,3.2545166,9,5.835083,9,9.5001221   c0,0.3085938,0.0251465,0.6191406,0.0616455,0.9289551c-0.3209229,0.0831299-0.654541,0.1806641-0.9993286,0.2994385   C8.0253906,10.3279419,8,9.9199219,8,9.5001221C8,4.7056885,11.0537109,1.8848877,12.0009766,1.1251221z" fill="#9CADB7"></path><path d="M8.3197021,9.6173706c0-4.336792,2.762207-6.8883667,3.6190186-7.5756226   c0.3973389,0.315979,1.1983032,1.0396729,1.946228,2.1447144c0.2749023,0.0542603,0.5461426,0.1187744,0.8131714,0.1938477   c-0.9488525-1.7333374-2.1588745-2.8270874-2.6971436-3.255188C11.0537109,1.8848877,8,4.7056885,8,9.5001221   c0,0.4197998,0.0253906,0.8278198,0.0623169,1.2283936c0.1066284-0.0367432,0.2045898-0.0596924,0.309021-0.0925903   C8.3424072,10.3027344,8.3197021,9.9654541,8.3197021,9.6173706z" fill="#FFFFFF" opacity="0.2"></path><path d="M7.4506226,6.2438354C7.3244629,6.6862793,7.2264404,7.1571655,7.1503906,7.6479492   C5.1781616,9.1567993,4,11.5145264,4,14.0001221c0,1.5719604,0.4691772,3.0521851,1.3158569,4.34729   c-0.3552246,0.0470581-0.729248,0.0830688-1.1224976,0.1080933C3.4194946,17.1008911,3,15.569458,3,14.0001221   C3,10.7715454,4.7176514,7.8453979,7.4506226,6.2438354z" fill="#9CADB7"></path><path d="M3.375,14.2817993c0-3.0181274,1.5134277-5.7572021,3.9417114-7.4117432   c0.0455933-0.2078857,0.0776367-0.428894,0.1339111-0.6262207C4.7176514,7.8453979,3,10.7715454,3,14.0001221   c0,1.5693359,0.4194946,3.100769,1.1933594,4.4553833c0.0792847-0.0050659,0.1485596-0.0158691,0.2263184-0.0217896   C3.7498169,17.1541748,3.375,15.7374268,3.375,14.2817993z" fill="#FFFFFF" opacity="0.2"></path><path d="M1.0644531,20.0982666c0.1172485-0.5328979,0.4578247-1.59375,1.3913574-3.1572266   c0.1207886,0.3929443,0.2599487,0.77948,0.4285889,1.1550903c-0.227417,0.4265137-0.3433228,0.7056885-0.3482666,0.7189331   c-0.0615234,0.1538086-0.0429688,0.3286133,0.0498047,0.4658203S2.8339844,19.5006104,3,19.5006104   c3.62854,0,5.9488525-0.930603,7.3341064-1.7977905c0.2754517,0.2630615,0.5543823,0.5058594,0.835144,0.7338257   c-0.3261719,0.229126-0.6464844,0.4476318-0.9465942,0.6474609C7.5400391,20.8726807,3.5087891,20.5372314,1.0644531,20.0982666z" fill="#9CADB7"></path><path d="M10.2226562,18.5336914c-2.6328735,1.7554321-6.5562744,1.4636841-9.0120239,1.0372925   c-0.0673828,0.2099609-0.1156616,0.3884888-0.1461792,0.5272827c2.4443359,0.4389648,6.4755859,0.7744141,9.1582031-1.0141602   c0.3001099-0.1998291,0.6204224-0.418335,0.9465942-0.6474609c-0.1184082-0.0961304-0.2346191-0.2077026-0.3522339-0.3095093   C10.6161499,18.2653198,10.4110718,18.4082031,10.2226562,18.5336914z" opacity="0.1"></path><path d="M6.762146,21.3101807c0.4835205-0.0640869,0.9631348-0.1560059,1.4344482-0.2789307   C9.3598022,21.661377,10.6691895,22.0001221,12,22.0001221c3.2473755,0,6.0830688-1.9250488,7.3330688-4.8522339   c0.2603149,0.3557129,0.4802856,0.6908569,0.6525879,0.9801636C18.4310913,21.1343994,15.3981934,23.0001221,12,23.0001221   C10.1049805,23.0001221,8.2834473,22.4016113,6.762146,21.3101807z" fill="#9CADB7"></path><path d="M19.7119141,17.6938477c-1.565918,2.9625854-4.5725098,4.8009033-7.9425049,4.8009033   c-1.6225586,0-3.178833-0.4619751-4.5512695-1.2732544c-0.152771,0.026123-0.3023071,0.0682983-0.4559937,0.0886841   C8.2834473,22.4016113,10.1049805,23.0001221,12,23.0001221c3.3981934,0,6.4310913-1.8657227,7.9856567-4.8720703   C19.9052734,17.993042,19.8123169,17.8462524,19.7119141,17.6938477z" opacity="0.1"></path><path d="M19.6359253,20.4398193c0.2545776-0.3037109,0.4987183-0.6171265,0.7185059-0.9537354   C20.5670166,19.4927979,20.7780762,19.5006104,21,19.5006104c0.1660156,0,0.3212891-0.0825195,0.4140625-0.2197266   s0.1113281-0.3120117,0.0498047-0.4658203c-0.0419922-0.1074219-1.078125-2.6464844-3.6513767-4.7055664   c-0.4128933-0.3302002-0.8716946-0.6167603-1.3511257-0.8768311c0.1084595-0.3502197,0.2006836-0.710022,0.2755737-1.079895   c1.3869019,0.6524658,2.526123,1.5317383,3.3626709,2.6471558c2.0839844,2.7783203,2.671875,4.5537109,2.8369141,5.2983398   C22.0279541,20.2611084,20.8672485,20.4125366,19.6359253,20.4398193z" fill="#9CADB7"></path><path d="M19.7871094,15.3602295c1.7252197,2.2999878,2.418335,3.9013062,2.7017822,4.8109131   c0.1513672-0.0241699,0.3075562-0.0477905,0.4476318-0.072876c-0.1650391-0.7446289-0.7529297-2.5200195-2.8369141-5.2983398   c-0.8365479-1.1154175-1.975769-1.9946899-3.3626709-2.6471558c-0.0443726,0.2192993-0.1070557,0.4279175-0.1633911,0.6401978   C17.8903809,13.4373169,18.9819946,14.2866821,19.7871094,15.3602295z" fill="#FFFFFF" opacity="0.2"></path><path d="M15.9110107,8.1883545C15.9625244,8.6193237,16,9.057251,16,9.5001221   c0,2.7970581-0.8140259,5.0524902-2.4630127,6.8905029c-0.4318237-0.3400879-0.7203979-0.6461792-0.8930664-0.8564453   C13.3337402,14.7272339,15,12.4702148,15,9.5001221c0-0.6418457-0.0866699-1.2901611-0.2440186-1.9372559   C15.1625366,7.7354126,15.5484009,7.9451904,15.9110107,8.1883545z" fill="#9CADB7"></path><path d="M15.9110107,8.1883545C15.9625244,8.6193237,16,9.057251,16,9.5001221   c0,2.7970581-0.8140259,5.0524902-2.4630127,6.8905029c-0.4318237-0.3400879-0.7203979-0.6461792-0.8930664-0.8564453   C13.3337402,14.7272339,15,12.4702148,15,9.5001221c0-0.6418457-0.0866699-1.2901611-0.2440186-1.9372559   C15.1625366,7.7354126,15.5484009,7.9451904,15.9110107,8.1883545z" fill="#9CADB7"></path><path d="M13.6982422,14.6640015c0.7561646-1.1169434,1.6779175-2.9315186,1.6779175-5.1405029   c0-0.5755005-0.0786743-1.1563721-0.206604-1.7366943c-0.1401367-0.071167-0.2680054-0.1621704-0.4135742-0.223938   C14.9133301,8.2099609,15,8.8582764,15,9.5001221c0,2.9700928-1.6662598,5.2271118-2.3560791,6.0340576   c0.1726685,0.2102661,0.4612427,0.5163574,0.8930664,0.8564453c0.0747681-0.083374,0.1387939-0.1721802,0.210144-0.2572632   C13.4359131,15.7019653,13.3890381,15.1207886,13.6982422,14.6640015z" fill="#FFFFFF" opacity="0.2"></path><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="3.2502491" x2="24.702507" y1="9.1012049" y2="19.104557"><stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0.2"></stop><stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0"></stop>
</linearGradient><path d="M21.8699341,15.5764771C21.9526978,15.0563965,22,14.5276489,22,14.0001221   c0-4.0748291-2.4532471-7.5820923-5.9572144-9.1385498c-1.3567505-3.1307373-3.6651001-4.7110596-3.7654419-4.7774658   c-0.1679688-0.1123047-0.3867188-0.1123047-0.5546875,0c-0.1362305,0.0909424-2.4417725,1.6750488-3.779541,4.7869263   C4.3302002,6.4780273,2,10.0346069,2,14.0001221c0,0.5303345,0.0539551,1.0548096,0.1365356,1.5739136   C0.0371704,18.7572021,0,20.4297485,0,20.5001221c0,0.2382812,0.1679688,0.4433594,0.4023438,0.4902344   c1.1191406,0.2241211,2.6699219,0.453125,4.3251953,0.453125c0.1936646,0,0.3898315-0.0065918,0.5858765-0.0132446   C7.1522217,23.0861206,9.5216675,24.0001221,12,24.0001221c2.5352783,0,4.880249-0.9442139,6.6779175-2.5661621   c0.1923218,0.0064697,0.3847656,0.0129395,0.5750122,0.0129395c1.6796875,0,3.2578125-0.2387695,4.3447266-0.456543   C23.8320312,20.9434814,24,20.7384033,24,20.5001221C24,20.4223022,23.9700317,18.7622681,21.8699341,15.5764771z    M13.2226562,19.9161377c0.3675537,0.244873,0.7716064,0.456604,1.199646,0.6439209   C13.6624146,20.8381958,12.8494873,21.0001221,12,21.0001221c-0.8303833,0-1.6494141-0.1575317-2.421936-0.4420166   c0.4165039-0.1813965,0.8205566-0.3894043,1.1992798-0.6419678c0.3841553-0.2563477,0.7994385-0.5391846,1.2221069-0.843811   C12.4237061,19.3782959,12.8394775,19.6606445,13.2226562,19.9161377z M6.3920288,18.164917   c-0.4356689-0.5852051-0.7828979-1.217041-1.0142212-1.8918457c0.4471436-0.505127,0.9241943-0.9747314,1.4346824-1.3823242   c0.350657-0.2805786,0.7128396-0.5150757,1.0753274-0.7185669c0.4647217,1.1061401,1.0673828,2.0264282,1.7426758,2.7940063   C8.8669434,17.4171143,7.8018799,17.8684082,6.3920288,18.164917z M10,9.5001221   c0-0.8354492,0.161438-1.6071167,0.3916626-2.3027344C10.9174805,7.0737915,11.4555664,7.0001221,12,7.0001221   c0.5553589,0,1.0929565,0.0706177,1.6112061,0.1912231C13.8646851,7.9631958,14,8.7385254,14,9.5001221   c0,0.2456055-0.0360107,0.4755249-0.06073,0.7105713C12.8129883,10.003418,12.0372314,10.0001221,12,10.0001221   c-0.0753784,0-0.8445435,0.0089722-1.9373169,0.2079468C10.0385132,9.9715576,10,9.7351685,10,9.5001221z M11.998291,14.7406006   c-0.2820435-0.3474731-0.6889038-0.9073486-1.0631714-1.6283569c0.6379395-0.1071777,1.053894-0.1121216,1.0639038-0.1121216   c0.005249,0,0.4196777,0.0038452,1.0526123,0.1080322C12.6768188,13.8268433,12.2783203,14.3946533,11.998291,14.7406006z    M7.0970459,11.1105957c-0.6114502,0.2696533-1.2303467,0.6049805-1.8309937,1.0222778   c0.317688-1.1387939,0.9195557-2.1832275,1.7520142-3.0328369C7.0136719,9.2346191,7,9.3624268,7,9.5001221   C7,10.052124,7.0373535,10.5889282,7.0970459,11.1105957z M17.6199341,18.171814   c-1.3994751-0.2921143-2.4677124-0.7451172-3.2529907-1.2116089c0.741394-0.8450317,1.3244629-1.7677002,1.7492676-2.7770996   c0.378479,0.2141113,0.7428589,0.4447021,1.0712795,0.7076416c0.5502415,0.4399414,1.0210667,0.9066162,1.4264011,1.364624   C18.3756714,16.9561157,18.0418091,17.6004639,17.6199341,18.171814z M16.9855957,9.0776978   c0.8300171,0.8406372,1.4483643,1.8922119,1.7674561,3.0814209c-0.5646362-0.3943481-1.1838989-0.7390137-1.8547363-1.0344849   C16.9587402,10.5999146,17,10.0632935,17,9.5001221C17,9.3587646,16.9904785,9.2185669,16.9855957,9.0776978z" fill="url(#SVGID_1_)"></path>
</g></svg><img></span>&nbsp;LUCHA EN <span class="u-text-palette-4-dark-2" style="font-weight: 700;">IRLANDA</span>
        </h2>
		
        <p class="u-text u-text-2">Las gentes de <span style="font-weight: 700;">Galicia</span> o <span style="font-weight: 700;">Milesios</span> tuvieron que combatir contra titanes, reyes, diosas y todo tipo de seres mágicos en la <span style="font-weight: 700;">sexta conquista de Irlanda</span>.
        </p>
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-20 u-size-30-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h3 class="u-text u-text-3">Comienza la batalla 1</h3>
                      <p class="u-text u-text-4"> Había una condición para&nbsp; ganar el reinado de la Isla, los <span style="font-weight: 700;">Milesios</span> deberían luchar en combate contra los <span class="u-text-palette-1-dark-1" style="font-weight: 700;">Reyes Irlandeses</span>, sus Druidas y guerreros/as. Los <span style="font-weight: 700;">Milesios</span> aceptaron, el pacto consistía en dejar la isla y alejarse nueve olas de distancia (<span class="u-text-palette-3-dark-2" style="font-weight: 700;">una barrera mágica</span>) antes de regresar a pelear. 
                      </p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                      <h3 class="u-text u-text-default u-text-5">La tormenta Mágica 2</h3>
                      <p class="u-text u-text-6"> Pero, al haber alcanzado la distancia convenida, los Druidas de los <span class="u-text-palette-2-dark-1" style="font-weight: 700;">Dé Dannan</span>, invocaron una mágica tormenta para mantenerlos a raya y que no pudieran desembarcar de nuevo. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20-lg u-size-20-xl u-size-21-sm u-size-21-xs u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-image u-layout-cell u-size-60 u-image-1" src="" data-image-width="574" data-image-height="606">
                    <div class="u-container-layout u-valign-top u-container-layout-3" src=""></div>
                  </div>
                </div>
              </div>
              <div class="u-size-19-sm u-size-19-xs u-size-20-lg u-size-20-xl u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-right-cell u-size-30 u-layout-cell-4">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <h3 class="u-text u-text-default u-text-7">Magia de <span style="font-weight: 700;">Amergin</span> 3
                      </h3>
                      <p class="u-text u-text-8">
                        <span style="font-weight: 700;">Amergin </span>realizó entonces la "<span class="u-text-palette-3-dark-2" style="font-weight: 700;">Invocación de Irlanda</span>" para derrotar la titánica magia, calmar las aguas hechizadas por los <span class="u-text-palette-2-dark-1" style="font-weight: 700;">Dé Dannan</span> y poder llegar a tierra a salvo. Después de una feroz batalla, donde los <span class="u-text-palette-1-dark-1" style="font-weight: 700;">Reyes Irlandeses</span>&nbsp;(<span class="u-text-palette-2-dark-1" style="font-weight: 700;">Tuatha Dé Danann</span>) cayeron en combate cuerpo a cuerpo contra tres de los hijos de <span style="font-weight: 700;">Mil <span style="font-weight: 400;">:</span>&nbsp;
                        </span>
                        <span style="font-weight: 700;">Eber Finn</span>, <span style="font-weight: 700;">Éremón </span>y el mismísimo <span style="font-weight: 700;">Amergin</span>, los <span style="font-weight: 700;">Milesios</span>&nbsp;habían triunfado.
                      </p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-right-cell u-size-30 u-layout-cell-5">
                    <div class="u-container-layout u-valign-top u-container-layout-5">
                      <h3 class="u-text u-text-default u-text-9">Final de&nbsp;<span class="u-text-palette-2-dark-1">Dé Dannan <span class="u-text-black">4</span>
                        </span>
                      </h3>
                      <p class="u-text u-text-10">
                        <span style="font-weight: 700;">Amergin </span>dividió la tierra entre sus dos hermanos, <span style="font-weight: 700;">Eber</span> tomando el sur y <span style="font-weight: 700;">Éremón</span> el norte. Los <span class="u-text-palette-2-dark-1" style="font-weight: 700;">Tuatha Dé Dannan</span>, se retiraron al Otro Mundo, volviéndose parte de la gente de los <span class="u-text-palette-4-dark-2" style="font-weight: 700;">Áes Shíde</span> (Hadas y Elfos) viviendo junto con los seres mágicos bajo tierra.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="u-border-2 u-border-grey-75 u-container-style u-expanded-width u-group u-image u-image-default u-shading u-image-2" data-image-width="700" data-image-height="487">
          <div class="u-container-layout u-container-layout-6"></div>
        </div>
        <p class="u-align-center u-text u-text-11">Batalla de Amergin de los Milesios contra la magia Dé Dannan</p>
      </div>
    </section>
	
    <section class="u-clearfix u-section-3" id="sec-1a21">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-align-center u-text u-text-1"> Los Poemas de Amergin tienen similitudes con los del druida Taliesin, dentro de la mitología de Gales.</p>
        <a href="https://gl.wikipedia.org/wiki/Taliesin" target="_blank" class="u-align-center u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">Taliesin</a>
      </div>
    </section>
    
		<?php 
		
				} /* CIERRE 1º IF */ 
				
				else 
				
				{ /* APERTURA 1º ELSE */
										
					?>
		
				  <header class="u-align-center-sm u-align-center-xs u-clearfix u-grey-80 u-header u-header" id="sec-ce7d"> <!-- APERTURA HEADER - ELSE - -->
				  
					  <div class="u-clearfix u-sheet u-sheet-1"> <!-- APERTURA 1º DIV HEADER - ELSE - -->
							
							<div class="u-social-icons u-spacing-10 u-social-icons-1"> <!-- APERTURA 2º DIV HEADER - ELSE - -->

								
							  <!-- ICONO DE REDES SOCIALES : FACEBOOK - ELSE - -->
							  <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/"> <!-- APERTURA 1º ENLACE - ELSE - -->
							  
							  <span class="u-icon u-social-facebook u-social-icon u-icon-1"> <!-- APERTURA 1º SPAN (COTENEDOR DE LINEA) 2º DIV HEADER - ELSE - -->
									
								  <!-- 1º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
								  
									  <!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
									  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b849"></use>
									  
								  </svg> <!-- CIERRE 1º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  
								  <!-- 2º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b849">
									  
									  <!-- CIRCLE EN SVG / ELEMENTO SVG GENÉRICO - CREAR CÍRCULO -->
									  <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
									  
									  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
									  <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
								  
								  </svg> <!-- CIERRE 2º SVG DEL 1º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								
								</span> <!-- CIERRE 1º SPAN (COTENEDOR DE LINEA) 2º DIV HEADER - ELSE - -->
								
							  </a> <!-- CIERRE 1º ENLACE - ELSE - -->
							  
							  
							  <!-- 2º ICONO DE REDES SOCIALES : TWITTER - ELSE - -->
							  <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/?lang=ES"> <!-- APERTURA 2º ENLACE - ELSE - -->
							  
								<span class="u-icon u-social-icon u-social-twitter u-icon-2"> <!-- APERTURA 2º SPAN (COTENEDOR DE LINEA) 2º DIV HEADER - ELSE - -->
							  
								  <!-- 1º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
									  
									  <!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
									  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-43b7"></use>
									  
								  </svg> <!-- CIERRE 1º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  
								  <!-- 2º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-43b7">
								  
									  <!-- CIRCLE EN SVG / ELEMENTO SVG GENÉRICO - CREAR CÍRCULO -->
									  <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
									  
									  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
									  <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
								  
								  </svg>  <!-- CIERRE 2º SVG DEL 2º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								
								</span> <!-- CIERRE 2º SPAN (COTENEDOR DE LINEA) 2º DIV HEADER - ELSE - -->
								
							  </a> <!-- CIERRE 2º ENLACE - ELSE - -->
							  
							  
							  <!-- 1º ICONO DE REDES SOCIALES : INSTAGRAM - ELSE - -->
							  <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/"> <!-- APERTURA 3º ENLACE - ELSE - -->	
							  
							  <span class="u-icon u-social-icon u-social-instagram u-icon-3"> <!-- APERTURA 3º SPAN (COTENEDOR DE LINEA) 2º DIV HEADER - ELSE - -->
							  
								  <!-- 1º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
									  
									  <!-- USE EN SVG DUPLICA EL CONTENIDO DONDE ESTE SIENDO USADO -->
									  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ea14"></use>
									  
								  </svg> <!-- CIERRE 1º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  
								  <!-- 2º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								  <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ea14">
									  
									  <!-- CIRCLE EN SVG / ELEMENTO SVG GENÉRICO - CREAR CÍRCULO -->
									  <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
									  
									  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
									  <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
									  
									  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
									  <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
									  
									  <!-- PATH EN SVG / ELEMENTO SVG GENÉRICO - DIBUJAR CÍRCULO -->
									  <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8C90.6,29.1,82.7,21.3,73.1,21.3zM83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
								  
								  </svg> <!-- CIERRE 2º SVG DEL 3º ICONO - GRÁFICOS VECTORIALES ESCALABLES -->
								
								</span> <!-- CIERRE 3º SPAN (COTENEDOR DE LINEA) 2º DIV HEADER - ELSE - -->
								
							  </a> <!-- CIERRE 3º ENLACE - ELSE - -->

							  
							</div> <!-- CIERRE 2º DIV HEADER - ELSE - -->
						
							<h3 class="u-headline u-text u-text-1"> Logearse con su cuenta para acceder a los contenidos. </h3>
							
							<!-- BOTÓN DE ACCESO A LA PÁGINA DE INICIO - ELSE - -->
							<a href="..\inicio.html" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1"> Inicio </a> 
							
							<!-- BOTÓN DE ACCESO A LA PÁGINA DE REGISTRO - ELSE - -->
							<a href="Formulario.html" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1"> Registrar </a> 
						
					</div> <!-- CIERRE 1º DIV HEADER - ELSE - -->
					  
				  </header> <!-- CIERRE HEADER - ELSE - -->

					<fieldset class="fieldset1"> <!-- APERTURA 1º FIELDSET DEL  - ELSE - -->
					
						<p>ACCESO DENEGADO. Entre a través del <a href="Formulario_login.html"> formulario de login </a> . </p>
					
					</fieldset> <!-- CIERRE 1º FIELDSET DEL  - ELSE - -->
					
					<br> <!-- SEPARADOR -->
					
		<?php
					
				} /* CIERRE 1º ELSE */ 
				
		
		?>    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b948"> <!-- APERTURA FOOTER -->
	
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1"> <!-- APERTURA 1º DIV DEL FOOTER -->
		
			<p class="u-small-text u-text u-text-variant u-text-1">En ésta página nos gusta ver la historia desde&nbsp; una perspectiva neutral y intentamos dar al usuario la posibiliad de acceder a un mundo de conocimiento de una manera amigable.</p>
			
			<p class="u-small-text u-text u-text-variant u-text-1"> <a href="Condiciones.html" target="_blank">Política de Privacidad</a></p>
			
			<p class="u-small-text u-text u-text-variant u-text-1">©2021 | UnOff Emsite | The UnOfficial History Website - Search </p>
			
		</div> <!-- CIERRE 1º DIV DEL FOOTER -->
	
	</footer> <!-- CIERRE FOOTER -->
	  		
  </body> <!-- CIERRE BODY -->
  
</html> <!-- CIERRE HTML -->