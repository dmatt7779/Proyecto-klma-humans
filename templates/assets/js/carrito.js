//añadir al carro



function talla(t){
    
    switch (t.toUpperCase()) {
        case "S":
            document.getElementById("talla").value = "S";
            
            break;
            
        case "M":
            document.getElementById("talla").value = "M";

        
            break;
        case "L":
            document.getElementById("talla").value = "L";

        
            break;
        case "XL":
            document.getElementById("talla").value = "XL";
            

        break;
        default:
            console.log("nothing");
            break;
    }

}


function enviar_carro(){
    
    document.carrito.submit()
}