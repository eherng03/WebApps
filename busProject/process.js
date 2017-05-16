$(document).ready(function() {
    $('.dynamic').hide();

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

    $('select').change(function(event) {
        var destinoSeleccionado = $(this).find(":selected");
        var destino = destinoSeleccionado.text();
        if(destino === '-'){
            $('.dynamic').fadeOut();
        }else{
            $('.dynamic').fadeIn();
            var plazas = destinoSeleccionado.value;

            for (var i = 1; i <= plazas; i++) {
                
            }
            $.post("getPlazas.php", {ciudad: destino}, function(data){
                var asientos = JSON.parse(data);
            });
        }
        
    });
    
});
