$('#guardar').click(function() {
  Swal.fire({
    icon: 'success',
    title: '¡Registro gurdado exitosamente!',
    backdrop: 'rgba(0,0,123,0.4)',
    showConfirmButton: false,
    timer: 15000
  })
});

$('#modificar').click(function() {
  Swal.fire({
    icon: 'success',
    title: '¡Registro modificado exitosamente!',
    backdrop: 'rgba(0,0,123,0.4)',
    showConfirmButton: false,
    timer: 15000
  })
});

$('#eliminar').click(function() {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  Toast.fire({
    icon: 'success',
    title: '¡Registro eliminado!'
  })
  // Swal.fire({
  //   title: '¿Estás seguro que quieres eliminar el registro?',
  //   text: "¡No podrás revertir esto!",
  //   icon: 'warning',
  //   showCancelButton: true,
  //   confirmButtonColor: '#3085d6',
  //   cancelButtonColor: '#d33',
  //   confirmButtonText: '¡Si, elimínelo!',
  //   cancelButtonText: 'Cancelar'
  // }).then((result) => {
  //   if (result.isConfirmed) {
  //     Swal.fire({
  //       title: '¡Eliminado!',
  //       text: 'Su archivo ha sido eliminado correctamente.',
  //       icon: 'success',
  //       background: '#C8FADD',
  //       showConfirmButton: false,
  //       timer: 15000
  //     })
  //   }
  // })
});

$('#desactivar').click(function() {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    backdrop: 'rgba(0,0,123,0.4)',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  Toast.fire({
    icon: 'success',
    title: '¡Registro desactivado!'
  })
});

$('#activar').click(function() {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    backdrop: 'rgba(0,0,123,0.4)',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  Toast.fire({
    icon: 'success',
    title: '¡Registro activado!'
  })
});
