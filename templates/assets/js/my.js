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