$('.motivo_visita').on('click', function () {

  var motivoVisita = $(this).data('motivovisita');
  $('.motivo_visita_modal').text(motivoVisita);

});