<?php

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'murialdolab'
    );

	if ($conn->connect_error) {
		die("Error en la conexión a la base de datos: " . $conn->connect_error);
	} else {
        echo "Conexion a la DATABASE exitosa";
    }
    
?>