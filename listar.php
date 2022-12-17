<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "conexion.php";
        $consulta = "SELECT * FROM libros INNER JOIN editoriales ON libros.ideditorial = editoriales.id INNER JOIN usuarios ON libros.idusuario = usuarios.id INNER JOIN carreras ON libros.idcarrera = carreras.id";
        $resultado = mysqli_query($conn, $consulta);
    ?>

    <table border="1" cellspacing="0">
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Año</th>
            <th>Usuario</th>
            <th>Carrera</th>
        </tr>
l
        <?php while($registros = mysqli_fetch_array($resultado)){?>
            <tr>
                <td><img src="C:\xampp\htdocs\segundoparcial\imagen/<?php echo $registros['imagen'];?>" alt=""></td>
                <td><?php echo $registros['titulo']; ?></td>
                <td><?php echo $registros['autor']; ?></td>
                <td><?php echo $registros['ideditorial']; ?></td>
                <td><?php echo $registros['anio']; ?></td>
                <td><?php echo $registros['idusuario']; ?></td>
                <td><?php echo $registros['idcarrera']; ?></td>
            </tr>
        <?php } ?>        
    </table>
</body>
</html>