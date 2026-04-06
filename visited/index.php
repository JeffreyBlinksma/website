<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php
    require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
    ?>
    <title>Places visited | Jeffrey Blinksma</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
        ?>
        <main>
            <h1>Places I've visited</h1>

            <div id="map"></div>
            <script>
                let map = L.map('map').setView([51.505, -0.09], 13);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                map.attributionControl.addAttribution('<a href="https://github.com/gorango/glyphs">gorango/glyphs</a>')

                let marker = L.icon({
                    iconUrl: '/assets/mapmarker.svg',
                    iconSize: [48, 48],
                    iconAnchor: [24, 48],
                    popupAnchor: [0, 48],
                    tooltipAnchor: [0, 48]
                });
                L.Marker.prototype.options.icon = marker;

                let london = L.marker([51.507222, -0.1275]).addTo(map);
                let rotterdam = L.marker([51.92, 4.48]).addTo(map);
                let dordrecht = L.marker([51.795833, 4.678333]).addTo(map);
                let tilburg = L.marker([51.5575, 5.0906]).addTo(map);
                let shertogensbosch = L.marker([51.688333, 5.3]).addTo(map);
            </script>
        </main>
        <footer>
            <?php
                require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
