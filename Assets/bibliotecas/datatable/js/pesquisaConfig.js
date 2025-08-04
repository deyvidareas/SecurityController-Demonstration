$(document).ready(function() {
    $('.datatable').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ linhas por Página.",
            "zeroRecords": "Não foram encontados registros - Perdão",
            "info": "Mostrando Página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(Filtrado de _MAX_ total Registos)",
						"sSearch": "Procurar:",
						"sUrl":          "",
						"oPaginate": {
						"sFirst":    "Primeiro",
						"sPrevious": "Anterior",
						"sNext":     "Seguinte",
						"sLast":     "Último"
						}
        }
    } );
} );
