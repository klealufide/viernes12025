

document.addEventListener("DOMContentLoaded", function () {
    let mensajeSpan = document.getElementById("mensaje");
    mensajeSpan.style.display = "none";
    let nombre = "Karol Leal";
    let edad = 35;
    let altura = 1.60;
    let esEstudiante = false;
    const mayorEdad = 18;

    console.log(nombre);
    console.log(edad);
    console.log(altura);
    console.log(esEstudiante);
    console.log(mayorEdad);

    let total = 0;

    console.log("Global " + total);

    function suma(a, b) {
        let total = a + b;
        console.log("Local " + total);
    }

    suma(4, 4);

    console.log("Global " + total);


    console.log(nombre.length);
    console.log(nombre.charAt(3));
    console.log(nombre.endsWith("Leal"));
    console.log(altura.toFixed(0));
    console.log(altura.toString());
    console.log(esEstudiante.toString());

    let mensaje = edad >= mayorEdad ? "Es mayor de edad " : "No es mayor de edad";

    console.log(mensaje);

    // if -  if / else - if / else if  / else
    edad = 10;

    if (edad >= mayorEdad) {
        console.log("IF : Es mayor de edad");
    }

    if (edad >= mayorEdad) {
        console.log("IF / ELSE : Es mayor de edad");
    } else {
        console.log("IF / ELSE : No es mayor de edad");
    }


    let nota = 70;

    if (nota >= 90) {
        console.log("Calificacion A");
    } else if (nota < 90 && nota >= 70) {
        console.log("Calificacion B");
    } else {
        console.log("Calificacion C");
    }


    // switch
    let semaforo = "verde";
    if (semaforo == "verde") {
        console.log("SIga!");
    } else if (semaforo == "amarillo") {
        console.log("Cuidado!");
    } else if (semaforo == "rojo") {
        console.log("detengase!");
    } else {
        console.log("Color no esta definido!");
    }
    semaforo = "rojo";

    switch (semaforo) {
        case "verde":
            console.log("SIga!");
            break;
        case "amarillo":
            console.log("Cuidado!");
            break;
        case "rojo":
            console.log("detengase!");
            break;
        default:
            console.log("Color no esta definido !");
            break;
    }

    for (let i = 0; i < 10; i++) {
        console.log(i);
    }
    // tabla dl 4
    for (let i = 0; i <= 10; i++) {
        console.log("Tabla 4 * " + i + " = " + (i * 4));
    }

    let listaFrutas = ["melon", "banano", "sandia"];

    for (let i = 0; i < listaFrutas.length; i++) {
        console.log(listaFrutas[i]);
    }

    console.log(listaFrutas[0]);

    for (x in listaFrutas) {
        console.log(listaFrutas[x]);
    }
    edad = 25;

    //while solo ingresamos si cumple la condicion
    while (edad < 30) {
        console.log("WHILE:" + edad);
        edad++;
    }

    // DO while ingresamos al menos 1 vez

    do {
        edad++;
        console.log("DOWHILE:" + edad);
    } while (edad < 30)


    function sumar(a, b) {
        return a + b;
    }

    console.log(sumar(3, 5));

    let resultado = sumar(9, 8);
    console.log(resultado);


    let titulo = document.getElementById("titulo");
    titulo.innerText = "Semana 5";

    let subtutilo = document.getElementById("subtutilo");
    subtutilo.style.color = "red";
    subtutilo.style.fontSize = "50px";

    let listaTarea = document.getElementById("listaTareas");
    let nuevaTarea = document.createElement("li");
    nuevaTarea.innerText = "Tarea 4";
    listaTarea.appendChild(nuevaTarea);

    let link = document.getElementById("link");
    link.setAttribute("href", "https://www.fidelitasvirtual.org/moodle3/login/index.php");

    let agregarTareaBtn = document.getElementById("agregarTarea");

    agregarTareaBtn.addEventListener("click", function () {
        let nuevaTarea = document.getElementById("nuevaTarea");

        if (nuevaTarea.value.length == 0) {
            mensajeSpan.style.display = "block";
            nuevaTarea.style.borderColor = "red";
        } else {
            let nuevaTareaElemento = document.createElement("li");
            nuevaTareaElemento.innerText = nuevaTarea.value;
            listaTarea.appendChild(nuevaTareaElemento);
            nuevaTarea.value = "";
            mensajeSpan.style.display = "none";
            nuevaTarea.style.borderColor = "black";
        }
    });


    let imagen = document.getElementById("imagen");

    imagen.addEventListener("mouseenter", function () {
        imagen.setAttribute("src", "./img/salon.jpg");
    })

    imagen.addEventListener("mouseleave", function () {
        imagen.setAttribute("src", "./img/img1.jpg");
    })
})
