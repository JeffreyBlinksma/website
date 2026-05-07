lbCall();
setInterval(lbCall, 15000);

async function lbCall() {
    await axios.get("https://api.listenbrainz.org/1/user/jblinksma/listens?count=1")
    .then (function (response) {
        const payload = response.data.payload.listens[0]

        track = payload.track_metadata.track_name
        artist = payload.track_metadata.artist_name
        release = payload.track_metadata.release_name
        release_mbid = payload.track_metadata.mbid_mapping.caa_release_mbid

        document.getElementById("music-widget-title").innerHTML = track
        document.getElementById("music-widget-artist").innerHTML = artist
        document.getElementById("music-widget-album").innerHTML = release
        document.getElementById("music-widget-img").src = "https://coverartarchive.org/release/" + release_mbid + "/front-250"
    })
}