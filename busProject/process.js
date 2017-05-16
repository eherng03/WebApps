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
        $("#plazas").empty();
        var destinoSeleccionado = $(this).find(":selected");
        var destino = destinoSeleccionado.text();
        if(destino === '-'){
            $('.dynamic').fadeOut();
        }else{
            $('.dynamic').fadeIn();
            var plazas = destinoSeleccionado.val();
            var tabla = document.getElementById("plazas");
            //Creo cuatro asientos por fila
            for (var i = 1; i <= 4; i++) {
                tabla.appendChild(document.createElement('tr'));
            }

            for (var i = 1; i <= plazas; i++) {
                var fila = document.getElementById("plazas").children;
                for (var j = 0; j < 4; j++) {
                    if(i <= plazas){
                        var check = document.createElement('input');
                        check.type = 'checkbox';
                        check.id = i;
                        var label = document.createElement('label');
                        label.id = 'botonAsiento';
                        label.appendChild(check);
                        var td = document.createElement('td');
                        td.appendChild(label);
                        fila[j].appendChild(td);
                        i++; 
                    }
                }
                i--;
            }
            var asientos;
            $.post("getPlazas.php", {ciudad: destino}, function(data){
                asientos = JSON.parse(data);
            });
        }
        
    });

    $('#reservar').click(function() {
        var datosFormulario = new FormData(document.getElementById('datosCliente'));
       
    });
    
});
