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

    $("#saludar").on("click", function(){
        //text() html()
        $("#titulo").text("Semana 10 - Unidad 6");
    })
})