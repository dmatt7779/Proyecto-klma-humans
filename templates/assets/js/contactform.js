$("#form").submit(function(event){
    event.preventDefault(); //Almacena los datos sin refrescar página web.
    enviar();
    form.reset();
});

function enviar() {
    var datos = $("#form").serialize(); //Array para los datos del contacform.
    $.ajax ({
        type: "POST",
        url: "emailform.php",
        data: datos,
        success: function(texto){
            if(texto === "exito") {
                correcto();
            }else {
                phperror(texto);
            }
        }
    })
}
function correcto () {
    $("#success").removeClass("d-none");
    $("#bad").addClass("d-none");
}
function phperror(texto) {
    $("#bad").removeClass("d-none");
    $("#bad").html(texto);
}