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

    $("a").attr("href","https://youtube.com")

    $("#saludar").on("click", function(){
        //text() html()
        $("#titulo").text("Semana 10 - Unidad 6");
        $("#titulo").css("color","red");
        $(".grupo1").addClass("grupo3");
        $(".grupo1").removeClass("grupo1");
    });

    $("#btnAgregar").on("click", function(){
        let tarea = $("#tarea");
       // tarea.val("nuevo texto");
        if(tarea.val() == ""){
            tarea.css("borderColor","red");
        } else {
            tarea.css("borderColor", "black");
        }
    })
})