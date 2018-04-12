$(document).ready(function(){
    $('#mobileBars').click(function(){
        $('#mobileMenu').toggle();
    });
});

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
    
}
