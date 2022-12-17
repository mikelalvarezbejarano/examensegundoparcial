<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include "conexion.php";
        $sql = "SELECT * FROM editoriales";
        $result = mysqli_query($conn, $sql);
    ?>
    <form action="javascript:agregar()" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor">
        <br>
        <label for="editorial">Editorial:</label>
        <select name="editorial" id="editorial">
            <?php
                while($fila = mysqli_fetch_array($result)){
                    echo "<option value='".$fila['id']."'>".$fila['editorial']."</option>";
                }
            ?>
        </select>
        <br>
        <label for="anio">Año: </label>
        <input type="text" name="anio" id="anio">
        <br>
        <label for="usuario">Usuario</label>
        <select name="usuario" id="usuario">
            <?php
                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conn, $sql);
                while($fila = mysqli_fetch_array($result)){
                    echo "<option value='".$fila['id']."'>".$fila['usuario']."</option>";
                }
            ?>
        </select><br>
        
        <label for="carrera">Carrera</label>
        <select name="carrera" id="carrera">
            <?php
                $sql = "SELECT * FROM carreras";
                $result = mysqli_query($conn, $sql);
                while($fila = mysqli_fetch_array($result)){
                    echo "<option value='".$fila['id']."'>".$fila['carrera']."</option>";
                }
            ?>
        </select>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>