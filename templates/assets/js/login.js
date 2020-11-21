var Correo = '';

$(document).on('submit', '#frm_recuperar',function(e){
/*e.preventDefault()*/
var Data = new FormData();
Data.append('apodo', $('#apodo').val() )
/*$.ajax ({
    url: "enviar.php",
    data: param,
        success: function( result ) {
        alert("Hi, testing");
        alert( result );
    }
});*/

$.ajax( {
    data: Data,
    dataType: 'json',
    type: 'POST',
    contentType: false,
    cache: false,
    processData: false,
    url: 'enviar.php',
    success: function( Result ){
    }
} );

})
    
          
