function elementPrompt() {
    var elements = document.getElementsByClassName('prompt');
    for (i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", function() {
            var imie = prompt("Podaj swoje imię");
            if (imie === null) {
                alert("Nie podałeś imienia");
            }
            else {
                alert("Witaj " + imie);
            }
        });
    }
}
