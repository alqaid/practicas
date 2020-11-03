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
		
		<!-- otros -->
</head>
<body>


<div class="container">
<!-----------  NAVEGADOR ---------------------------------------------------------------------->
<?php
	require 'navegador.php';
?>
<!-- ------------FIN-NAVEGADOR---------------------------------------------------------------- -->

<!--  ESTRUCTURA COLUMNA
<div class="row mx-md-n5">
  <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
  <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
</div>
-->

<h2>The XMLHttpRequest Object</h2>
<div class="container">
	<div class="row mx-md-n5">
		<div class="col px-md-5  "  ><div class="p-3 border bg-light">
			<p>propiedades get ... https://www.w3schools.com/js/js_ajax_http.asp</p>
			<div id="celda1">SUSTITUIR AQUÍ TEXTO</div>
			<button id="celda1btn1" style="visibility:visible;" type="button" onclick="f_celda1btn1()">mostrar .txt</button> 
			<button id="celda1btn2" style="visibility:hidden;" type="button" onclick="f_celda1btn2()">ocultar .txt</button> 
		</div></div>
		<div class="col px-md-5"  ><div class="p-3 border bg-light">
			<p>propiedades get PHP</p>
			<div id="celda2">SUSTITUIR AQUÍ TEXTO POR PHP</div>
			<button id="celda2btn1" style="visibility:visible;" type="button" onclick="f_celda2btn1()">mostrar .php</button> 
			<button id="celda2btn2" style="visibility:hidden;" type="button" onclick="f_celda2btn2()">ocultar .php</button> 

		</div></div>
		
	</div >
	<div class="row "><br></div >
	<div class="row mx-md-n5">
		<div class="col px-md-5 "  ><div class="p-3 border bg-light">
			<p>propiedades get MYSQL...  </p>
			<div id="celda3">SUSTITUIR AQUÍ TEXTO</div>
			<button id="celda3btn1" style="visibility:visible;" type="button" onclick="f_celda3btn1()">leer mysql</button> 
			<button id="celda3btn2" style="visibility:hidden;" type="button" onclick="f_celda3btn2()">ocultar</button> 

		</div></div>
		<div class="col px-md-5"  ><div class="p-3 border bg-light">
		</div></div>
	</div>
</div>
</div>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->

<script>
function f_celda1btn1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("celda1").innerHTML = this.responseText;	   
	  document.getElementById("celda1btn1").style.visibility = 'hidden';
	  document.getElementById("celda1btn1").style.display = 'none';
	  document.getElementById("celda1btn2").style.visibility = 'visible';
	  document.getElementById("celda1btn2").style.display = '';
    }
  };
  xhttp.open("GET", "texto.txt", true);
  xhttp.send();
}
function f_celda1btn2() {
   
      document.getElementById("celda1").innerHTML = "SUSTITUIR AQUÍ TEXTO";	   
	  document.getElementById("celda1btn1").style.visibility = 'visible';
	  document.getElementById("celda1btn1").style.display = '';
	  document.getElementById("celda1btn2").style.visibility = 'hidden';
	  document.getElementById("celda1btn2").style.display = 'none';
	
}
function f_celda2btn1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("celda2").innerHTML = this.responseText;	   
	  document.getElementById("celda2btn1").style.visibility = 'hidden';
	  document.getElementById("celda2btn1").style.display = 'none';
	  document.getElementById("celda2btn2").style.visibility = 'visible';
	  document.getElementById("celda2btn2").style.display = '';
    }
  };
  xhttp.open("GET", "leer1.php", true);
  xhttp.send();
}
function f_celda2btn2() {
  
      document.getElementById("celda2").innerHTML = "SUSTITUIR AQUÍ TEXTO";	   
	  document.getElementById("celda2btn1").style.visibility = 'visible';
	  document.getElementById("celda2btn1").style.display = '';
	  document.getElementById("celda2btn2").style.visibility = 'hidden';
	  document.getElementById("celda2btn2").style.display = 'none';
   
}

function f_celda3btn1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("celda3").innerHTML = this.responseText;	   
	  document.getElementById("celda3btn1").style.visibility = 'hidden';
	  document.getElementById("celda3btn1").style.display = 'none';
	  document.getElementById("celda3btn2").style.visibility = 'visible';
	  document.getElementById("celda3btn2").style.display = '';
    }
  };
  xhttp.open("GET", "bdd_leer.php", true);
  xhttp.send();
}
function f_celda3btn2() {
  
      document.getElementById("celda3").innerHTML = "SUSTITUIR AQUÍ TEXTO";	   
	  document.getElementById("celda3btn1").style.visibility = 'visible';
	  document.getElementById("celda3btn1").style.display = '';
	  document.getElementById("celda3btn2").style.visibility = 'hidden';
	  document.getElementById("celda3btn2").style.display = 'none';
   
}
</script>

</body>
</html>
