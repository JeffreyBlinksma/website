<?php
require __DIR__.'/vendor/autoload.php';
$existingArt = array_diff(scandir(__DIR__.'/assets/coverart'), array('..', '.'));
$existingArt = str_replace('.webp', '', $existingArt);
$newArt = array();

$lbClient = new GuzzleHttp\Client(['base_uri' => 'https://api.listenbrainz.org/1/', \GuzzleHttp\RequestOptions::VERIFY => \Composer\CaBundle\CaBundle::getSystemCaRootBundlePath()]);
$caaClient = new GuzzleHttp\Client(['base_uri' => 'https://coverartarchive.org/release/', \GuzzleHttp\RequestOptions::VERIFY => \Composer\CaBundle\CaBundle::getSystemCaRootBundlePath()]);
echo("Getting listens...\n");
try {
    $response = $lbClient->request('GET', 'user/jblinksma/listens');
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
    exit();
}

if ($response->getStatusCode() !== 200) {
    var_dump($response->getStatusCode());
    exit();
}

echo('Getting listens succeeded!');
$lbResponse = json_decode($response->getBody());
foreach ($lbResponse->payload->listens as $listen) {
    $newArt[] = $listen->track_metadata->mbid_mapping->caa_release_mbid;
}

$newArt = array_diff($newArt, $existingArt);

foreach ($newArt as $art) {
    echo("Getting art for: ".$art."\n");
    try {
        $response = $caaClient->request('GET', $art . '/front-250/');
    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        var_dump($e->getMessage());
        continue;
    }
    if ($response->getStatusCode() !== 200) {
        var_dump($response->getStatusCode());
        continue;
    }
    $imageSrc = imagecreatefromstring($response->getBody());
    $image = imagewebp($imageSrc, __DIR__ . '/assets/coverart/'.$art.'.webp');
}

