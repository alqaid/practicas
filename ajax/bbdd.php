<!DOCTYPE html>
<html>
<head>
<title>AJAX</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		<!-- ICONOS REFERENCIA https://www.w3schools.com/icons/icons_reference.asp  -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		
		 <link rel="stylesheet" src="estilo.css">
		
		<!-- FUNCIONES AJAX -->
		<script src="ajax_acciones.js"></script>
		
</head>
<body>


<div id="contenedor" class="container">
<!-----------  NAVEGADOR ---------------------------------------------------------------------->
<?php
	require 'navegador.php';
?>
<!-- ------------FIN-NAVEGADOR---------------------------------------------------------------- -->

	<div class="row">
		<div class="col "  ><div class="p-3 border bg-light">
			<h4>Acciones BBDD MySQL</h4>
			<button onclick="f_autenticar_bbdd()" type="button" class="btn btn-outline-secondary">Autenticar</button> 
			<button onclick="f_leer_bbdd()" type="button" class="btn btn-outline-secondary">leer bbdd</button>
			<button type="button" class="btn btn-outline-secondary">insertar</button>
			<button type="button" class="btn btn-outline-secondary">modificar</button>
			
			<div id="resultadomsg"></div>
			<div id="resultado"></div>
			
		</div></div>
		 
		
	</div >

</div >


	
<!-- ------------paneles---------------------------------------------------------------- -->
	 <!-- The Modal -->
  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="f_cancel_accion();">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"  >
           <div   id='modal1_texto'>texto</div>        
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="f_borrar_bbdd();">Borrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
	
<!-- -----------FIN -paneles---------------------------------------------------------------- -->
	
</body>
</html>