document.addEventListener('DOMContentLoaded', function () {
    fetch('http://127.0.0.1:8000/api/berita') // Sesuaikan endpoint sesuai API yang telah dibuat
        .then(response => response.json())
        .then(data => {
            const beritaContainer = document.getElementById('berita-container');
            
            if (beritaContainer) {
                data.forEach(berita => {
                    const beritaItem = document.createElement('div');
                    beritaItem.innerHTML = `
                        <h3>${berita.title}</h3>
                        <p>${berita.description}</p>
                    `;
                    beritaContainer.appendChild(beritaItem);
                });
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});
