// cliente.js

document.getElementById('btnMostrarClientes').addEventListener('click', function() {
    fetchData();
});

function fetchData() {
    fetch('http://localhost:8765//cliente')
        .then(response => response.json())
        .then(data => {
            document.getElementById('jsonResult').textContent = JSON.stringify(data, null, 2);
        })
        .catch(error => console.error(error));
}
