<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blog">
    <meta name="keywords" content="HTML, CSS, JS, PHP, ASP.net">
    <title>BLOG</title>
    <script type="text/javascript" src="/static/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/css/menu.css">

    <link rel="stylesheet" type="text/css" href="/static/css/css2.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
    <style>
        ul {
            list-style-type: none;
        }
        .help-text {
            display: none;
        }
    </style>

</head>
<body style="margin: 0; padding: 50px 0 0;">

<?php include "../nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <article>
                <header class="article-header">
                    <h2>DOM</h2>
                </header>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        createElement,
    createTextNode, appendChild, insertBefore,
    replaceChild, removeChild, parentNode
                    </div>
                    <div class="panel-body" id="panel-1">
                        <ul id="lista">
                          <li>Kawa</li>
                          <li>Herbata</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kolekcje
                    </div>
                    <div class="panel-body" id="panel-2">
                        <a href="http://google.pl">google</a>
                        <a href="http://wykop.pl">wykop</a>
                        <img src="/static/img/img_flwr.gif" alt="image">
                        <form action="" method="get">
                            <input type="text" name="input">
                        </form>
                        <a name="html">HTML Tutorial</a><br>
                        <a name="css">CSS Tutorial</a><br>
                        <a name="xml">XML Tutorial</a><br>
                        <button class="btn btn-default" onclick="showItems('links')">Pokaż links.length</button>
                        <button class="btn btn-default" onclick="showItems('images')">Pokaż images.length</button>
                        <button class="btn btn-default" onclick="showItems('forms')">Pokaż forms.length</button>
                        <button class="btn btn-default" onclick="showItems('anchors')">Pokaż anchors.length</button>
                        <button class="btn btn-default" onclick="showItems('namedItems')">Pokaż namedItems</button>
                        <div id="show"></div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Zmiana stylu strony
                    </div>
                    <div class="panel-body">
                        <form action="" method="get" id="cssMod">
                            <div>
                                <label>Kolor tła:
                                    <input type="color" name="bgcolor">
                                </label>
                            </div>
                            <div>
                                <label>Kolor czcionki:
                                    <input type="color" name="fontColor">
                                </label>
                            </div>
                            <div>
                                <label>Krój czcionki:
                                    <select name="fontFamily">
                                        <option>Arial</option>
                                        <option>Times New Roman, Times, serif</option>
                                    </select>
                                </label>
                            </div>
                            <div>
                                <input class="btn btn-primary" type="submit" value="Zastosuj">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Zdarzenia
                    </div>
                    <div class="panel-body" onclick="showCoords(event)">
                        <input type="text" onkeydown="isKeyPressed(event)">
                            <p id="events"></p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        blur/focus
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <div class="form-group">
                                <ul class="form_group">
                                    <li>
                                        <label for="client_name">Imie</label>
                                    </li>
                                    <li>
                                        <input class="form-control" name="imie" type="text" />
                                    </li>
                                    <li>
                                        <p class="help-text">Tekst pomocy dla pola imie</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <ul class="form_group">
                                    <li>
                                        <label for="client_name">nazwisko</label>
                                    </li>
                                    <li>
                                        <input class="form-control" name="nazwisko" type="text" />
                                    </li>
                                    <li>
                                        <p class="help-text">Tekst pomocy dla pola nazwisko</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Wyślij">
                                <input type="reset" class="btn btn-danger" value="Resetuj">
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
    <script src="/static/js/dom/ex1.js"></script>
    <script src="/static/js/dom/ex2.js"></script>
    <script src="/static/js/dom/ex3.js"></script>
    <script src="/static/js/dom/ex4.js"></script>
    <script src="/static/js/dom/ex5.js"></script>
</body>
</html>
