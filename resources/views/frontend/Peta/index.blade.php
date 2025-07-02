<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Peta Lokasi Internet - Murung Raya</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />

    <!-- CSS Custom -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 30px;
            text-align: center;
        }

        .container {
            padding: 20px 30px;
        }

        #map {
            height: 500px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .footer {
            text-align: center;
            font-size: 13px;
            color: #888;
            margin-top: 40px;
            padding-bottom: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
            #map {
                height: 400px;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Peta Lokasi Internet Publik - Kabupaten Murung Raya</h2>
    </div>

    <div class="container">
        <div id="map"></div>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} Diskominfo Murung Raya
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-0.6391521, 114.5679174], 15); // Pusatkan di Murung Raya

        // Tile layer OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Data dari controller Laravel
        var lokasi = @json($lokasi);

        lokasi.forEach(function(item) {
            var marker = L.marker([item.latitude, item.longitude]).addTo(map);
            marker.bindPopup("<strong>" + item.nama_lokasi + "</strong><br>" + (item.keterangan ?? ''));
        });
    </script>

</body>
</html>
