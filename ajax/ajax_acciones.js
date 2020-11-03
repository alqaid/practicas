var variableBorrar=0;

function f_autenticar_bbdd() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
      document.getElementById("resultadomsg").innerHTML = this.responseText;	   
	  console.log("autenticado");
    }
  };
  xhttp.open("GET", "sesion.php", true);
  xhttp.send();
}


function f_leer_bbdd() {
 
	
	
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
      document.getElementById("resultado").innerHTML = this.responseText;	   
	   console.log(23);
    }
  };
  xhttp.open("GET", "bdd_leer.php", true);
  xhttp.send();
}

function f_borrar_registro(clave) {
  variableBorrar=clave;
  console.log("variableBorrar " + variableBorrar );
  
  document.getElementById("resultadomsg").innerHTML = "";
  document.getElementById('myModal1').style.display='block';

  document.getElementById('modal1_texto').innerHTML = "Borrar " + clave;

  // $("body").addClass("modal-open");
    document.getElementById('myModal1').style.opacity=1;
	document.getElementById('contenedor').style.opacity=0.3;

 
}

function f_borrar_bbdd() {
	console.log("se va a borrar variableBorrar " + variableBorrar );
    document.getElementById('myModal1').style.display='none';	
	document.getElementById('contenedor').style.opacity=1;
	
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	  console.log("borrado " + variableBorrar);
	  
      document.getElementById("resultadomsg").innerHTML = this.responseText;	   
	  f_leer_bbdd();
    }
  };
  xhttp.open("GET", "bdd_borrar.php?param=" + variableBorrar, true);
  xhttp.send();
}

function f_cancel_accion(){
	document.getElementById("resultadomsg").innerHTML = "";
	document.getElementById('myModal1').style.display='none';	
	document.getElementById('contenedor').style.opacity=1;
}