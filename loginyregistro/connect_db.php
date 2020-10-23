<?php


		$mysqli = new MySQLi("localhost", "id8996446_usuario","12345", "id8996446_basedatos");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
	
?>
