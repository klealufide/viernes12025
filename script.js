//document.addEventListener("DOMContentLoaded", function () {

$(function () {
    document.getElementById("buscarPokemon").addEventListener("click", function () {
        let pokemon = document.getElementById("pokemon").value;
        let urlBase = "https://pokeapi.co/api/v2/";
        let endpoint = "pokemon/";

        if (pokemon != "") {
            fetch(urlBase + endpoint + pokemon)
                .then(response => response.json())
                .then(data => {
                    document.getElementById("resultadoPokemon").innerHTML = "<h3>" + data.name + "</h3><img src='" + data.sprites.front_default + "'>";
                    document.getElementById("pokemon").value = "";
                })
                .catch(error => console.log(error))
        }
    })

    $("#buscarFrase").on("click", function () {
        let urlBase = "https://api.breakingbadquotes.xyz/v1/";
        let endpoint = "quotes";


        $.get(urlBase + endpoint, function (data) {
            $("#resultadoFrase").html("<h3>" + data[0].author + "</h3><p>" + data[0].quote + "</p>");
        });
    })

})
//})