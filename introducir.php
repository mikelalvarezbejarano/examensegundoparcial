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
        $numero = $_GET['numero'];
    ?>

    <form action="javascript:mostrarResultado()">
        <input type="hidden" name="numero" value="<?php echo $numero; ?>" id="numero">
        <?php for ($i = 0; $i < $numero; $i++) { ?>
            <input type='number' name='n<?php echo $i; ?>' id='n<?php echo $i; ?>'>
            <br>
        <?php } ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>