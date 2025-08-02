$(function () {
    $("#footer-container").load('components/footer.html');
    const menu = [
        { id: 1, nombre: "Casado con pollo", precio: 3500 },
        { id: 2, nombre: "Hamburguesa con papas", precio: 5000 },
    ];

    let orden = [];

    function getMenu() {
        $("#menu").empty().append("<h2>Menu del dia</h2>");
        menu.forEach((plato) => {
            $("#menu").append('<div class="card"><h3>' + plato.nombre + "</h3><p>Precio: " + plato.precio + "</p><button class='agregar' data-id='" + plato.id + "'>Agregar</button></div>"
            );
        })
    }

    getMenu();

    $(".agregar").on("click", function () {
        const id = $(this).data('id');
        const plato = menu.find(p => p.id === id);
        if (plato) {
            orden.push(plato);
            actualizarOrden();
        }
    })


    function actualizarOrden() {
        $("#listaOrden").empty();
        let total = 0;
        orden.forEach(item => {
            $("#listaOrden").append('<li>' + item.nombre + " - " + item.precio + "</li>");
            total += item.precio;
        })
        $("#total").text(total);
    }

    $('#login-form').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: 'router.php?action=login',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    $('#login-form')[0].reset();
                    $('#loginResult').text('Login Okay');
                    setTimeout(function () {
                        window.location.href = 'dashboard.php';
                    }, 1000);
                } else {
                    $('#loginResult').text(response.message || 'Error en el login');
                }
            },
            error: function () {
                $('#loginResult').text('Error de conexión con el servidor');
            }
        });
    });


    $('#register-form').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: 'router.php?action=register',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    $('#registerResult').text('Se registro correctamente');
                    $('#register-form')[0].reset();
                    setTimeout(function () {
                        window.location.href = 'login.php';
                    }, 1000);
                } else {
                    $('#registerResult').text(response.message || 'Error en el registro');
                }
            },
            error: function () {
                $('#registerResult').text('Error de conexión con el servidor');
            }
        });
    });


    $('#menuForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        let action = $('#id').val() ? 'updateMenu' : 'createMenu';

        $.post(`router.php?action=${action}`, formData, function (response) {
            if (response.status === 'success') {
                $('#menuResult').text('Guardado correctamente');
                $('#menuForm')[0].reset();
                $('#cancelEdit').hide();
                fetchMenu();
            } else {
                $('#menuResult').text(response.message || 'Error al guardar');
            }
        }, 'json');
    });


    $('#cancelEdit').click(function () {
        $('#menuForm')[0].reset();
        $('#id').val('');
        $(this).hide();
    });


});
    fetchMenu();
function fetchMenu() {
    $.get('router.php?action=listMenu', function (response) {
        let rows = '';
        response.data.forEach(item => {
            rows += `
                <tr>
                    <td>${item.name}</td>
                    <td>${item.description}</td>
                    <td><img src="${item.image}" alt="img" width="60"></td>
                    <td>₡${item.price}</td>
                    <td>
                        <button onclick="editMenu(${item.id})">Editar</button>
                        <button onclick="deleteMenu(${item.id})">Eliminar</button>
                    </td>
                </tr>`;
        });
        $('#menuTable tbody').html(rows);
    }, 'json');
}

function editMenu(id) {
    $.get(`router.php?action=showMenu&id=${id}`, function (response) {
        if (response.status === 'success') {
            let item = response.data;
            $('#id').val(item.id);
            $('#name').val(item.name);
            $('#description').val(item.description);
            $('#image').val(item.image);
            $('#price').val(item.price);
            $('#cancelEdit').show();
        }
    }, 'json');
}


function deleteMenu(id) {
    if (confirm('¿Estás seguro de eliminar este producto?')) {
        $.post('router.php?action=deleteMenu', { id }, function (response) {
            if (response.status === 'success') {
                fetchMenu();
            } else {
                alert(response.message || 'Error al eliminar');
            }
        }, 'json');
    }
}