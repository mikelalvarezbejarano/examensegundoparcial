<?php
    include "conexion.php";
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $usuario = $_POST['usuario'];
    $carrera = $_POST['carrera'];
    $consulta = "INSERT INTO libros (titulo, autor, ideditorial, anio, idusuario, idcarrera) VALUES ('$titulo', '$autor', '$editorial', '$anio', '$usuario', '$carrera')";
    $resultado = mysqli_query($conn, $consulta);
    if($resultado){
        echo "Libro insertado correctamente";
    }else{
        echo "Error al insertar libro";
    }