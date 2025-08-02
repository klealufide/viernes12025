<!DOCTYPE html>
<html lang="es">


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
    <h2>Gestión de Menú</h2>

    <form id="menuForm">
        <input type="hidden" name="id" id="id">
        <input type="text" name="name" id="name" placeholder="Nombre" required>
        <input type="text" name="description" id="description" placeholder="Descripción" required>
        <input type="text" name="image" id="image" placeholder="URL de Imagen" required>
        <input type="number" step="0.01" name="price" id="price" placeholder="Precio" required>
        <button type="submit">Guardar</button>
        <button type="reset" id="cancelEdit" style="display:none;">Cancelar</button>
    </form>

    <div id="menuResult"></div>

    <h3>Lista de Productos</h3>
    <table border="1" cellpadding="5" cellspacing="0" id="menuTable">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div id="footer-container"></div>

</body>

</html>