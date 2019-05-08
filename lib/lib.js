/*
    dank stuff up in here ayy
*/
//countdown after message is sent
function returnToIndexCountdown(seconds) {
    if (seconds == 0) {
        window.location = "../index.php"
    } else {
        var element = document.getElementById('return_home');
        if (seconds == 1) {
            element.innerHTML = "Retour à la page principale dans " + seconds + " seconde";
            seconds--;
            setTimeout(returnToIndexCountdown, 1000, seconds);
        } else {
            element.innerHTML = "Retour à la page principale dans " + seconds + " secondes";
            seconds--;
            setTimeout(returnToIndexCountdown, 1000, seconds);
        }
    }
}