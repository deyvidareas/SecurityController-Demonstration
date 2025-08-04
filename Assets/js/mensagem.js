

  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
  });

  function mostraMensagem (mensagem, tipo) {

    var classe = null;

    if (tipo == 'errorMsg') {
      classe = 'danger';
    }

    if (tipo == 'warningMsg') {
      classe = 'warning';
    }    

    if (tipo == 'successMsg') {
      classe = 'success';
    }    

    $(document).Toasts('create', {
      class: 'toastMsg bg-'+classe, 
      title: mensagem,
      icon: 'fas fa-check fa-lg',
      autohide: true,
      delay: 5000
    })

  } 
