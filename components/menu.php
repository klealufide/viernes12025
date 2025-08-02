<?php
session_start();
$loginIn = $_SESSION["username"] ?? '' != '' ? true : false;
?>

<header>
    <h1>Restaurante</h1>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="orden.php">Orden</a>
        <?php if (!$loginIn) { ?><a href="login.php">Login</a> <?php  } ?>
        <?php if (!$loginIn) { ?><a href="register.php">Registro</a> <?php  } ?>
        <?php if ($loginIn) { ?><a href="dashboard.php">Dashboard</a> <?php  } ?>
        <?php if ($loginIn) { ?><a href="menu.php">Mantenimiento Menu</a><?php  } ?>
        <?php if ($loginIn) { ?><a href="logout.php">Salir</a> <?php  } ?>
    </nav>
</header>