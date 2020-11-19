//añadir al carro



function talla(t){
    
    switch (t) {
        case "s":
            document.getElementById("talla").value = "s";
            
            break;
            
        case "m":
            document.getElementById("talla").value = "m";

        
            break;
        case "l":
            document.getElementById("talla").value = "l";

        
            break;
        case "xl":
            document.getElementById("talla").value = "xl";
            

        break;
        default:
            console.log("nichi");
            break;
    }

}


function enviar_carro(){
    
    document.carrito.submit()
}