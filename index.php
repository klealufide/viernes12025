<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <?php include("components/menu.php") ?>
    <main>
        <section id="menu" class="activo">

        </section>
        <section id="orden">
            <h2>Tu orden</h2>
            <ul id="listaOrden">

            </ul>
            <p>Total: <span id="total">0</span></p>
        </section>
    </main>
    <div id="footer-container"></div>
</body>

</html>