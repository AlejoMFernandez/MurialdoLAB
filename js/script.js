// Hacer una solicitud a la API de Rest Countries para obtener la lista de países
fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
        const countrySelect = document.getElementById('countrySelect');

        data.forEach(country => {
            const option = document.createElement('option');
            option.value = country.cca3; // Usar el código del país como valor
            option.text = country.name.common;  // Usar el nombre del país como etiqueta
            countrySelect.appendChild(option);
        });
    })
    .catch(error => {
        console.error('Error al cargar la lista de países', error);
    });