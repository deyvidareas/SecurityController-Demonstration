  $(document).ready(function () {

    $(".datatable").DataTable({
      "bDestroy": true,
      "autoWidth": false,
      "aaSorting": [],
      "scrollX": false,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
  
      language:{
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "decimal": ",",
        "thousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
        },
        "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
        }
      }
  
    });

    $('.datepicker').datepicker({
      dateFormat: 'dia/mês/ano'
    });
  });


  $(document).ready(function () {

    $('#relatorio').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
      ],
      "language": {
        "sProcessing": "Tratamento em curso ...",
        "sLengthMenu": "Mostrar _MENU_ linhas por Página.",
        "sZeroRecords": "Não foram encontados registros - Perdão",
        "sEmptyTable": "Sem dados disponíveis",
        "sInfo": "Linhas _START_ até _END_ de _TOTAL_",
        "sInfoEmpty": "Nenhum registro disponível",
        "sInfoFiltered": "(Filtrado de _MAX_ total Registos)",
        "sInfoPostFix": "",
        "sSearch": "Procurar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Carregando...",
        "oPaginate": {
          "sFirst": "Primeiro",
          "sLast": "Último",
          "sNext": "Seguinte",
          "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending": ": Classificar em ordem crescente",
          "sSortDescending": ": Classificar em ordem decrescente"
        }
      }

    });

  });

  $('#nome, #cpf, #identidade').on('keyup', function () {

    var valorDigitado = $(this).val();
    var idElementoOrigem = $(this).attr('id');

    $('#' + idElementoOrigem + '_digitado').text(valorDigitado);
  });

  $('#inputDataNasc').on('keyup, change', function () {

    var valorDigitado = $(this).val();
    data = new Date(valorDigitado)
    valorDigitado = data.toLocaleDateString('pt-BR', {
      timeZone: 'UTC'
    });
    var idElementoOrigem = $(this).attr('id');

    $('#' + idElementoOrigem + '_digitado').text(valorDigitado);
  });