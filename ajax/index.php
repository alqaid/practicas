<!DOCTYPE html>
<html>
<head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Add icon library -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		
<!-- ICONOS REFERENCIA https://www.w3schools.com/icons/icons_reference.asp  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<body>


<div class="container">
<!-----------  NAVEGADOR ---------------------------------------------------------------------->

	<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="bdd_leer.php">Leer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bdd_insertar.php">Insertar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bdd_borrar.php">Borrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bdd_modificar.php">Modificar</a>
  </li>
</ul>
<!--------------FIN-NAVEGADOR------------------------------------------------------------------>

<h2>The XMLHttpRequest Object</h2>
<div class="container">
	<div class="row">
		<div class="col-sm-6"  >
			<div id="celda1">SUSTITUIR AQUÍ TEXTO</div>
			<button id="celda1btn1" style="visibility:visible;" type="button" onclick="f_celda1btn1()">mostrar .txt</button> 
			<button id="celda1btn2" style="visibility:hidden;" type="button" onclick="f_celda1btn2()">ocultar .txt</button> 
		</div>
		<div class="col-sm-6"  >
		</div>
		
	</div >
	<div class="row">
		<div class="col-sm-6"  >
		</div>
		<div class="col-sm-6"  >
		</div>
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
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("celda1").innerHTML = "SUSTITUIR AQUÍ TEXTO";	   
	  document.getElementById("celda1btn1").style.visibility = 'visible';
	  document.getElementById("celda1btn1").style.display = '';
	  document.getElementById("celda1btn2").style.visibility = 'hidden';
	  document.getElementById("celda1btn2").style.display = 'none';
    }
  };
  xhttp.open("GET", "texto.txt", true);
  xhttp.send();
}
</script>

</body>
</html>
