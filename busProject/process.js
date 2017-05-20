var destino;

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
        destino = destinoSeleccionado.text();
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
                        label.htmlFor = i;
                        label.appendChild(check);
                        var td = document.createElement('td');
                        td.appendChild(label);
                        fila[j].appendChild(td);
                        i++; 
                    }
                }
                i--;
            }
           
            $.ajax({
                type: 'POST',
                url: 'getPlazas.php',
                data: {'ciudad': destino},
                success: function(data){
                     var asientos = JSON.parse(data);
                      for (var j = 0; j < asientos.length; j++) {
                        var num = asientos[j];
                        var name = '[id="'+ num +'"]'; 
                        $(name).prop('disabled', true);
                     };
            }});
        }
        
    });

    $('#reservar').click(function() {
        
        var asientosSeleccionados = getAsientosSeleccionados();
        if(asientosSeleccionados == null){
            alert("Para hacer la reserva, debe seleccionar algún asiento.");
        }else{
            if($("#nombre").val() == "", $("#nif").val() == "", $("#email").val() == ""){
                alert("Para hacer la reserva, debe introducir todos los datos de usuario.");
            }else{
                var formData = {
                    name : $("#nombre").val(),
                    nif: $("#nif").val(),
                    email: $("#email").val()
                }
                var datosJSON = JSON.stringify({datosForm: formData, asientos: asientosSeleccionados, dest: destino});
                $.ajax({
                    type: 'POST',
                    url: 'reservar.php',
                    data: {'datos': datosJSON},
                    success: function(msg) {
                      alert(msg);
                    }
                });
            }
            
        }
    });
});

function getAsientosSeleccionados(){
    var num = $('input[type = checkbox]:checked').length;
    var asientosId = [];
    if(num == 0){
        return null;
    }else{
        var contador = 0;
        var seleccionadas = $('input[type = checkbox]:checked');
        for (var j = 0; j < seleccionadas.length; j++) {
            asientosId[contador] = seleccionadas[j].id;
            contador++;
        }
        return asientosId;  
    }
}