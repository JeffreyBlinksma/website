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
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [16, 0],
                    tooltipAnchor: [16, 0]
                });
                L.Marker.prototype.options.icon = marker;

                let bounds = new L.LatLngBounds();

                const json = <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/visited/places.json", FILE_IGNORE_NEW_LINES); ?>;

                for (const country in json) {
                    for (const city in json[country]) {
                        L.marker([json[country][city][0], json[country][city][1]]).addTo(map);
                        bounds.extend([json[country][city][0], json[country][city][1]]);
                    }
                }

                map.fitBounds(bounds);
            </script>
        </main>
        <footer>
            <?php
                require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
