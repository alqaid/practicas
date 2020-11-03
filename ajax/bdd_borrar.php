<?php	
session_start();
if(isset($_SESSION['autenticado'])) {
if ($_SESSION['autenticado'] == 'sssi'){

if (isset($_GET["param"])) {	


		echo "<!----conetando-->";
		$mysqli = @new mysqli('localhost', 'root', '', 'tuinformatico');
		$mysqli->set_charset("utf8");
		if ($mysqli->connect_errno) {
			die('Connect Error: ' . $mysqli->connect_errno);
		}else{
			echo "<!----conexion ok -->";
		}
	 

		 $sql = "delete from contratos where cClave= " . $_GET["param"];

		if ($mysqli->query($sql) === TRUE) {
		  echo "Registro borrado";
		} else {
		  echo "Error: " . $sql . "<br>" . $mysqli->error;
		}

	}
}else{
	echo "1-NO conectado ";
	}

}else{
	echo "2-NO conectado ";
	}
?>