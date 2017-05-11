$(document).ready(function() {

    $.get("selectDestino.php", function(data) {
        var comboBox = document.getElementById("destinos");
        var destinos = JSON.parse(data);

        destinos.forEach((destino) =>{
            var opt = document.createElement('option');
            opt.value = destino.plazas;
            opt.innerHTML = destino.ciudad;
            comboBox.appendChild(opt);
        });
    });
});
