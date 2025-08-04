$(document).ready(function () { 
  var $seuCampoCpf = $("#CPF");
  $seuCampoCpf.mask('000.000.000-00', {reverse: true});
});

/*
$('#CPF').on('keyup', function() {

  var cpf = $(this).val();

  cpf = cpf.replace(/[^0-9]/g, '');

  isCPFValido = validarCPF(cpf);

  if (isCPFValido == true) {

    $('.btn-cadastrar').prop('disabled', false);
    $('.InputCpf').removeClass('is-invalid');
    $('.InputCpf').addClass('is-valid');

  } else {

    $('.btn-cadastrar').prop('disabled', true); 
    $('.InputCpf').removeClass('is-valid');
    $('.InputCpf').addClass('is-invalid');

  }

});

function validarCPF(inputCPF){
  var soma = 0;
  var resto;
  //var inputCPF = document.getElementById('cpf').value;

  if(inputCPF == '00000000000') return false;
  if(inputCPF == '11111111111') return false;
  if(inputCPF == '22222222222') return false;
  if(inputCPF == '33333333333') return false;
  if(inputCPF == '44444444444') return false;
  if(inputCPF == '55555555555') return false;
  if(inputCPF == '66666666666') return false;
  if(inputCPF == '77777777777') return false;
  if(inputCPF == '88888888888') return false;
  if(inputCPF == '99999999999') return false;
  
  for(i=1; i<=9; i++) soma = soma + parseInt(inputCPF.substring(i-1, i)) * (11 - i);
  resto = (soma * 10) % 11;

  if((resto == 10) || (resto == 11)) resto = 0;
  if(resto != parseInt(inputCPF.substring(9, 10))) return false;

  soma = 0;
  for(i = 1; i <= 10; i++) soma = soma + parseInt(inputCPF.substring(i-1, i))*(12-i);
  resto = (soma * 10) % 11;

  if((resto == 10) || (resto == 11)) resto = 0;
  if(resto != parseInt(inputCPF.substring(10, 11))) return false;
  return true;
}
*/