<?php
 
 // creando la conexion
$con = mysqli_connect('sql105.0fees.us','0fe_20094993','apia12','0fe_20094993_31654');

if($con == false){
    echo "conection fail";
}else {
    echo "conection success";
}
 
$username = $_POST['Usuario'];
$password = $_POST['Password'];
`
$sql = "SELECT * FROM `Usuarios` WHERE `Usuario` = "$username"  AND `Password` = "$password"";

$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if ($count == 1) {  
    
	echo json_encode("Success");
}else{
	echo json_encode("Error");
}   
?>