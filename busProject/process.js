$(document).ready(function() {

    $('#login').click(function() {

        var datosFormulario = new FormData(document.getElementById('formulario'));
        var req = new XMLHttpRequest();

        req.open("POST", "envio.php", true);
        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                alert(req.responseText);
            }
        }

        req.send(datosFormulario);
    });

});