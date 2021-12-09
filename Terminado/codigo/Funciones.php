<?php

/* Es una función que comprueba la existencia de un usuario en la base de datos. Si el usuario existe, se devuelve su contraseña para poder ser analizada. En caso contrario, se devuelve false indicando que el usuario no existe en la base de datos. La función ejecuta un select con el usuario y analiza cuántos registros se obtienen. Cero significa que el usuario no existe y como máximo se puede obtener uno. */
function comprobarUsuario($user){
	
	/* Empezaremos por conectar a la base de datos. */
	include "private/datos.php";
	$conn = mysqli_connect($host, $usuario, $password, $basedatos) or die("ERROR. No se pudo conectar a la base de datos.");
	
	/* Ejecutamos la consulta. */
	$sql = "SELECT `Password` FROM `usuario` WHERE `usuario`='$user';";
	$resultado = mysqli_query($conn, $sql);
	
	/* Compruebo cuántos registros he obtenido al ejecutar la consulta. */
	$total = mysqli_num_rows($resultado);
	if ( $total==0 ) 
	
	{
		
		/* El usuario no existe. Cierro la conexión y devuelvo false. */
		mysqli_close($conn);
		return false;
		
	} 
	
	else 
	
	{
		
		/* El usuario existe. Leo la contraseña, cierro la conexión y devuelvo la contraseña. Recordemos que en el resultado de la consulta sólo existe un registro (y de hecho también sólo un campo). */
		$registro = mysqli_fetch_assoc($resultado);
		$pass = $registro["Password"];
		mysqli_close($conn);
		return $pass;
		
	}
	
}


/* Esta es una función para encriptar una contraseña con el método Blowfish. Recibe como argumento una contraseña normal y la devuelve encriptada. */
function encriptarPass($pass) {
	
	/* Lo más sencillo es utilizar el método crypt(). Requiere la utilización de lo que se conoce como sal (salt), que es uno de los requisitos de Blowfish. Esta sal empieza por $2y$, seguida de un número entre 04 y 31 y una cadena que hace de salt entre símbolos de dólar. */
	$numero = "08";
	$fecha = time();
	$cadena = uniqid((string)$fecha, true);
	$salt = "$2y$" . $numero . "$" . $cadena . "$";
	$passEncriptada = crypt($pass, $salt);
	
	return $passEncriptada;
}

?>