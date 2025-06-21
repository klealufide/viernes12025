<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4</title>
</head>

<body>
    <h1>Unidad 4</h1>
    <?php
    echo "<h2>Hola semana 6!</h2>";

    $nombre = "Karol Leal";
    $edad = "35";
    $edad2 = "10";
    $altura = 1.58;
    $esEstudiante = false;
    $espacio = "<br>";
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


    ?>
</body>

</html>