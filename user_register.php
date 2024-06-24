<?php include 'db2.php';
        $host = "sql105.0fees.us";
        $user = "0fe_20094993";
        $pass = "apia12";
        $db = "0fe_20094993_31654";
        
    $conn = new mysqli_connect($host,$user,$pass,$db);
    $json = file_get_contents('php://input');
    $obj = json_decode($json, true);

    $name  = $obj['Name'];
    $lastname = $obj['Lastname'];
    $email = $obj['Email'];
    $pass = $obj['Password'];
    // query para saber si existe el email
    if($obj['email']!="")
	{
	
	$result= $mysqli->query("SELECT * FROM users where Email='$email'");
	
	
		if($result->num_rows>0){
			echo json_encode('email already exist');  // alert msg in react native		 		
		}
		else
		{		
		   $add = $mysqli->query("insert into users (Name,Email,Password,Lastname) values ('$name','$lastname','$email','$pass')");
			
			if($add){
				echo  json_encode('User Registered Successfully'); // alert msg in react native
			}
			else{
			   echo json_encode('check internet connection'); // our query fail 		
			}
				
		}
	}
	
	else{
	  echo json_encode('try again');
	}
?>		