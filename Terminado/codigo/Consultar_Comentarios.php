<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Famous Fashion Photographers">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
	
    <title>CONSULTAR COMENTARIOS</title>
	
    <link rel="stylesheet" href="nicepage.css" media="screen">
	<link rel="stylesheet" href="Principal.css" media="screen">
	
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
	
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
	
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
          
    <script type="application/ld+json">
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
	
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Principal">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Principal">
    <meta property="og:type" content="website">
	
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
			
				<p class="u-align-left u-text u-text-1">COMENTARIOS DE LA GENTE ACERCA DE LA PÁGINA</p>
			
			
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
			
			<h1 class="u-align-left u-text u-text-1"> Has iniciado sesión como <?php echo $user ?>, estás en la sección de comentarios. </h1>
			
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
		  
	  <br>
	  
    <section class="u-clearfix u-section-1" id="carousel_a077">
			
						
		<?php 
			
						
			include "private/datos.php";
						
			$conn = @mysqli_connect($host, $usuario, $password, $basedatos);
							
			$sql = "SELECT * FROM usuario INNER JOIN frases USING(ID_Usuario);";
			
			$resultado = mysqli_query($conn, $sql);
			
		?>
							
			<fieldset class="fieldset2">
		
				<br>
		
			<!-- TABLA DE LOS REGISTROS -->
										
							<table style="background-color:#D8BFD8; margin: 0 auto; border:1px solid black;">
										
								<tr>
								
									<th style="background-color:#D8BFD8; border:1px solid black;"> Usuario </th>
											
									<th style="background-color:#D8BFD8; border:1px solid black;"> Comentario </th>
																														
								</tr>
											
					<?php
											
						while ($registro = mysqli_fetch_assoc($resultado))
							
						{ /* APERTURA DE 1ยบ WHILE */
					
					?>
												
						<!-- LLAMAMOS A LOS REGISTROS -->
												
								<tr>
								
									<td style="background-color:#FFC0CB; width:160px; border:1px solid black;"> <?php echo $registro['Nombre_Real'] ?> </td>
												
									<td style="background-color:#AFEEEE; width:950px; border:1px solid black;"> <?php echo $registro['Texto'] ?> </td>
													
																			
								</tr>

					<?php
											
						} /* CIERRE DE 1ยบ WHILE */
											
					?>
											
							</table>	
			
				<br>
			
			</fieldset>
			
		<br>
			
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
     
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b948">
	
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
		
			<p class="u-small-text u-text u-text-variant u-text-1">En ésta página nos gusta ver la historia desde&nbsp; una perspectiva neutral y intentamos dar al usuario la posibiliad de acceder a un mundo de conocimiento de una manera amigable.</p>
			
			<p class="u-small-text u-text u-text-variant u-text-1"> <a href="Condiciones.html" target="_blank">Política de Privacidad</a></p>
			
			<p class="u-small-text u-text u-text-variant u-text-1">©2021 | UnOff Emsite | The UnOfficial History Website - Search </p>
			
		</div>
		
	</footer>
	  		
  </body>
</html>