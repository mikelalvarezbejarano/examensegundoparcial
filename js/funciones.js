
function cargarPagina(pagina){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if(ajax.readyState == 4){
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.open("get", pagina, true);
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargarPregunta3(){
    var titulo = document.getElementById("titulo");
    titulo.innerHTML = "Pregunta 3  Insertar en Ajax";
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if(ajax.readyState == 4){
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.open("get", 'formularioInsertar.php', true);
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function agregar(){
	//var imagen = document.getElementById("imagen").value;
    var titulo = document.getElementById("titulo").value;
    var autor = document.getElementById("autor").value;
    var editorial = document.getElementById("editorial").value;
    var anio = document.getElementById("anio").value;
    var usuario = document.getElementById("usuario").value;
    var carrera = document.getElementById("carrera").value;
	console.log(imagen);
	xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function(){
		if (this.readyState==4 && this.status==200){
			document.getElementById("mensaje").innerHTML=this.responseText;
		}
	};
	
	var parametros="titulo="+titulo+"&autor="+autor+"&editorial="+editorial+"&anio="+anio+"&usuario="+usuario+"&carrera="+carrera;
	xhttp.open("POST","insertar.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(parametros);
}

function conFetch(abrir) {    
	var contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function cargarCantidad(){
    var numero = document.getElementById("numero").value;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if(ajax.readyState == 4){
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.open("get", 'introducir.php?numero='+numero, true);
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function mostrarResultado(){
    var sumaTotal = 0;
    var cantidad = document.getElementById("numero").value;
    for(var i=0; i<cantidad; i++){
        sumaTotal += parseInt(document.getElementById("n"+i).value);
    }
    
    var resultado = document.getElementById("resultado");
    resultado.innerHTML = "El resultado es: "+sumaTotal;
}
