<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "biblioteca";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die($conn->connect_error);
} 

/*
$sql = "INSERT INTO  usuarios (usuario, clave, nombre, rol) VALUES ('trojas','123456','Tatiana','encargado')";

if($conn->query($sql)){
    echo "Registro creado exitosamente<br>";
} else {
    echo "error al agregar el registro<br>";
}
*/
/*
$sql = "SELECT * from usuarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row["id"]."-".$row["usuario"]."-".$row["clave"]."-".$row["nombre"]."-".$row["rol"]."<br>";
    }
} else {
    echo "No hay registros<br>";
}


$sql = "UPDATE usuarios SET nombre = 'Karol Leal' where id=1";

if($conn->query($sql)){
    echo "Registro actualizado exitosamente<br>";
} else {
    echo "error al actualizar el registro<br>";
}


$sql = "DELETE FROM usuarios where id=3";

if($conn->query($sql)){
    echo "Registro elimnado exitosamente<br>";
} else {
    echo "error al eliminar el registro<br>";
}
    
echo "<br>";

$clave = "123Queso";

//$hash = password_hash($clave, PASSWORD_BCRYPT);

$hash_basedatos = '$2y$10$nhZYkJ14lgJmcD0W9tru7eTXjBxKJ4X9gsH8vgpJ0A11zRvXSFOVO';

if(password_verify($clave, $hash_basedatos)){
    echo "clave valida";
} else {
    echo "clave incorrecta";
}

*/