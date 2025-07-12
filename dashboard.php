<!DOCTYPE html>
<html>

<head>
    <title>Unidad 5</title>
</head>

<body>
    <?php
    session_start();
    if (!empty($_SESSION)) { ?>
        <h1>Bienvenido <?php echo $_SESSION["name"] ?></h1>
        <a href="logout.php">Salir</a>
    <?php  } else {
        echo "No tiene permisos para ver esta pagina";
    } ?>
</body>

</html>