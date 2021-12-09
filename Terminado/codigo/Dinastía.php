<!DOCTYPE html>

<html style="font-size: 16px;"> <!-- APERTURA HTML -->

  <head> <!-- APERTURA HEAD -->
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- METAPROGRAMACIÓN -->
    <meta charset="utf-8"> <!-- METAPROGRAMACIÓN -->
    <meta name="keywords" content="Facts &amp; Questions, Sample Headline"> <!-- METAPROGRAMACIÓN -->
    <meta name="description" content=""> <!-- METAPROGRAMACIÓN -->
    <meta name="page_type" content="np-template-header-footer-from-plugin"> <!-- METAPROGRAMACIÓN -->
	
    <title>Dinastía</title> <!-- TÍTULO DE LA PÁGINA -->
	
    <link rel="stylesheet" href="nicepage.css" media="screen"> <!-- ESTILOS EN CASCADA CSS -->  
	<link rel="stylesheet" href="Dinastía.css" media="screen"> <!-- ESTILOS EN CASCADA CSS -->
	
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
    <meta name="twitter:title" content="Dinastía"> <!-- METAPROGRAMACIÓN -->
    <meta name="twitter:description" content=""> <!-- METAPROGRAMACIÓN -->
    <meta property="og:title" content="Dinastía"> <!-- METAPROGRAMACIÓN -->
    <meta property="og:type" content="website"> <!-- METAPROGRAMACIÓN -->
	
  </head> <!-- CIERRE HEAD -->
  
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
	  
	  	  
    <section class="u-clearfix u-section-1" id="sec-7cdf">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-white u-layout-cell-1" src="">
                <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-circle u-palette-1-base u-spacing-10 u-icon-1">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 32 32" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1755"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 32 32" id="svg-1755"><g><path d="M20.388,10.918L32,12.118l-8.735,7.749L25.914,31.4l-9.893-6.088L6.127,31.4l2.695-11.533L0,12.118 l11.547-1.2L16.026,0.6L20.388,10.918z"></path>
</g></svg>
              </span>
                  <h2 class="u-text u-text-default u-text-1">Ith hijo de Breogán</h2>
                  <p class="u-text u-text-2">
                    <span style="font-size: 1.125rem;"> Entre los descendientes de Breogan se cuentan Ith y Bile, que sera el padre de Golamh, tambien llamado Mil. Al crecer, Mil decide hacer un viaje a Escita, donde estan sus origenes, casandose con la hija del Faraón de Egipto, y volviendo luego a España, donde restaurara el reino de Brigantia, que habia declinado a la muerte de Breogan. Un dia, su tio Ith divisa desde Tor Breogan una tierra al otro lado del mar que decide visitar.<br>
                      <br>Una vez alli, los pobladores de Irlanda por aquel entonces, los Tuatha de Dannan, reciben a los Gaedil de acuerdo a las normas de hospitalidad. Pero pronto comienzan a temer que esa visita sea solo el adelanto de una invasión y los atacan. Los Gaedil (Galaicos) se veran obligados a huir, muriendo Ith durante el viaje de vuelta.<br>
                      <br>Al recibir la noticia de la muerte de Ith, sus hijos juran venganza; se embarcan rumbo a Irlanda y tras varias vicisitudes y un par de batallas logran derrotar a los Tuatha y hacerse con el control de la isla. Los Tuatha pudieron quedarse en Irlanda, aunque con la condicion de que habitasen en un mundo subterráneo.
                    </span>
                    <br>
                  </p>
                  <a href="https://es.wikipedia.org/wiki/Breog%C3%A1n" target="_blank" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Saber más de Breogán</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2" src="">
                <div class="u-container-layout u-container-layout-2" src="">
                  <img class="u-expanded-width u-image u-image-1" src="images/Breogan.png" data-image-width="400" data-image-height="378">
                  <p class="u-text u-text-default u-text-3">Breogán, hijo de Brath de la tribu de los Gaedil, ( Dinastía Folgueira ).</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-8c98">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-text u-text-black u-text-1">EN ESTOS VIDEOS SE RESUME DE UNA MANERA SENCILLA LA HISTORIA DE LOS CELTAS Y ROMANIZACIÓN DE LA REGIÓN CELTA DE GALICIA</p>
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-left u-expanded u-video">
                    <div class="embed-responsive embed-responsive-1">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/4ep_9yQhkes?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-align-left u-expanded u-video">
                    <div class="embed-responsive embed-responsive-2">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/UH9so6447gc?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-color-scheme-u10 u-color-style-multicolor-1 u-section-3" id="sec-fbc3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-40">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-left-cell u-palette-2-light-3 u-size-60 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                          <h2 class="u-text u-text-1">Golamh,&nbsp;<span style="font-size: 1.875rem;">conocido como&nbsp;Míl Espáine.</span>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-20">
                    <div class="u-layout-row">
                      <div class="u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-1" src="" data-image-width="450" data-image-height="564">
                        <div class="u-container-layout u-container-layout-2"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-palette-2-light-3 u-right-cell u-size-20 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <h4 class="u-align-center u-text u-text-2"><span class="u-icon"></span><span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 512 512" style="width: 1em; height: 1em;"><g id="_x31_02_x2C__Axe_x2C__hatchet_x2C__tool_x2C__cutter_x2C__viking"><g><path d="M333.371,378.4l-58.188-100.81l-14.787,25.599l50.793,88.011L333.371,378.4    z M138.647,92.375l22.212-12.832l-8.635-14.941l-22.182,12.829L138.647,92.375z M451.546,146.305l-78.628-45.387l-0.094-0.063    l-28.768-16.621l-0.093-0.031l-0.093-0.061l-13.049-7.52l-12.953,22.43l111.062,64.121c1.802,1.057,2.453,3.387,1.396,5.188    c-1.024,1.833-3.354,2.454-5.187,1.397l-111.063-64.121l-34.577,59.896c4.069,1.833,8.575,4.163,13.298,6.865l0.247,0.188    l0.218,0.093l0.218,0.124l0.403,0.248l0.218,0.125l0.218,0.154l0.652,0.373l0.218,0.125l2.36,1.43l0.218,0.154    c18.423,11.37,39.578,28.456,54.583,48.34c16.807,22.211,26.033,47.903,15.844,73.284c-0.65,1.585-1.367,3.2-2.174,4.784    l21.871,12.644c22.585-17.428,50.389-44.424,70.674-75.335c15.1-22.988,26.004-48.121,27.433-72.943L451.546,146.305z     M236.817,262.368l14.788-25.63L219.482,181.1c-2.05,1.273-4.162,2.578-6.275,3.977l-0.156,0.123h-0.03l-0.467,0.311l-0.156,0.094    l-0.497,0.342l-0.154,0.094l-0.188,0.124l-0.154,0.124l-0.156,0.094l-0.093,0.063l-0.062,0.03l-0.186,0.124l-0.156,0.125    l-0.154,0.092l-0.156,0.125l-0.186,0.094l-0.032,0.031l-0.125,0.093l-0.154,0.124l-0.156,0.094l-0.186,0.123l-0.154,0.094    l-0.156,0.124l-0.154,0.125l-0.188,0.093l-0.154,0.125l-0.186,0.123l-0.156,0.125l-0.125,0.063l-0.03,0.03l-0.188,0.124    l-0.155,0.125l-0.156,0.124l-0.186,0.093l-0.155,0.125l-0.063,0.03l-0.093,0.095l-0.186,0.123l-0.156,0.125l-0.186,0.124    l-0.155,0.093l-0.156,0.124l0,0l-0.186,0.124l-0.156,0.125l-0.186,0.124l-0.154,0.124l-0.156,0.125l-0.125,0.062l-0.062,0.032    l-0.156,0.123l-0.186,0.125l-0.154,0.124l-0.156,0.124l-0.186,0.125l-0.032,0.03l-0.125,0.094l-0.186,0.124l-0.156,0.124    l-0.155,0.124l-0.186,0.125l-0.156,0.092v0.032l-0.186,0.124l-0.156,0.125l-0.186,0.124l-0.154,0.124l-0.186,0.124l-0.063,0.063    l-0.093,0.063l-0.156,0.124l-0.186,0.124l-0.154,0.124l-0.186,0.125l-0.156,0.154h-0.032l-0.154,0.125l-0.156,0.123l-0.154,0.125    l-0.188,0.125l-0.154,0.123l-0.125,0.094l-0.062,0.031l-0.156,0.155l-0.186,0.124l-0.156,0.124l-0.155,0.125l-0.186,0.124    l-0.063,0.063l-0.093,0.062l-0.186,0.155l-0.156,0.125l-0.186,0.123l-0.154,0.125l-0.156,0.125l-0.03,0.03l-0.156,0.124    l-0.186,0.124l-0.156,0.125L236.817,262.368z M292.518,181.1L178.598,378.4l22.213,12.8l51.849-89.813l0.032-0.031v-0.03    l0.093-0.156l60.858-105.407l-0.87-0.653l-0.154-0.123l-1.025-0.777l-0.156-0.154l-0.682-0.498l-0.156-0.125l-0.187-0.123    l-0.156-0.125l0,0l-0.187-0.154l-0.154-0.125l-0.188-0.124l-0.154-0.124l-0.156-0.124l-0.093-0.063l-0.093-0.063l-0.154-0.124    l-0.188-0.124l-0.155-0.124l-0.187-0.125l-0.312-0.248l-0.187-0.125l-0.154-0.124l-0.186-0.124l-0.156-0.124l-0.156-0.094    l-0.029-0.03l-0.156-0.125l-0.154-0.124l-0.187-0.124l-0.156-0.125l-0.187-0.123l-0.063-0.032l-0.094-0.093l-0.186-0.124    l-0.154-0.124l-0.156-0.094l-0.187-0.125l-0.156-0.124l0,0l-0.186-0.124l-0.154-0.124l-0.156-0.124l-0.187-0.125l-0.155-0.092    l-0.125-0.095l-0.062-0.03l-0.156-0.125l-0.154-0.123l-0.186-0.125l-0.156-0.094l-0.154-0.124l-0.063-0.03l-0.125-0.094    l-0.154-0.124l-0.186-0.093l-0.156-0.125l-0.154-0.125l-0.156-0.093l0,0l-0.343-0.248l-0.154-0.093l-0.186-0.125l-0.156-0.093    l-0.125-0.093l-0.029-0.031l-0.343-0.219l-0.156-0.123l-0.154-0.094l-0.156-0.124l-0.093-0.062l-0.062-0.031l-0.186-0.125    l-0.156-0.093l-0.154-0.124l-0.156-0.094l-0.187-0.125l-0.031-0.03l-0.125-0.062l-0.154-0.125l-0.156-0.094l-0.186-0.123    l-0.154-0.094l-0.156-0.124l0,0l-0.156-0.093l-0.187-0.125l-0.154-0.093l-0.156-0.094l-0.154-0.124l-0.124-0.063l-0.032-0.03    l-0.154-0.124l-0.188-0.094l-0.154-0.093l-0.156-0.124l-0.154-0.094l-0.093-0.063l-0.094-0.031l-0.156-0.123l-0.154-0.094    l-0.156-0.094l-0.154-0.123l-0.342-0.188l-0.156-0.123l-0.154-0.095l-0.156-0.093l-0.154-0.094l-0.156-0.092l-0.031-0.032    l-0.155-0.093l-0.156-0.094l-0.154-0.092l-0.156-0.125l-0.154-0.094l-0.093-0.062l-0.093-0.03l-0.156-0.095L293.948,182    l-0.156-0.123l-0.154-0.095l-0.156-0.093l-0.032-0.031l-0.122-0.063l-0.188-0.092l-0.154-0.094l-0.156-0.094l-0.154-0.123    l-0.124-0.063L292.518,181.1z M351.141,79.543l22.182,12.832l8.636-14.944l-22.181-12.829L351.141,79.543z M72.601,177.993    l-21.84,12.612l-3.79-6.586l21.81-12.613L72.601,177.993z M439.399,177.993c-1.834-1.026-2.455-3.387-1.398-5.188    c1.057-1.834,3.387-2.455,5.221-1.398l21.808,12.613c1.832,1.057,2.455,3.386,1.398,5.188c-1.057,1.834-3.387,2.455-5.221,1.398    L439.399,177.993z M239.83,447.399c-2.081,0-3.791-1.709-3.791-3.822c0-2.112,1.709-3.821,3.791-3.821h187.392    c2.081,0,3.79,1.709,3.79,3.821c0,2.113-1.709,3.822-3.79,3.822H239.83z M118.082,425.777c-2.081,0-3.791-1.709-3.791-3.79    c0-2.113,1.709-3.822,3.791-3.822h275.807c2.11,0,3.82,1.709,3.82,3.822c0,2.081-1.71,3.79-3.82,3.79H118.082z M181.177,76.623    l-32.589,18.796l-9.413,5.437l-0.093,0.063l-0.063,0.03L26.001,166.188c1.43,24.822,12.334,49.955,27.432,72.943    c20.287,30.911,48.09,57.907,70.676,75.335l21.87-12.644c-0.807-1.584-1.521-3.199-2.174-4.784    c-10.19-25.381-0.963-51.073,15.812-73.284c8.886-11.744,19.915-22.523,31.254-31.719l0.062-0.063l0.062-0.063l0.093-0.062    l0.063-0.063l0.031-0.032l0.186-0.123l0.218-0.188l0.589-0.465l0.032-0.031l1.056-0.838l0.218-0.188l0.218-0.155l0.651-0.497    l0.188-0.154c5.219-4.039,10.408-7.736,15.47-11.029l0.217-0.155l0.467-0.28l0.062-0.063l0.156-0.092l0.218-0.156l0.217-0.124    l0.216-0.155l0.156-0.094l0.062-0.03l0.249-0.155l0.218-0.125l0.217-0.154l0.186-0.125h0.032l0.218-0.155l0.217-0.124l0.218-0.155    l0.218-0.124l0.061-0.031l0.155-0.125l0.217-0.124l0.218-0.124l0.342-0.217l0.093-0.063l0.218-0.125l0.217-0.155l0.218-0.124    l0.218-0.124h0.031l0.186-0.124l0.218-0.156l0.217-0.123l0.218-0.125l0.062-0.031l0.156-0.094l0.216-0.123l1.461-0.871l0.03-0.03    l0.622-0.373l0.093-0.03l0.095-0.063l0.093-0.031c4.722-2.733,9.195-5.063,13.295-6.896l-34.577-59.896L86.86,169.76l-3.791-6.586    l111.062-64.121L181.177,76.623z" style="fill-rule:evenodd;clip-rule:evenodd;"></path>
</g>
</g></svg><img></span>&nbsp;&nbsp;Míl Espáine
                      </h4>
                      <p class="u-text u-text-3"> En la&nbsp;mitología irlandesa&nbsp;<b>Míl Espáine</b>&nbsp;(del Latín&nbsp;<i>Miles Hispaniae</i>, Soldado de Hispania) es el ancestro de los habitantes de Irlanda, los "hijos de Míl", que representan a los celtas goidélicos.
                      </p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-palette-2-light-3 u-right-cell u-size-40 u-layout-cell-4">
                    <div class="u-container-layout u-container-layout-4">
                      <h4 class="u-align-center u-text u-text-4"><span class="u-icon u-icon-3"><svg class="u-svg-content" viewBox="0 0 100 112" style="width: 1em; height: 1em;"><defs><style>.cls-1{fill:#fff0ed;}.cls-2{fill:#45413c;fill-opacity:0.15;}.cls-3{fill:#e0366f;}.cls-4{fill:#ff6196;}.cls-5{fill:#ff87af;}.cls-6{fill:#fff;}.cls-7{fill:#ff866e;}.cls-8{fill:#ff6242;}.cls-9{fill:#e04122;}.cls-10{fill:none;stroke:#45413c;stroke-linecap:round;stroke-linejoin:round;}</style>
</defs><g id="Scene"><circle class="cls-1" cx="50" cy="56" r="40"></circle><ellipse class="cls-2" cx="50" cy="87.73" rx="15.52" ry="1.73"></ellipse><path class="cls-3" d="M50,30.5a3,3,0,0,0-1.2.25h2.4A3,3,0,0,0,50,30.5Z"></path><path class="cls-4" d="M47,33.5V39h6V33.5a3,3,0,0,0-1.8-2.75H48.8A3,3,0,0,0,47,33.5Z"></path><rect class="cls-5" height="8.25" width="6" x="47" y="39"></rect><rect class="cls-6" height="8.25" width="6" x="47" y="47.25"></rect><rect class="cls-7" height="8.25" width="6" x="47" y="55.5"></rect><rect class="cls-8" height="8.25" width="6" x="47" y="63.75"></rect><path class="cls-9" d="M47,76.5a3,3,0,0,0,6,0V72H47Z"></path><path class="cls-3" d="M34.58,23.3a22,22,0,0,0-5,7.45h9.54A16,16,0,0,1,34.58,23.3Z"></path><path class="cls-4" d="M47,39V34.72a16,16,0,0,1-7.86-4H29.59A21.94,21.94,0,0,0,28,39Z"></path><path class="cls-5" d="M47,39H28a21.94,21.94,0,0,0,1.6,8.25h9.54a16,16,0,0,1,7.86-4Z"></path><path class="cls-6" d="M34.58,54.7a16,16,0,0,1,4.56-7.45H29.59A22,22,0,0,0,34.58,54.7Z"></path><path class="cls-3" d="M65.41,23.3a16,16,0,0,1-4.56,7.45H70.4A22,22,0,0,0,65.41,23.3Z"></path><path class="cls-4" d="M53,39H72a21.94,21.94,0,0,0-1.6-8.25H60.85a16,16,0,0,1-7.86,4Z"></path><path class="cls-5" d="M53,43.28a16,16,0,0,1,7.86,4H70.4A21.94,21.94,0,0,0,72,39H53Z"></path><path class="cls-6" d="M65.41,54.7a22,22,0,0,0,5-7.45H60.85A16,16,0,0,1,65.41,54.7Z"></path><path class="cls-10" d="M50,79.5a3,3,0,0,1-3-3v-43a3,3,0,1,1,6,0v43A3,3,0,0,1,50,79.5Z"></path><path class="cls-10" d="M47,34.72A16,16,0,0,1,34.58,23.3a22,22,0,0,0,0,31.39A16,16,0,0,1,47,43.28Z"></path><path class="cls-10" d="M65.41,23.3A16,16,0,0,1,53,34.72v8.56A16,16,0,0,1,65.41,54.7a22,22,0,0,0,0-31.39Z"></path>
</g></svg><img></span>&nbsp;Golamh
                      </h4>
                      <p class="u-text u-text-5">El nombre de este ancestro mitológico de los irlandeses y gallegos era Golam. Sirvió como soldado en Escitia&nbsp;y Egipto, antes de recordar una profecía que decía que sus descendientes gobernarían Irlanda, cuando viajó al oeste llegando hasta la península ibérica&nbsp;donde luchó varias batallas conquistando un sin fin de territorios de los Iberos antes de morir, sin ver Irlanda él mismo. Su mujer, Scota, y su tío, Ith, que vieron Irlanda desde una torre construida por el padre de Ith, Breogán, y que ha sido identificada como la actual Torre de Hércules&nbsp;en Galicia, navegaron hasta Irlanda donde Íth fue asesinado por los Tuatha Dé Danann. Después de que su cuerpo fuese devuelto a Brigantia&nbsp;(actual A Coruña), los ocho hijos de Míl y los nueve hermanos de Íth invadieron Irlanda y derrotaron a los Tuatha Dé Danann.</p>
                      <a href="https://es.wikipedia.org/wiki/M%C3%ADl_Esp%C3%A1ine" target="_blank" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Golamh</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-200e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" style="width: 1em; height: 1em;"><g id="_x37_09_x2C__Crown_x2C__honor_x2C__king_x2C__market_x2C__royal"><g><path d="M351.217,156.201c-1.332-1.331-3.17-2.154-5.176-2.154    s-3.842,0.823-5.174,2.154c-1.31,1.309-2.133,3.146-2.133,5.174c0,2.007,0.823,3.844,2.133,5.152    c1.332,1.332,3.168,2.154,5.174,2.154s3.844-0.822,5.176-2.154c1.309-1.309,2.131-3.146,2.131-5.152    C353.348,159.348,352.525,157.51,351.217,156.201 M168.682,156.053c-1.33-1.33-3.167-2.154-5.173-2.154    c-2.028,0-3.845,0.824-5.175,2.154c-1.33,1.309-2.134,3.147-2.134,5.152c0,2.028,0.804,3.844,2.134,5.176    c1.33,1.33,3.146,2.133,5.175,2.133c1.858,0,3.548-0.676,4.836-1.838h0.021l0.084-0.063l0.021-0.042h0.021l0.063-0.063v-0.021    l0.042-0.043h0.021l0.021-0.021l0.042-0.042l0.042-0.043v-0.021l0.042-0.021c1.269-1.309,2.049-3.104,2.049-5.09    C170.815,159.2,169.993,157.361,168.682,156.053z M265.619,414.172c-0.486,6.188-1.309,16.326,0.317,18.691    c1.288,1.879,4.773,2.766,8.68,3.759l3.526,0.928c9.081,2.62,18.29,7.879,27.245,13.01c9.313,5.322,18.396,10.519,26.335,12.103    c0.718,0.126,0.823,0.526,0.887,0.4c0.232-0.465,0.232-1.858,0.212-3.695c-0.021-3.464,0.591-10.18,1.288-17.804    c1.352-14.826,3.02-33.326,1.225-35.818c-0.633-0.886-1.669-1.585-3.104-2.155c-1.606-0.654-3.675-1.117-6.125-1.414h-0.022    h-0.042h-0.063v-0.021l-0.294-0.021l0,0l-0.297-0.042l0,0l-0.316-0.021l0,0l-0.338-0.042l-0.316-0.021l0,0l-0.339-0.042l0,0    l-0.358-0.021l0,0l-0.359-0.042L323,401.881l0,0l-0.379-0.021l0,0l-0.381-0.044l0,0l-0.381-0.021l-0.4-0.021l0,0l-0.401-0.021l0,0    l-0.423-0.021l-0.422-0.021v-0.021l-0.422-0.021l0,0l-0.424-0.021l0,0l-0.443-0.021l0,0l-0.442-0.021l0,0l-0.444-0.021h-0.021    l-0.444-0.021l0,0h-0.465l0,0l-0.463-0.021h-0.021l-0.465-0.021l0,0l-0.486-0.021l0,0h-0.465h-0.021l-0.485-0.021l0,0    l-0.484-0.021l0,0l-0.507-0.021l0,0h-0.508l0,0l-0.507-0.021l0,0h-0.507l0,0l-0.508-0.021h-0.021h-0.507l0,0h-0.527l0,0    l-0.527-0.021l0,0h-0.529h-0.021h-0.507h-0.021h-0.527l0,0l-0.529-0.021h-0.021h-0.528h-0.021h-0.527l0,0h-0.55l0,0h-0.549l0,0    h-0.55l0,0H304.1l0,0h-0.55l0,0h-0.549h-0.021l-0.549,0.021l0,0h-0.55h-0.021h-0.55l0,0l-0.549,0.021h-0.021h-0.549l0,0h-0.57l0,0    l-0.549,0.021h-0.021h-0.549l0,0l-0.55,0.021h-0.021l-0.55,0.021l0,0h-0.549h-0.021l-0.549,0.021h-0.021l-0.526,0.021h-0.022    l-0.548,0.021l0,0h-0.443h-0.021l-0.444,0.021l0,0l-0.443,0.021h-0.021h-0.442l0,0l-0.443,0.021h-0.021l-0.443,0.021l0,0    l-0.444,0.021l0,0l-0.442,0.021l0,0l-0.443,0.021l0,0l-0.444,0.021l0,0l-0.444,0.021l0,0l-0.441,0.021l0,0l-0.423,0.021h-0.021    l-0.423,0.021l0,0l-0.423,0.021h-0.021l-0.421,0.021l0,0l-0.423,0.022h-0.021l-0.402,0.021h-0.021l-0.402,0.042h-0.021    l-0.399,0.021l0,0l-0.423,0.021l0,0l-0.423,0.021l0,0l-0.4,0.042l0,0l-0.401,0.021h-0.021l-0.402,0.042l0,0l-0.379,0.021h-0.021    l-0.381,0.042h-0.021l-0.381,0.021l0,0l-0.399,0.042l0,0l-0.381,0.021l0,0l-0.381,0.042l0,0l-0.379,0.021v0.021l-0.381,0.021l0,0    l-0.36,0.042l0,0l-0.379,0.021v0.021l-0.359,0.021l-0.358,0.044l0,0l-0.359,0.042l0,0l-0.339,0.042l0,0l-0.337,0.042h-0.021    l-0.339,0.042l0,0l-0.337,0.042l0,0l-0.317,0.043l0,0l-0.316,0.042h-0.021l-0.318,0.042l0,0l-0.315,0.042l0,0l-0.297,0.042    l-0.315,0.042l-0.297,0.042l0,0l-0.295,0.065l0,0l-0.275,0.042l0,0l-0.273,0.042l0,0l-0.275,0.042v0.021l-0.273,0.042l0,0    l-0.276,0.042l0,0l-0.252,0.063l0,0l-0.255,0.042l0,0l-0.231,0.063l0,0l-0.231,0.042l0,0l-0.233,0.063l0,0l-0.231,0.042v0.021    l-0.213,0.044l0,0l-0.21,0.063l0,0l-0.211,0.063l0,0c-2.915,0.845-4.437,2.006-5.196,3.252c-0.76,1.204-0.907,2.704-0.993,4.013    L265.619,414.172z M318.86,420.803c-0.337-0.76-0.949-1.31-1.667-1.583c-0.719-0.297-1.563-0.297-2.344,0.042h-0.043    c-0.74,0.358-1.311,0.971-1.584,1.669c-0.275,0.739-0.297,1.583,0.042,2.365l0.021,0.042c0.339,0.739,0.951,1.288,1.669,1.563    c0.718,0.296,1.562,0.296,2.345-0.021l0.042-0.021c0.76-0.337,1.288-0.949,1.583-1.668c0.275-0.739,0.297-1.583-0.043-2.345    L318.86,420.803z M323.528,418.544l0.19,0.464c0.824,2.007,0.76,4.182,0.021,6.061c-0.74,1.902-2.176,3.506-4.16,4.437    l-0.465,0.21c-2.008,0.804-4.182,0.762-6.062,0.021c-1.881-0.739-3.485-2.175-4.415-4.14l-0.231-0.484    c-0.804-2.028-0.739-4.182,0-6.063c0.739-1.88,2.175-3.505,4.14-4.435l0.486-0.211c2.006-0.803,4.182-0.761,6.061-0.021    C320.973,415.122,322.6,416.579,323.528,418.544z M345.345,292.145c2.618,3.676,2.302,8.533,0.253,13.855l-0.042,0.126    c-4.857,12.439-19.957,27.476-25.786,33.306l-1.33,1.351c-1.015,0.993-2.662,0.993-3.676,0c-1.014-1.015-1.014-2.66,0-3.675    l1.331-1.351c5.638-5.598,20.212-20.127,24.646-31.51l0.043-0.105c1.879-4.901,1.646-9.167-2.811-11.385l0,0l-0.041-0.021    l-0.021-0.021h-0.043l-0.041-0.021l-0.043-0.021l-0.041-0.021l-0.021-0.021l-0.043-0.021h-0.041l-0.043-0.021l-0.041-0.021    l-0.043-0.021l0,0l-0.042-0.021h-0.021l-0.045-0.021l-0.041-0.021l-0.043-0.021l-0.084-0.042h-0.042l-0.085-0.042l-0.041-0.021    l-0.381-0.126c-8.574-2.894-21.119,6.778-32.418,19.303c-11.68,12.967-21.796,28.848-25.174,37.592l-0.423,1.141    c-2.154,6.378-3.358,15.648-3.992,25.005c-0.57,8.152-0.738,16.304-0.76,22.787c12.884-2.281,36.325-2.534,49.524-1.33h0.085    l0.255,0.021l0.336,0.021c4.521-26.251,14.573-35.374,25.218-45.006c6.947-6.293,14.169-12.818,20.041-25.047    c4.626-9.588,6.886-36.451,5.851-60.211c-0.844-19.555-3.738-36.746-9.123-39.346l-0.528-0.23    c-2.683-1.078-5.027-0.36-6.991,1.203c-2.323,1.858-4.224,4.814-5.596,7.666l-0.973,2.175c-2.809,6.948-5.025,17.086-6.229,27.328    C344.605,275.145,344.352,285.006,345.345,292.145z M246.38,414.172c0.486,6.188,1.309,16.326-0.317,18.691    c-1.288,1.879-4.773,2.766-8.679,3.759l-3.527,0.928c-9.083,2.62-18.29,7.879-27.244,13.01    c-9.314,5.322-18.395,10.519-26.335,12.103c-0.718,0.126-0.825,0.526-0.888,0.4c-0.231-0.465-0.231-1.858-0.21-3.695    c0.021-3.464-0.591-10.18-1.288-17.804c-1.351-14.826-3.02-33.326-1.225-35.818c0.633-0.886,1.69-1.585,3.104-2.155    c1.606-0.654,3.675-1.117,6.124-1.414h0.021h0.042h0.063v-0.021l0.296-0.021l0,0l0.295-0.042h0.021l0.297-0.021l0,0l0.338-0.042    l0.316-0.021l0,0l0.339-0.042h0.021l0.337-0.021l0,0l0.36-0.042l0.358-0.021l0,0l0.381-0.021l0,0l0.38-0.044l0,0l0.4-0.021    l0.381-0.021l0,0l0.402-0.021h0.021l0.4-0.021l0.423-0.021v-0.021l0.423-0.021l0,0l0.423-0.021h0.021l0.421-0.021l0,0l0.444-0.021    l0,0l0.465-0.021l0,0l0.444-0.021l0,0h0.463l0,0l0.465-0.021h0.021l0.465-0.021l0,0l0.486-0.021l0,0h0.486l0,0l0.484-0.021l0,0    l0.486-0.021l0,0l0.507-0.021l0,0h0.507l0,0l0.507-0.021l0,0h0.507h0.021l0.505-0.021l0,0h0.507h0.021h0.507l0,0l0.528-0.021    h0.021h0.507h0.021h0.528l0,0h0.528l0,0l0.549-0.021l0,0h0.528h0.021h0.526l0,0h0.549h0.021h0.528l0,0h0.549h0.021h1.098l0,0    h0.549l0,0h0.549h0.021l0.549,0.021l0,0h0.549h0.021h0.549l0,0l0.549,0.021h0.021h0.549h0.021h0.549l0,0l0.549,0.021h0.021h0.549    l0,0l0.548,0.021h0.021l0.549,0.021h0.021h0.549l0,0l0.549,0.021h0.021l0.549,0.021l0,0l0.549,0.021h0.021h0.444l0,0l0.444,0.021    h0.021l0.442,0.021l0,0h0.444h0.021l0.423,0.021h0.021l0.444,0.021l0,0l0.442,0.021l0,0l0.444,0.021l0,0l0.444,0.021h0.021    l0.423,0.021h0.021l0.421,0.021l0,0l0.444,0.021l0,0l0.444,0.021l0,0l0.423,0.021h0.021l0.421,0.021l0,0l0.423,0.021l0,0    l0.423,0.022h0.021l0.402,0.021h0.021l0.4,0.042h0.021l0.402,0.021h0.021l0.402,0.021l0,0l0.421,0.021l0,0l0.402,0.042l0,0    l0.402,0.021h0.021l0.4,0.042l0,0l0.402,0.021l0,0l0.381,0.042h0.021l0.379,0.021l0,0l0.402,0.042l0,0l0.381,0.021l0,0    l0.379,0.042l0,0l0.381,0.021v0.021l0.381,0.021l0,0l0.358,0.042h0.021l0.36,0.021v0.021l0.358,0.021l0.36,0.044l0,0l0.359,0.042    l0,0l0.337,0.042l0,0l0.36,0.042l0,0l0.337,0.042l0,0l0.339,0.042l0,0l0.317,0.043l0,0l0.337,0.042l0,0l0.318,0.042l0,0    l0.316,0.042l0,0l0.296,0.042l0.316,0.042l0.296,0.042l0,0l0.295,0.065l0,0l0.275,0.042l0,0l0.295,0.042l0,0l0.275,0.042v0.021    l0.253,0.042l0,0l0.273,0.042l0,0l0.254,0.063l0,0l0.253,0.042l0,0l0.233,0.063l0,0l0.252,0.042l0,0l0.21,0.063l0,0l0.233,0.042    v0.021l0.211,0.044l0,0l0.212,0.063l0,0l0.211,0.063l0,0c2.915,0.845,4.434,2.006,5.196,3.252c0.76,1.204,0.907,2.704,0.991,4.013    L246.38,414.172z M193.138,420.803c0.339-0.76,0.951-1.31,1.669-1.583c0.739-0.297,1.563-0.297,2.344,0.042h0.042    c0.76,0.358,1.309,0.971,1.585,1.669c0.294,0.739,0.294,1.583-0.042,2.365l-0.021,0.042c-0.338,0.739-0.951,1.288-1.668,1.563    c-0.718,0.296-1.563,0.296-2.345-0.021l-0.042-0.021c-0.739-0.337-1.288-0.949-1.584-1.668c-0.274-0.739-0.295-1.583,0.042-2.345    L193.138,420.803z M188.472,418.544l-0.191,0.464c-0.802,2.007-0.76,4.182-0.021,6.061c0.739,1.902,2.176,3.506,4.16,4.437    l0.465,0.21c2.005,0.804,4.182,0.762,6.061,0.021c1.879-0.739,3.485-2.175,4.436-4.14l0.211-0.484    c0.802-2.028,0.739-4.182,0-6.063c-0.718-1.88-2.176-3.505-4.14-4.435l-0.486-0.211c-2.006-0.803-4.161-0.761-6.061-0.021    C191.027,415.122,189.4,416.579,188.472,418.544z M166.655,292.145c-2.618,3.676-2.302,8.533-0.254,13.855l0.043,0.126    c4.857,12.439,19.957,27.476,25.786,33.306l1.33,1.351c1.015,0.993,2.662,0.993,3.675,0c1.014-1.015,1.014-2.66,0-3.675    l-1.33-1.351c-5.638-5.598-20.211-20.127-24.646-31.51l-0.042-0.105c-1.881-4.901-1.647-9.167,2.808-11.385l0,0l0.042-0.021    l0.021-0.021h0.042l0.044-0.021l0.042-0.021l0.042-0.021l0.042-0.021l0.021-0.021h0.042l0.042-0.021l0.042-0.021l0.042-0.021l0,0    l0.042-0.021h0.042l0.042-0.021l0.021-0.021l0.042-0.021l0.086-0.042h0.042l0.084-0.042l0.042-0.021l0.379-0.126    c8.576-2.894,21.12,6.778,32.419,19.303c11.699,12.967,21.794,28.848,25.174,37.592l0.423,1.141    c2.153,6.378,3.357,15.648,3.992,25.005c0.568,8.152,0.739,16.304,0.76,22.787c-12.883-2.281-36.325-2.534-49.524-1.33h-0.084    l-0.254,0.021l-0.316,0.021c-4.542-26.251-14.594-35.374-25.239-45.006c-6.947-6.293-14.15-12.818-20.041-25.047    c-4.625-9.588-6.886-36.451-5.85-60.211c0.844-19.555,3.758-36.746,9.123-39.346l0.549-0.23c2.66-1.078,5.004-0.36,6.97,1.203    c2.324,1.858,4.224,4.814,5.596,7.666l0.972,2.175c2.829,6.948,5.025,17.086,6.25,27.328    C167.394,275.145,167.648,285.006,166.655,292.145z M307.984,248.83c-13.263-1.965-31.657-3.189-51.974-3.189    c-20.338,0-38.712,1.225-51.995,3.189c-12.019,1.773-19.473,3.653-19.473,5.193c0,1.543,7.454,3.422,19.473,5.196    c13.262,1.964,31.657,3.19,51.995,3.19c20.316,0,38.711-1.227,51.974-3.19c12.017-1.774,19.473-3.653,19.473-5.196    C327.457,252.483,320.001,250.604,307.984,248.83z M254.996,137.51l0.846,0.064l1.076-0.085h0.021h0.021l0.022-0.021l0.886-0.191    c1.204-0.337,2.281-0.992,3.146-1.857c1.332-1.311,2.134-3.147,2.134-5.175c0-2.006-0.802-3.843-2.134-5.153    c-1.33-1.33-3.146-2.154-5.172-2.154c-1.965,0-3.74,0.782-5.049,2.028l-0.105,0.126c-1.33,1.311-2.155,3.147-2.155,5.153    c0,2.027,0.825,3.864,2.134,5.175c0.928,0.929,2.111,1.604,3.443,1.942l0.084,0.021l0.084,0.021l0.359,0.064l0.084,0.021    L254.996,137.51z M310.055,135.778c1.436,0,2.598,1.162,2.598,2.599c0,1.436-1.162,2.597-2.598,2.597h-8.701    c-1.436,0-2.598-1.161-2.598-2.597c0-1.437,1.162-2.599,2.598-2.599H310.055z M201.755,140.974c-1.416,0-2.576-1.161-2.576-2.597    c0-1.437,1.16-2.599,2.576-2.599h8.7c1.437,0,2.599,1.162,2.599,2.599c0,1.436-1.162,2.597-2.599,2.597H201.755z M153.708,140.974    c-1.435,0-2.597-1.161-2.597-2.597c0-1.437,1.162-2.599,2.597-2.599h16.411c1.435,0,2.597,1.162,2.597,2.599    c0,1.436-1.162,2.597-2.597,2.597H153.708z M253.307,28.599c0-1.437,1.162-2.597,2.599-2.597c1.436,0,2.597,1.16,2.597,2.597    v25.28c0,1.436-1.161,2.598-2.597,2.598c-1.437,0-2.599-1.162-2.599-2.598V28.599z M355.861,81.207    c1.269-0.676,2.83-0.212,3.527,1.055c0.677,1.247,0.191,2.831-1.055,3.506l-23.295,12.631c-1.269,0.696-2.83,0.21-3.527-1.035    c-0.677-1.268-0.212-2.83,1.055-3.527L355.861,81.207z M153.477,85.768c-1.246-0.675-1.711-2.259-1.035-3.506    c0.675-1.267,2.26-1.73,3.506-1.055l23.294,12.629c1.267,0.697,1.732,2.26,1.056,3.527c-0.676,1.245-2.26,1.731-3.527,1.035    L153.477,85.768z M304.796,53.857c0.76-1.204,2.345-1.584,3.569-0.846c1.225,0.762,1.604,2.345,0.844,3.57l-8.194,13.368    c-0.76,1.204-2.345,1.583-3.569,0.845c-1.225-0.761-1.604-2.344-0.865-3.569L304.796,53.857z M202.6,56.582    c-0.76-1.226-0.379-2.809,0.846-3.57c1.225-0.738,2.829-0.358,3.569,0.846l8.214,13.368c0.74,1.226,0.359,2.809-0.865,3.569    c-1.204,0.738-2.81,0.359-3.548-0.845L202.6,56.582z M253.307,76.477c0-1.438,1.162-2.599,2.599-2.599    c1.436,0,2.597,1.161,2.597,2.599v14.255c0,1.415-1.161,2.576-2.597,2.576c-1.437,0-2.599-1.161-2.599-2.576V76.477z     M308.218,105.177c1.246-0.718,2.829-0.296,3.546,0.95c0.72,1.226,0.297,2.83-0.949,3.527l-12.334,7.138    c-1.246,0.719-2.83,0.296-3.548-0.95c-0.718-1.225-0.295-2.83,0.951-3.527L308.218,105.177z M200.996,109.654    c-1.227-0.697-1.648-2.302-0.93-3.527c0.697-1.246,2.302-1.668,3.527-0.95l12.355,7.138c1.225,0.697,1.646,2.303,0.928,3.527    c-0.718,1.246-2.302,1.669-3.527,0.95L200.996,109.654z M280.74,90.182c0.719-1.225,2.302-1.646,3.526-0.949    c1.246,0.717,1.669,2.301,0.951,3.527l-4.35,7.539c-0.698,1.246-2.281,1.668-3.527,0.949c-1.225-0.696-1.647-2.281-0.951-3.526    L280.74,90.182z M226.592,92.76c-0.699-1.227-0.275-2.811,0.949-3.527c1.246-0.697,2.831-0.275,3.527,0.949l4.35,7.54    c0.72,1.245,0.297,2.83-0.949,3.526c-1.225,0.719-2.81,0.297-3.527-0.949L226.592,92.76z M358.1,135.778    c1.438,0,2.6,1.162,2.6,2.599c0,1.436-1.162,2.597-2.6,2.597h-16.408c-1.438,0-2.599-1.161-2.599-2.597    c0-1.437,1.161-2.599,2.599-2.599H358.1z M301.29,286.633c1.099-0.907,2.724-0.76,3.632,0.317c0.907,1.099,0.76,2.745-0.338,3.653    c-0.105,0.084-37.274,30.939-41.478,45.617c-4.329,15.143-4.794,53.854-4.794,53.98v0.063v0.063l0,0v0.063l0,0v0.063h-0.021v0.065    l0,0v0.063l0,0l-0.021,0.063l0,0v0.063l0,0l-0.021,0.063l0,0l-0.021,0.063l0,0l-0.021,0.063l0,0v0.063h-0.021v0.063h-0.023v0.063    l0,0l-0.021,0.064h-0.021l-0.021,0.043l0,0l-0.021,0.063l0,0l-0.021,0.063l0,0l-0.021,0.042h-0.021l-0.021,0.063l0,0l-0.021,0.063    l0,0l-0.042,0.042l0,0l-0.021,0.063l0,0l-0.043,0.042l0,0l-0.021,0.063h-0.021l-0.021,0.044l0,0l-0.042,0.042l0,0l-0.042,0.063    l0,0l-0.043,0.042l0,0l-0.042,0.042l0,0l-0.042,0.042l0,0l-0.044,0.042l0,0l-0.042,0.063l0,0l-0.042,0.042l0,0l-0.042,0.021    h-0.021l-0.042,0.041l0,0l-0.042,0.043l0,0l-0.042,0.042h-0.021l-0.042,0.044l0,0l-0.042,0.021l0,0l-0.063,0.041l0,0l-0.042,0.043    l0,0l-0.063,0.021l0,0l-0.044,0.042l0,0l-0.063,0.021l0,0l-0.063,0.021l0,0l-0.042,0.041l0,0l-0.063,0.021l0,0l-0.063,0.021l0,0    l-0.063,0.021l0,0l-0.042,0.021h-0.021l-0.042,0.021l0,0l-0.063,0.021l0,0l-0.065,0.021l0,0h-0.063l0,0l-0.063,0.021l0,0    l-0.063,0.021l0,0h-0.063l0,0h-0.063l0,0l-0.063,0.021l0,0h-0.063h-0.021h-0.042h-0.021h-0.065l0,0h-0.063l0,0h-0.063l0,0h-0.063    l0,0h-0.063l0,0h-0.063l0,0l-0.063-0.021h-0.021h-0.063l0,0h-0.063l0,0l-0.042-0.021h-0.021l-0.065-0.021l0,0h-0.042h-0.021    l-0.042-0.021h-0.021l-0.042-0.021l0,0l-0.063-0.021l0,0l-0.063-0.021l0,0l-0.063-0.021l0,0l-0.063-0.021l0,0l-0.042-0.021l0,0    l-0.063-0.041l0,0l-0.065-0.021l0,0l-0.042-0.021l0,0l-0.063-0.042l0,0l-0.063-0.021l0,0l-0.042-0.043l0,0l-0.042-0.041h-0.021    l-0.042-0.021l0,0l-0.042-0.044l0,0l-0.063-0.042l0,0l-0.042-0.043l0,0l-0.042-0.041l0,0l-0.044-0.021h-0.021l-0.042-0.042l0,0    l-0.042-0.063l0,0l-0.042-0.042l0,0l-0.042-0.042l0,0l-0.042-0.042l0,0l-0.042-0.042l0,0l-0.021-0.063h-0.021l-0.021-0.042l0,0    l-0.042-0.044l0,0l-0.042-0.063l0,0l-0.021-0.042l0,0l-0.042-0.063l0,0l-0.021-0.042h-0.021l-0.021-0.063l0,0l-0.021-0.063l0,0    l-0.044-0.042l0,0l-0.021-0.063l0,0l-0.021-0.063l0,0l-0.021-0.043l0,0l-0.021-0.064l0,0l-0.021-0.063l0,0l-0.021-0.063l0,0    l-0.021-0.063l0,0l-0.021-0.063l0,0l-0.021-0.063l0,0v-0.063l0,0l-0.021-0.063l0,0v-0.063l0,0l-0.021-0.063l0,0v-0.065l0,0v-0.063    h-0.021v-0.063l0,0v-0.063v-0.063c0-0.126-0.465-38.838-4.794-53.98c-4.181-14.678-41.372-45.533-41.479-45.617    c-1.097-0.908-1.246-2.555-0.337-3.653c0.907-1.077,2.555-1.225,3.632-0.317c0.126,0.084,38.543,31.954,43.167,48.173    c0.993,3.442,1.774,7.962,2.407,12.968c0.634-5.006,1.438-9.525,2.407-12.968C262.747,318.587,301.185,286.717,301.29,286.633z     M242.599,485.999c-1.436,0-2.597-1.162-2.597-2.6c0-1.414,1.162-2.575,2.597-2.575h101.33c1.438,0,2.599,1.161,2.599,2.575    c0,1.438-1.161,2.6-2.599,2.6H242.599z M354.299,485.999c-1.437,0-2.598-1.162-2.598-2.6c0-1.414,1.161-2.575,2.598-2.575h12.672    c1.414,0,2.597,1.161,2.597,2.575c0,1.438-1.183,2.6-2.597,2.6H354.299z M151.09,485.744c-1.437,0-2.599-1.162-2.599-2.597    c0-1.436,1.162-2.598,2.599-2.598h48.003c1.438,0,2.599,1.162,2.599,2.598c0,1.435-1.162,2.597-2.599,2.597H151.09z     M178.207,477.107c-1.435,0-2.597-1.162-2.597-2.599c0-1.436,1.162-2.598,2.597-2.598h125.068c1.438,0,2.599,1.162,2.599,2.598    c0,1.437-1.161,2.599-2.599,2.599H178.207z M257.53,142.643h-0.042h-0.021l-0.021,0.021l0,0h-0.021h-0.042h-0.021h-0.021h-0.021    h-0.021l-0.021,0.021h-0.021h-0.021h-0.021h-0.021h-0.042h-0.021l0,0h-0.021l-0.021,0.021h-0.021h-0.063h-0.021h-0.022l0,0h-0.042    h-0.021h-0.021l-0.042,0.021h-0.021l0,0h-0.021h-0.021h-0.021h-0.042h-0.021h-0.021h-0.021l0,0h-0.042h-0.021h-0.021l-0.021,0.021    h-0.042l0,0h-0.021h-0.021h-0.021h-0.042h-0.022h-0.021h-0.021l0,0h-0.042h-0.021h-0.021h-0.021h-0.042l0,0h-0.021h-0.021h-0.021    h-0.042h-0.021h-0.021l0,0h-0.021l0,0h-0.021h-0.042h-0.021h-0.021h-0.021h-0.042c-0.465,0-0.93-0.021-1.374-0.063l-32.819,53.368    l-49.017-26.293l-0.296,0.295c-0.274,0.296-0.591,0.57-0.907,0.846l12.334,78.035l0.189-0.105h0.021l0.189-0.105l0.149-0.064    l0.042-0.021l0.21-0.105l0.105-0.042c17.044-8.046,66.271-8.046,71.341-8.046c6.651,0,52.903-0.021,70.792,7.793l0.168,0.084    l0.043,0.021l0.21,0.084l0.106,0.063l0.105,0.042l0.211,0.105l0.042,0.021l0.147,0.064l0.191,0.105h0.021l0.189,0.105    l12.079-76.452c-0.949-0.485-1.858-1.099-2.64-1.837l-47.306,25.406L257.53,142.643z" style="fill-rule:evenodd;clip-rule:evenodd;"></path>
</g>
</g></svg><img></span>&nbsp;​&nbsp;​Genealogía de los Altos Reyes Milesios
        </h2>
        <div class="u-carousel u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-f13b" data-interval="5000" data-u-ride="carousel">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-f13b" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-f13b" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-f13b" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-f13b" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner u-gallery-inner-1" role="listbox">
            <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="728" data-image-height="621">
                <img class="u-back-image u-expanded u-image-contain" src="images/dinastia1.PNG">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="643" data-image-height="667">
                <img class="u-back-image u-expanded u-image-contain" src="images/dinastia2.PNG">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3">
              <div class="u-back-slide" data-image-width="658" data-image-height="664">
                <img class="u-back-image u-expanded u-image-contain" src="images/dinastia3.PNG">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4">
              <div class="u-back-slide" data-image-width="467" data-image-height="538">
                <img class="u-back-image u-expanded u-image-contain" src="images/dinastia4.PNG">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-4">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-f13b" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-f13b" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
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