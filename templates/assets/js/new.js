   
$(window).scroll(function(event){
        var scrollTop = $(window).scrollTop()
        $('#scrollwrap').css('top', scrollTop+'px')

        if( scrollTop >= 260 ){
            $('#scrollwrap').css('display', 'none')
            $('#scrollwrap').parent().css('display', 'none')
        } else if( scrollTop >= 10 ){
            $('#scrollwrap').css('display', 'block')
            $('#scrollwrap').parent().css('display', 'block')
        } else if( scrollTop < 10 ){
            $('#scrollwrap').css('display', 'none')
            $('#scrollwrap').parent().css('display', 'none')
        }
});

function enviar_formulario1(){
   document.formulario1.submit()
}

function enviar_formulario2(){
   document.formulario2.submit()
}

function enviar_formulario3(){
   document.formulario3.submit()
}

function enviar_formulario4(){
   document.formulario4.submit()
}

function enviar_formulario5(){
   document.formulario5.submit()
}

function enviar_formulario6(){
   document.formulario6.submit()
}

function enviar_formulario7(){
   document.formulario7.submit()
}

function enviar_formulario8(){
   document.formulario8.submit()
}

function enviar_formulario9(){
   document.formulario9.submit()
}

function enviar_formulario10(){
   document.formulario10.submit()
}

// Producto especifico longewear



//  Script para ocultar obejtos HTML 

  $('button[name="bntOpciones"]').click(function(){
     var 
        Target = $(this).attr('data-target'),
        Elemento = $('#'+Target),
        Atributo = $('#'+Target).attr('hidden')

        if( Atributo !== false && typeof Atributo !== 'undefined' ){
          Elemento.removeAttr('hidden') 
        } else {
          console.log('YeaH!')
          Elemento.attr('hidden', true)
        }
      });

//  Script para cambiar botones de color White to Black 

    // Boton para ver Empaque Especial
    $("#btn-chance").click(function(){
    $(this).toggleClass("btn-empaque btn-empaque2");
    });

    //Boton para ver detalles
    
    //Boton para ver tallas
    $("#btn-size").click(function(){
        $(this).toggleClass("btn-size btn-size2");
        });
    
    //  Script para seleccionar tallas -->
    
        
        $('#divTalla').find('.aTalla').click( function(){
            $('.aTalla').removeClass('talla-active');
            $(this).addClass('talla-active');
        } )
    //Boton para ver tallas
    $("#btn-size").click(function(){
    $(this).toggleClass("btn-size btn-size2");
    });

//  Script para seleccionar tallas -->

    
    $('#divTalla').find('.aTalla').click( function(){
        $('.aTalla').removeClass('talla-active');
        $(this).addClass('talla-active');
    } )
  







