<?php
//  Valor de retorno
//	0: usuario introdujo mal los datos
//	1: operacion realizada satisfactoriamente
//	2: hack
//	3: ya existe en la base de datos

	if(isset($_POST['email'])){
		$dbconn = pg_connect("host=localhost port=5432 dbname=univeonl_univeonl user=univeonl_univeonl password=admin") or die ("No se pudo conectar a la Base de Datos");
		//echo "Conectado satisfactoriamente.\n";
		
		 $email_from = $_POST['email'];
		 $error_message = "";
		 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		 
		  if(!preg_match($email_exp,$email_from)) {
			 echo "0";
		  }else{
			  
			  $res = pg_insert($dbconn, 'maillist', $_POST);
			  if ($res) {
				  echo "1";
			  } else {
				  echo "3";
			  }
		  }
		pg_close($dbconn);
	}
	else
	{
		echo "2";
	}
?>
