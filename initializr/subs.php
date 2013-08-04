<!DOCTYPE html>

<head>

<title>UniveOnline - Comunidad de Aprendizaje</title>
<script  type="text/javascript">

</script>

</head>

<body>
<?php
	if(isset($_POST['email'])){
	
		$dbconn = pg_connect("host=localhost port=5432 dbname=univeonl_univeonl user=univeonl_univeonl password=admin") or die ("No se pudo conectar a la Base de Datos");
		echo "Conectado satisfactoriamente.\n";
		
		 $email_from = $_POST['email'];
		 $error_message = "";
		 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		 
		  if(!preg_match($email_exp,$email_from)) {
			  $error_message .= 'The Email Address you entered does not appear to be valid.';
		  }else{
			  
			  $res = pg_insert($dbconn, 'maillist', $_POST);
			  if ($res) {
				  echo "POST data is successfully logged\n";
			  } else {
				  echo "User must have sent wrong inputs\n";
			  }
		  }
		pg_close($dbconn);
	}
?>
</body>

</html>