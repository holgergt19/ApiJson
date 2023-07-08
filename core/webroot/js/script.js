$(document).ready(function() {
  $('#loadDataBtn').click(function() {
      $.ajax({
          url: 'http://localhost:8765/api/cliente', // Reemplaza '/api/data' con la URL real de tu API
          type: 'GET',
          dataType: 'json',
          success: function(response) {
              var dataContainer = $('#dataContainer');
              dataContainer.empty();

              // Verificar si la respuesta es un objeto o un array de objetos
              if (Array.isArray(response)) {
                  // Si es un array de objetos, iterar sobre ellos
                  response.forEach(function(data) {
                      // Mostrar las propiedades del objeto
                      for (var key in data) {
                          var dataItem = $('<p>').text(key + ': ' + data[key]);
                          dataContainer.append(dataItem);
                      }
                      // Agregar un separador entre cada objeto
                      dataContainer.append('<hr>');
                  });
              } else if (typeof response === 'object') {
                  // Si es un objeto, mostrar las propiedades del objeto
                  for (var key in response) {
                      var dataItem = $('<p>').text(key + ': ' + response[key]);
                      dataContainer.append(dataItem);
                  }
              }
          },
          error: function(xhr, status, error) {
              console.error(error);
          }
      });
  });
});
