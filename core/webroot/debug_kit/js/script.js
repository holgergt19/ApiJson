$(document).ready(function() {
  $('#loadDataBtn').click(function() {
    $.ajax({
      url: 'http://localhost:8765/api/cliente', // Reemplaza '/api/data' con la URL real de tu API en CakePHP
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        // Aquí puedes procesar y mostrar los datos recibidos en la respuesta
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
});
