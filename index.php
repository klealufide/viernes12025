<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4</title>
</head>

<body>
    <h1>Unidad 4</h1>
    <?php
    $espacio = "<br>";
    /*
    echo "<h2>Hola semana 6!</h2>";

    $nombre = "Karol Leal";
    $edad = "35";
    $edad2 = "10";
    $altura = 1.58;
    $esEstudiante = false;
 
    echo $edad + $edad2 . $espacio;


    echo $nombre . $edad . $espacio;

    $edadMayor = 18;
    echo "-----------------------------  CONDICIONALES Y OPERADORES --------------------------------";
    if ($edad >= $edadMayor) {
        echo "Mayor de edad" . $espacio;
    } else {
        echo "es menor de edad" . $espacio;
    }

    if ($edad > $edadMayor) {
        echo "Mayor de edad" . $espacio;
    } elseif ($edad == 18) {
        echo "Tiene 18" . $espacio;
    } else {
        echo "es menor de edad" . $espacio;
    }

    if ($edad >= $edadMayor) {
        if ($esEstudiante) {
            echo "Mayor de edad y es estudiante" . $espacio;
        } else {
            echo "Mayor de edad pero no es estudiante" . $espacio;
        }
    } else {
        if ($esEstudiante) {
            echo "es menor de edad y estudiante" . $espacio;
        } else {
            echo "es menor de edad y no es estudiante" . $espacio;
        }
    }

    // and or !
 echo "-----------------------------  and or ! --------------------------------";
    if($edad >= $edadMayor && $esEstudiante){
        echo "Es mayor de edad y ademas es estudiante".$espacio;
    }

    if($edad < $edadMayor && $esEstudiante){
        echo "Es menor de edad y ademas es estudiante".$espacio;
    }

   
    if($edad >= $edadMayor || $esEstudiante){
        echo "O es mayor de edad o es estudiante".$espacio;
    } 

    if(!$esEstudiante){
        echo "Entra por que no es estudiante <br>";
    }
    echo "-----------------------------  switch--------------------------------";

    $semaforo = "rosado";

    switch ($semaforo) {
        case 'verde':
            echo "Siga!" . $espacio;
            break;
        case 'rojo':
            echo "Detengase!" . $espacio;
            break;
        case 'amarillo':
            echo "Tenga cuidado!" . $espacio;
            break;

        default:
            echo "Color no definido" . $espacio;
            break;
    }

    $a = 5;
    $b = "5";
    //son iguales en valor?
    if($a == $b){
        echo "a y b son de valor igual <br>";
    }

    /// a y b son iguales en valor y en tipo?

    if($a === $b){
        echo "a y b son de valor y en tipo igual <br>";
    }

    // A y b son diferente en valor

    if($a != $b){
         echo "a y b son diferentes en valor <br>";
    }

    // a y b son diferentes en valor o tipo
    if($a !== $b){
         echo "a y b son diferentes en valor o en tipo <br>";
    }

    $contador = 0;

    while($contador < 5){
        $contador++;
        echo $contador.$espacio;
    }

    do {
        $contador++;
        echo $contador.$espacio;
    } while($contador < 5);

    for($i = 0; $i <=10; $i++){
        echo $i.$espacio;
    }

    */
    // Indexado
    $listaFrutas = ["melon", "pera", "banano"];

    print_r($listaFrutas);
    echo $espacio;
    $listaFrutas = array("melon", "pera", "banano");
    print_r($listaFrutas);
    echo $espacio;


    echo $listaFrutas[5];
    echo $espacio;
    //Asociativo


    $persona = ["nombre" => "Karol", "edad" => 35, "altura" => 1.60, "esEstudiante" => false];
    $persona2 = ["nombre" => "Maria", "edad" => 20, "altura" => 1.50, "esEstudiante" => true];
    $persona3 = ["nombre" => "Rodrigo", "edad" => 23, "altura" => 1.80, "esEstudiante" => true];
    $persona4 = ["nombre" => "Pablo", "edad" => 29, "altura" => 1.75, "esEstudiante" => true];
    print_r($persona);
    echo $espacio;
    foreach ($listaFrutas as $posicion => $fruta) {
        if ($posicion == 0) {
            echo $posicion . ": " . $fruta . $espacio;
        }
        echo $espacio;
        if ($fruta == "banano") {
            echo "Posicion de banano es " . $posicion;
            echo $espacio;
        }
    }

    echo "La posicion segun la funcion integrada de banano es: " . array_search("banano", $listaFrutas);
    echo $espacio;
    $listaPersonas  = [$persona, $persona2, $persona3];

    print_r($listaPersonas);
    echo $espacio;
    echo $listaPersonas[2]["nombre"];
    array_push($persona4, "manzana");
    array_push($listaPersonas, $persona4);
    print_r($listaPersonas);
    foreach ($listaPersonas as $index => $persona) {
        if ($persona["esEstudiante"]) {
            echo $index . ": " . $persona["nombre"] . $espacio;
        }
    }


    function calculadora($a, $b, $operador)
    {
        switch ($operador) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b == 0) {
                    return "Error: Division entre cero.";
                }
                return $a / $b;
            default:
                return "Operador no valido.";
        }
    }


    echo calculadora(10, 5, '+');
    echo $espacio;
    echo calculadora(10, 5, '-');
    echo $espacio;
    echo calculadora(10, 5, '*');
    echo $espacio;
    echo calculadora(10, 5, '/');

    echo $espacio;
    /*
    $archivo = fopen("archivo.txt","w");
    $texto = "Hola mundo!";
    fwrite($archivo, $texto);
    fclose($archivo);

    */

    $archivo = fopen("archivo.txt", "r");
    while (!feof($archivo)) {
        echo fgets($archivo) . $espacio;
    }

    fclose($archivo);


    session_start();

    print_r($_SESSION);
    $_SESSION["nombre"] = "Karol Leal";
    $_SESSION["rol"] = "admin";
    $_SESSION["username"] = "kleal";
    //session_destroy();
    ?>
</body>

</html>