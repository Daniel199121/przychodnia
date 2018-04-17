function isKeyPressed(event) {
    var kEv = document.getElementById("events");
    var code = event.keyCode;
    if (event.altKey) {
        kEv.innerHTML = code + " ALT";
    } else if (event.ctrlKey) {
        kEv.innerHTML = code + " CTRL";
    } else if (event.shiftKey) {
        kEv.innerHTML = code + " SHIFT";
    }
    else {
        kEv.innerHTML = code;
    }
}

function showCoords(event) {
    var x = event.clientX;
    var y = event.clientY;
    var coords = "X coords: " + x + ", Y coords: " + y;
    document.getElementById("events").innerHTML = coords;
}
