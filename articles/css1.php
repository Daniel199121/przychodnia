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

    <link rel="stylesheet" type="text/css" href="/static/css/css1.css">
</head>
<body style="margin: 0; padding: 50px 0 0;">

<?php include "../nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <article>
                <header class="article-header">
                    <h2>CSS część pierwsza</h2>
                </header>

                <section class="article-content">
                    <h3>
                        Wykorzystanie róznych sposobów zmiany wielkości tekstu na stronie (em, px, pt, %)<br/>
                        <small>Bazowa wielkość czcionki na stronie wynosi 14px</small>
                    </h3>
                    <p class="text-em-2">
                        To jest tekst z wykorzystaniem atrybutu "em", w tym przypadku em=2
                    </p>
                    <p class="text-px-18">
                        To jest tekst z wykorzystaniem atrybutu "px", w tym przypadku px=18
                    </p>
                    <p class="text-px-18">
                        To jest tekst z wykorzystaniem atrybutu "pt", w tym przypadku pt=18
                    </p>
                    <p class="text-p-18">
                        To jest tekst z wykorzystaniem atrybutu "%", w tym przypadku %=118
                    </p>
                </section>

                <section>
                    <h3>
                        Przykład ustawienia tła na stronie
                    </h3>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            background-color
                        </div>
                        <div class="panel-body bg-red" >
                            Tło ciemne czerwone, wypełnienie całkowite
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            background-image
                        </div>
                        <div class="panel-body bg-image" >
                            Obrazek jako tło
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            background-repeat
                        </div>
                        <div class="panel-body bg-image bg-repeat-y" >
                            Powtarzanie tła wzdłóż osi Y
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            background-attachment, background position
                        </div>
                        <div class="panel-body bg-image bg-attachment" >
                            Tło poruszające się razem ze scrollem, dodatkowo umiejscowione na środku
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        </div>
                    </div>
                </section>

                <section>
                    <h3>Właściwości box-model</h3>
                    <div class="panel panel-default">
                        <div class="panel-body" >
                            <div class="box box-pos-absolute">
                                position:absolute, top: 20px right: 0px
                            </div>
                            <div class="box box-pos-relative">
                                position:relative, top: 20px left: 0px
                                margin: top 50px padding: 30px;
                            </div>
                            <div class="box box-pos-static">
                                position:static, top: 10px left: 200px
                                padding: 20px
                            </div>

                            <div class="box box-pos-fixed">
                                position:fixed, top: 100px left: 100px
                            </div>

                            <div class="box float-left">
                                float: left
                            </div>
                            <div class="box float-left">
                                float: left
                            </div>
                            <div class="box float-left">
                                float: left
                            </div>
                            <div class="box clearfix">
                                clear
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h3>Formatowanie tekstu i jego szerokość</h3>
                    <p class="font-bold">
                        Pogrubiona czcionka
                    </p>
                    <p class="font-italic">
                        Kursywa
                    </p>
                    <p class="font-small-caps">
                        Drukowane litery z zachowaniem wielkości
                    </p>
                    <p class="font-size-30">
                        Tekst z fontem o wielkości 30px
                    </p>
                </section>

                <section>
                    <h3>Border - różne style</h3>
                    <p class="border-dotted">
                        Kropki, czerwony kolor, szerokość 1px
                    </p>
                    <p class="border-dashed">
                        Linie przerywane, zielony kolor, szerokość 2px
                    </p>
                    <p class="border-solid">
                        Linie ciągłe, niebieski kolor, szerokość 3px
                    </p>
                </section>

                <section>
                    <h3>Różne style tabel</h3>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            tablela z ramką, co drugi wiersz pokolorowany
                        </div>
                        <div class="panel-body">
                            <table>
                              <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                              </tr>
                              <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Maria Anders</td>
                                <td>Germany</td>
                              </tr>
                              <tr>
                                <td>Centro comercial Moctezuma</td>
                                <td>Francisco Chang</td>
                                <td>Mexico</td>
                              </tr>
                              <tr>
                                <td>Ernst Handel</td>
                                <td>Roland Mendel</td>
                                <td>Austria</td>
                              </tr>
                              <tr>
                                <td>Island Trading</td>
                                <td>Helen Bennett</td>
                                <td>UK</td>
                              </tr>
                              <tr>
                                <td>Laughing Bacchus Winecellars</td>
                                <td>Yoshi Tannamuri</td>
                                <td>Canada</td>
                              </tr>
                              <tr>
                                <td>Magazzini Alimentari Riuniti</td>
                                <td>Giovanni Rovelli</td>
                                <td>Italy</td>
                              </tr>
                            </table>
                        </div>
                    </div>
                </section>

                <section>
                    <h3>Pseudoklasy CSS</h3>
                    <div class="panel paned-default">
                        <div class="panel-body">
                            <div class="boxes">
                                <div class="box pseudoclass float-left">1</div>
                                <div class="box pseudoclass float-left">2</div>
                                <div class="box pseudoclass float-left">3</div>
                                <div class="box pseudoclass float-left">4</div>
                                <div class="box pseudoclass float-left">5</div>
                                <div class="box pseudoclass float-left">6</div>
                                <div class="box pseudoclass float-left">7</div>
                                <div class="box pseudoclass float-left">8</div>
                                <div class="box pseudoclass float-left">9</div>
                                <div class="box pseudoclass float-left"></div>
                                <div class="box pseudoclass float-left">11</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="links">
                                <a href="/articles/css1">ten artykuł</a>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>
</div>
</body>
</html>
