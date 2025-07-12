<?php

require_once '../../config/db.php';

class User
{

    public static function login($usuario): array
    {
        global $conn;

        try {
            $sql = "SELECT * FROM usuarios where usuario = '$usuario'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }
}
