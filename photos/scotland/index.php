<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php
        require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
    ?>
    <title>Scotland | Photos | Jeffrey Blinksma</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="/assets/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="/assets/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css">
</head>
    <body>
    <?php
    require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
    ?>
        <main>
            <h1>Scotland</h1>
            <a href="/photos/">← back to photos</a>
            <div id="gallery" style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
                <?php
                    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
                    // this obviously needs to be done in a better, more proper way than this, but this should work for now.
                    $art = array_diff(scandir(dirname(__FILE__).'/img'), array('..', '.', 'index.php'));
                    foreach ($art as $file) {
                        $filename = pathinfo(dirname(__FILE__).'/img/'.$file)['filename'];
                        $imgsize = getimagesize(dirname(__FILE__).'/img/'.$file);

                        echo "<a href='img/".$file."' target='_blank' data-pswp-width='".$imgsize[0]."' data-pswp-height='".$imgsize[1] ."'>";
                        echo "<img src='preview/".$filename."_233px.webp' sizes='(width < 45.75rem) 6.625rem, calc(43.75em / 3)' srcset='preview/".$filename."_106px.webp 106w, preview/".$filename."_133px.webp 133w, preview/".$filename."_159px.webp 159w, preview/".$filename."_186px.webp 186w, preview/".$filename."_212px.webp 212w, preview/".$filename."_233px.webp 233w, preview/".$filename."_239px.webp 239w, preview/".$filename."_265px.webp 265w, preview/".$filename."_292px.webp 292w, preview/".$filename."_318px.webp 318w, preview/".$filename."_350px.webp 350w, preview/".$filename."_371px.webp 371w, preview/".$filename."_408px.webp 408w, preview/".$filename."_424px.webp 424w, preview/".$filename."_476px.webp 476w, preview/".$filename."_525px.webp 525w, preview/".$filename."_538px.webp 538w, preview/".$filename."_700px.webp 700w, preview/".$filename."_817px.webp 817w, preview/".$filename."_933px.webp 933w' alt='' loading='lazy'>";

                        echo "<span class='pswp-caption-content'>";
                        try {
                            $decoder = new \WoltLab\WebpExif\Decoder();
                            $binary = file_get_contents(dirname(__FILE__).'/img/'.$file);
                            $webp = $decoder->fromBinary($binary);
                            $exif = $webp->getExif()->getParsedExif();


                            if ($exif["EXIF"]["DateTimeOriginal"]) {
                                $datetime = DateTime::createFromFormat('Y:m:d G:i:s', $exif["EXIF"]["DateTimeOriginal"]);
                                echo "<b>Date:</b> ".date_format($datetime, "j F Y H:i:s T")."<br>";
                            }

                            if (isset($exif["IFD0"]["Make"]) && isset($exif["IFD0"]["Model"])) {
                                echo "<b>Camera:</b> " . $exif["IFD0"]["Make"] . " " . $exif["IFD0"]["Model"]."<br>";
                            }

                            if (isset($exif["GPS"]["GPSLatitudeRef"]) && isset($exif["GPS"]["GPSLatitude"]) && isset($exif["GPS"]["GPSLongitudeRef"]) && isset($exif["GPS"]["GPSLongitude"])) {
                                echo "<b>Coords:</b> ";

                                $latdegree = explode('/', $exif["GPS"]["GPSLatitude"][0]);
                                $latmin = explode('/', $exif["GPS"]["GPSLatitude"][1]);
                                $latsec = explode('/', $exif["GPS"]["GPSLatitude"][2]);
                                $lat = round(($latdegree[0] / $latdegree[1]) + (($latmin[0] / $latmin[1]) / 60) + (($latsec[0] / $latsec[1]) / 3600), 6);
                                if ($exif["GPS"]["GPSLatitudeRef"] == "S") {
                                    $lat = -$lat;
                                }

                                echo $lat;
                                echo ', ';
                                $lngdegree = explode('/', $exif["GPS"]["GPSLongitude"][0]);
                                $lngmin = explode('/', $exif["GPS"]["GPSLongitude"][1]);
                                $lngsec = explode('/', $exif["GPS"]["GPSLongitude"][2]);
                                $lng = round(($lngdegree[0] / $lngdegree[1]) + (($lngmin[0] / $lngmin[1]) / 60) + (($lngsec[0] / $lngsec[1]) / 3600), 6);
                                if ($exif["GPS"]["GPSLongitudeRef"] == "W") {
                                    $lng = -$lng;
                                }
                                echo $lng;
                            }

                        } catch (\WoltLab\WebpExif\Exception\WebpExifException) {}
                        echo "</span>";
                        echo "</a>\n";
                    }
                ?>
            </div>
        </main>
        <script type="module">
            import PhotoSwipeLightbox from '/assets/photoswipe/photoswipe-lightbox.esm.js';
            import PhotoSwipe from '/assets/photoswipe/photoswipe.esm.js';
            import PhotoSwipeDynamicCaption from '/assets/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.min.js';

            const lightbox = new PhotoSwipeLightbox({
                gallery: '#gallery',
                children: 'a',
                pswpModule: PhotoSwipe
            });

            const captionPlugin = new PhotoSwipeDynamicCaption(lightbox, {
                // check mobileLayoutBreakpoint
                type: 'auto',
            });

            lightbox.init();
        </script>
    </body>
</html>
