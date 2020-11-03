<?php
session_start();
if(isset($_SESSION['autenticado'])) {
if ($_SESSION['autenticado'] == 'sssi'){


?>
	
	<table class="table table-condensed">
    <thead>
      <tr>
	  <th>Codigo</th>
        <th>Empresa</th>
        <th>Informático</th>
        <th>Puntuación</th>
      </tr>
    </thead>
    <tbody>


<?php



echo "<!----conetando-->";
$mysqli = @new mysqli('localhost', 'root', '', 'tuinformatico');
$mysqli->set_charset("utf8");
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}else{
	echo "<!----conexion ok -->";
}


$consultaSQL= "select eNombre,iNombre,cPuntuacion, cClave from contratos,empresas,informaticos 
where ceClaveEmpresas=eclave and ciClaveInformaticos=iclave order by cClave desc";
		 
if ($resultado = $mysqli->query($consultaSQL)) {
while($fila = $resultado->fetch_assoc()){

//BUCLE ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

?> 
<tr>
<?php	
          
        
echo  '<td><a href="#"  onclick="f_borrar_registro('.  $fila["cClave"] . ')"><i class="material-icons" style="font-size:30px">delete_forever</i></a></td>';
	echo  '<td>' .  $fila["cClave"] . '</td>';
	echo  '<td>' .  $fila["eNombre"] . '</td>';
	echo  '<td>' .  $fila["iNombre"] . '</td>';
	echo  '<td>' .  $fila["cPuntuacion"] . '</td>';
	
?>
	 </tr> 
  
	
<?php	
//   FIN BUCLE ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
}}
$mysqli->close();

?>
</tbody>
</table>




<?php

}else{
	echo "1-NO conectado "  ;
	}

}else{
	echo "2-NO conectado "  ;
	}
	
?>
