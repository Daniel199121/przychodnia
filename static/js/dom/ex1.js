(function() {

    var panel = document.getElementById('panel-1');
    var button = document.createElement("button");
    var buttonText = document.createTextNode("Napis nr 1 utworzony przez createTextNode");
    var buttonTextAlt = document.createTextNode("Napis nr 2 utworzony przez createTextNode");
    button.appendChild(buttonText);
    panel.appendChild(button);

    var counter = 1;

    setInterval(function() {
        if (counter % 2 == 0) {
            button.replaceChild(buttonTextAlt, button.childNodes[0]);
        } else {
            button.replaceChild(buttonText, button.childNodes[0]);
        }

        counter += 1;
    }, 1000);

    var newItem = document.createElement("li");
    var textnode = document.createTextNode("Woda");
    newItem.appendChild(textnode);

    var list = document.getElementById("lista");
    list.insertBefore(newItem, list.childNodes[0]);

    button.addEventListener("click", function() {
        alert(button.parentNode.nodeName);
    });
})();
