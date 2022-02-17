$(document).ready(function() {
    $('#mydatatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filtrar.." />' );
    } );

    var table = $('#mydatatable').DataTable({
        "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
        "responsive": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
        "initComplete": function () {
            this.api().columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                        }
                });
            })
        }
    });
});

// confirmar deshabilitacion

function myconfirmdes(event) {

    var r =  confirm("seguro que desea deshabilitar?");

    if (r == true) {
  txt = "Deshabilitado";
  alert(txt);
} else {
  txt = "Accion cancelada";
  alert(txt);
  event.preventDefault();
}

}

// confirmar suscripcion

function myconfirmsus(event) {

  var r =  confirm("Al suscribirse usted acepta el envío de información de su interes como descuentos, nuevas colecciones y mas \n ¿Seguro que desea subscribirse?");

  if (r == true) {
txt = "Suscrito correctamente, gracias por preferirnos";
alert(txt);
} else {
txt = "Accion cancelada";
alert(txt);
event.preventDefault();
}

}

// confirmar pagado

function myconfirmpag(event) {

  var r =  confirm("Seguro que desea pagar?");

  if (r == true) {
txt = "Pagado";
alert(txt);
} else {
txt = "Accion cancelada";
alert(txt);
event.preventDefault();
}

}

// confirmar enviado

function myconfirmenv(event) {

  var r =  confirm("Seguro que desea enviar?");

  if (r == true) {
txt = "Enviado";
alert(txt);
} else {
txt = "Accion cancelada";
alert(txt);
event.preventDefault();
}

}


// confirmar entregado

function myconfirment(event) {

  var r =  confirm("Seguro que desea entregar?");

  if (r == true) {
txt = "Entregado";
alert(txt);
} else {
txt = "Accion cancelada";
alert(txt);
event.preventDefault();
}

}

// confirmar habilitacion

function myconfirmhab(event) {

    var r =  confirm("seguro que desea habilitar?");

    if (r == true) {
  txt = "Habilitado";
  alert(txt);
} else {
  txt = "Accion cancelada";
  alert(txt);
  event.preventDefault();
}

}

// confirmar borrar usuario

function myconfirm(event) {

    var r =  confirm("seguro que desea borrar?");

    if (r == true) {
  txt = "Borrado";
  alert(txt);
} else {
  txt = "Accion cancelada";
  alert(txt);
  event.preventDefault();
}

}