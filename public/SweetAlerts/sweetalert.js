$('#guardar').click(function() {
  Swal.fire({
    icon: 'success',
    title: '¡Registro gurdado exitosamente!',
    showConfirmButton: false,
    timer: 15000
  })
});

$('#eliminar').click(function() {
  Swal.fire({
    title: '¿Estás seguro que quieres eliminar el registro?',
    text: "¡No podrás revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Si, elimínelo!',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      this.click();
    }
  })
});
