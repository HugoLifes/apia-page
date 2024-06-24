<?php
	//metemos los datos para hacer la conexion
	$db = mysqli_connect('sql105.0fees.us','0fe_20094993','apia12','0fe_20094993_31654');
	if ($db == false) {
		//si no es posible conectar
		echo "Database connection fail";
	}else{
		// si lo es
        echo "Conection Success";
    }
	
	//esperamos datos por el metodo post
   
	$username = $_POST['Usuario'];
	$password = $_POST['Password'];
	
	//hacemos el query para saber si ya existe ese user
	$sql = "SELECT * FROM Usuarios WHERE Usuario = $username";

	// buscamos
	$result = mysqli_query($db,$sql);
	// si hay o no hay un usuario igual
	$count = mysqli_num_rows($result);

	// if si valida si esta repetido
	if ($count == 1) 
		echo json_encode("Error");
	}else{
		//en cambio insertamos si no hay 
		$insert = "INSERT INTO `Usuarios`(`Usuario`,`Password`)VALUES('$username','$password')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}
	mysqli_close($db);
?>