$(document).ready(function() {
    $$('.dynamic').hide();

    $.get("selectDestino.php", function(data) {
        var comboBox = document.getElementById("destinos");
        var destinos = JSON.parse(data);

        destinos.forEach((destino) =>{
            var opt = document.createElement('option');
            opt.value = destino.ciudad;
            opt.innerHTML = destino.ciudad;
            comboBox.appendChild(opt);
        });
    });

    $('select').change(function(event) {
       var destino = $(this).find(":selected").val();
       if(destino === '-'){
            $('.dynamic').fadeIn();
       }else{

       }
       $.post("getPlazas.php", {ciudad: destino}, function(data, textStatus, xhr) {
           /*optional stuff to do after success */
       });
    });
    
});
