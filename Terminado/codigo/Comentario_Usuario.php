<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
	
    <title> COMENTARIOS </title>
	
    <link rel="stylesheet" href="nicepage.css" media="screen">
	<link rel="stylesheet" href="Registro.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
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
    <meta name="twitter:title" content="Registro">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Registro">
    <meta property="og:type" content="website">
	
  </head>
  
  <body class="u-body">
	
		<?php

		/* Recupero la sesión actual. */
		session_start();
		
		include "Funciones.php";
		
		
		/* Compruebo si hay algún usuario registrado en la sesión. */
			
		if ( isset($_SESSION["Usuario"]) ) 
		{ /* APERTURA 1º IF */
			
			$user  = $_POST["Usuario"];
			
			?>
			
  <header class="u-align-center-sm u-align-center-xs u-clearfix u-grey-80 u-header u-header" id="sec-ce7d"><div class="u-clearfix u-sheet u-sheet-1">
  		
      <div class="u-section-rows">
  
        <div class="u-align-center-xs u-grey-80 u-section-row u-section-row-1" id="sec-b03b">
		
          <div class="u-clearfix u-sheet u-sheet-1">
		  
            <div class="u-social-icons u-spacing-10 u-social-icons-1">
			
              <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7d08"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7d08"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
              </a>
			  
              <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/?lang=ES"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-de91"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-de91"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
              </a>
			  
              <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-15de"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-15de"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
              </a>
			  
            </div>
			
            <p class="u-align-left u-text u-text-1">COMENTARIOS ACERCA DE LA PÁGINA</p>
			
			<form class="navbar-form navbar-right" method="post" action="logout.php" role="form">
						
				<button  class="u-btn u-btn-submit u-button-style"> Cerrar Sesión </button>  
				
			</form>			
			
			<br>
			
          </div>
           
		<br>
		
        </div>
		
        <div class="u-align-center-xs u-section-row u-section-row-2" id="sec-71fa">
		
          <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-2">
		  

			
			<br>
				
			<fieldset class="u-align-center-xs u-section-row u-section-row-2" style="background-color:;" id="sec-71fa">	
			
				<h4 style="text-align:center;"> Tu sesión iniciada con <?php echo $user ?> ha registrado con éxito el comentario, gracias por tu opinión. </h4>
			
			</fieldset>
			
          </div>
                 
        </div>
		
        <div class="u-grey-5 u-section-row u-section-row-3" id="sec-13b1">
		
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-3">
		  
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
			
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
			  
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
                  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></symbol></defs></svg>
                </a>
				
              </div>
			  
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
				
				<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Principal.php" style="padding: 10px 20px;">Principal</a> </li>
				
				<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Dinastía.php" style="padding: 10px 20px;">Dinastía</a> </li>
				
				<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Conquistas.php" style="padding: 10px 20px;">Conquistas</a> </li>
				
				<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Un-Hogar.php" style="padding: 10px 20px;">Un Hogar</a> </li>
				
				</ul>
				
              </div>
			  
              <div class="u-custom-menu u-nav-container-collapse">
			  
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
				
                  <div class="u-inner-container-layout u-sidenav-overflow">
				  
                    <div class="u-menu-close"> </div>
					
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Principal.php" style="padding: 10px 20px;">Principal</a></li>
					
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Dinastía.php" style="padding: 10px 20px;">Dinastía</a></li>
					
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Conquistas.php" style="padding: 10px 20px;">Conquistas</a></li>
					
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Un-Hogar.php" style="padding: 10px 20px;">Un Hogar</a></li>
					
					</ul>
					
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
          
          
          
          
          
        </div>
		
      </div>
	  
	  </header>
	  	  
	  	  		
		<?php 
		
		/* Recupero el nombre de usuario y actúo normalmente. */
			
			$user = $_SESSION["Usuario"];	
	
		/* Primero comprobaré como siempre si tengo datos para registrar o si por el contrario, he llegado a este script cargando directamente la página. */
		
		if ( isset($_POST["guardar"]) ) 
					
		{ /* APERTURA 2º IF */
			
			/* He llegado a este script a través del formulario. */
																
				/* Conecto con la base de datos. */
				
					include "private/datos.php";
					
					$conn = @mysqli_connect($host, $usuario, $password, $basedatos) or die("ERROR. No se pudo conectar a la base de datos.");
	
				/* Intento insertar el id de alguna manera */
	
					// esto no es lo que era pero en esto va $ID = mysqli_insert_id($conn); --- $usuario = $_POST["Usuario"]; 
			        // rescatas en una variable el valor del input hidden de la pagina anterior que, gracias al echo, tiene almacenado el usuario
					   
			        $usuario = $_POST["Usuario"];
					$Texto = $_POST["Texto"];
			
			/* hacemos una primera consulta en la que le preguntas a la tabla: Dame el id del usuario cuando usuario sea igual al usario que en pasado......en cristiano...le dices que te de id del usuario que hay almacenado en la variable y que rescatate con el input hidden. */
			
			       $sql = "SELECT usuario.ID_Usuario FROM usuario WHERE usuario.Usuario ='$usuario';";
			
			//lo almacenas en una variable
			
			       $resultado = mysqli_query($conn, $sql);
				   
			         //haces un bucle para ver todos los resultados del campo id_usuario de la tabla que te ofrece la consulta y los resultados los almacena en la variable de $ID_Usuario. Ten en cuenta que este bucle solo devolverá un resultado...ya que la consulta solo devuelve un id que es el del usuario...por lo tanto la variable $ID_Usuario será igual
			        
			        while($fila = mysqli_fetch_assoc($resultado))
						
					{ /*APERTURA 1º WHILE */
						
						$ID_Usuario = $fila["ID_Usuario"];
						
					} /* CIERRE 1º WHILE */

				
				/* Ejecuto la consulta. */
			//en la consulta metes la variable anteriormente dada
										
					$sql2 = "INSERT INTO `frases`(`ID_Usuario`, `Texto`) VALUES ($ID_Usuario, '$Texto');";
					
					$resultado2 = mysqli_query($conn, $sql2);
				
				if ( $resultado ) 
				
				{ /* APERTURA 3º IF */
					
					?>
						
					<fieldset class="fieldset1">
					
						<p class="u-small-text u-text u-text-variant u-text-1"> Se añadió con éxito tu comentario. </p>
									
						<p class="u-small-text u-text u-text-variant u-text-1"> Si desea añadir más comentarios acceda a través del siguiente enlace. </p>
						<p class="u-small-text u-text u-text-variant u-text-1"> Tus <a href="Comentarios.php"> Opiniones </a> nos importan . </p>
						
						<p class="u-small-text u-text u-text-variant u-text-1"> Volver a <a title="CONTENIDO" href="Principal.php"> Página Principal </a> para continuar la lectura. </p>
						
					</fieldset>		
														
					<?php
					
				} /* CIERRE 3º IF */ 
				
				else 
				
				{ /* APERTURA 2º ELSE */
					
					?>
					
					<fieldset class="fieldset1">
					
						<p> ERROR. Se produjo un fallo en el registro del comentario. </p>
						
					</fieldset>	
					
					<?php
					
				} /* CIERRE 2º ELSE */  
				
				mysqli_close($conn);
					
		} /* CIERRE 2º IF */
	
		else 
		
		{ /* APERTURA 3º ELSE */
			
			/* Es una entrada directa en el script. */
			
			?>
			
				<fieldset class="fieldset1">
				
					<p> ERROR. No se pudo guardar, volver a <a href="Formulario_Login.html"> Formulario de Login </a> . </p>
				
				</fieldset>
				
			<?php
			
		} /* CIERRE 3º ELSE */  
		
	} /* CIERRE 2º IF */	
	
		else 
		
		{ /* APERTURA 1º ELSE */
			
			/* Es una entrada directa en el script. */
			
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
     
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6a40">
	
		<div class="u-clearfix u-sheet u-sheet-1">
		
			<p class="u-small-text u-text u-text-variant u-text-1">Términos y Condiciones de Servicio</p>
			<p class="u-small-text u-text u-text-variant u-text-1"> <a href="Condiciones.html" target="_blank">Política de Privacidad</a></p>
				
			<p class="u-small-text u-text u-text-variant u-text-1">©2021 | UnOff Emsite | The UnOfficial History Website - Search </p>
			
		</div>
		
	</footer>
	
	</body>

</html>