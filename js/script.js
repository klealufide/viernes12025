$(function () {
    let titulo = document.getElementById("titulo");
    console.log(titulo);

    let tituloJquery = $("#titulo");
    console.log(tituloJquery);

    let clase = $(".grupo1");
    console.log(clase);

    let elemento = $("h2");
    console.log(elemento);

    let hijos = $("ul > li");
    console.log(hijos);

    let multi = $("#titulo, .grupo2, li");
    console.log(multi);

    $("a").attr("href", "https://youtube.com")

    $("#saludar").on("click", function () {
        //text() html()
        $("#titulo").text("Semana 10 - Unidad 6");
        $("#titulo").css("color", "red");
        $(".grupo1").addClass("grupo3");
        $(".grupo1").removeClass("grupo1");
    });

    $("#btnAgregar").on("click", function () {
        let tarea = $("#tarea");
        // tarea.val("nuevo texto");
        if (tarea.val() == "") {
            tarea.css("borderColor", "red");
        } else {
            tarea.css("borderColor", "black");
            $("#listaTarea").prepend("<li>" + tarea.val() + "</li>"); // inicio
            //  $("#listaTarea").append("<li>"+tarea.val()+"</li>"); // final
        }
    })

    $("#mostrar").on("click", function () {
        $("#cuadrado").fadeIn(1000);
    })
    $("#ocultar").on("click", function () {
        $("#cuadrado").fadeOut(1000);
    })

    $("#agrandar").on("click", function () {
        $("#cuadrado").animate({
            width: "400px",
            height: "400px",
            opacity: 0.5
        }, 1000)
    })

    $("#original").on("click", function () {
        $("#cuadrado").animate({
            width: "200px",
            height: "200px"
        }, 1000)
    })

    $("#cambioColor").on("click", function () {
        $("#listaTarea").toggleClass("listaTarea");
    })

})