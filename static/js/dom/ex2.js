function showItems(what) {
    var panel = document.getElementById('panel-1');
    var a = document.getElementsByTagName("BUTTON")[1];
    var x = a.attributes.getNamedItem("onclick").value;

    var links = document.links;
    var images = document.images;
    var forms = document.forms;
    var anchors = document.anchors;
    switch ( what ) {
        case "links":
            $("#show").html(links.length);
            break;
        case "images":
            $("#show").html(images.length);
            break;
        case "forms":
            $("#show").html(forms.length);
            break;
        case "anchors":
            $("#show").html(anchors.length);
            break;
        case "namedItems":
            $("#show").html(x);
            break;
    }
}
