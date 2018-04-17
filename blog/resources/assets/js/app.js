$(document).ready(function(){
    $('#mobileMenu').hide();
});

$(document).on('click', '#mobileBars', function(){
    $('#mobileMenu').toggle(100);
});


//api call for Last.fm, uses my Lastfm user (Waldo53) and my api key
var xhttp = new XMLHttpRequest();

var url = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Waldo53&api_key=5cfdd68f00e1eb295df127936c42b86a&format=json';

xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        var parsedJSON = JSON.parse(xhttp.responseText);

        outputSongInfo(parsedJSON);
    }
}

xhttp.open("GET", url, true);
xhttp.send();

function outputSongInfo(songInfo) {
    var artist = songInfo.recenttracks.track[0].artist['#text'];
    var album = songInfo.recenttracks.track[0].album['#text'];
    var song = songInfo.recenttracks.track[0].name;
    var img = songInfo.recenttracks.track[0].image[2]['#text'];

    document.getElementById('recentSong').innerHTML = "'" + song + "'" + " from " + "'" + album + "'" + " by " + artist;
    document.getElementById('songAlbum').src = img;
}
