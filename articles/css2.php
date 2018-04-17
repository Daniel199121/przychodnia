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
</head>
<body style="margin: 0; padding: 50px 0 0;">

<?php include "../nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <article>
                <header class="article-header">
                    <h2>CSS część druga</h2>
                </header>

                <section>
                    <h3>Zaawansowane metody</h3>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            text-shadow
                        </div>
                        <div class="panel-body">
                            <p class="text-shadow">
                                To jest tekst z wykorzystaniem text shadow
                            </p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            border-radius
                        </div>
                        <div class="panel-body">
                            <div class="box border-30px">
                                30px
                            </div>
                            <div class="box border-30p">
                                30%
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            box-shadow
                        </div>
                        <div class="panel-body">
                            <div class="box shadow-h">shadow-h & shadow-v</div>
                        </div>
                        <div class="panel-body">
                            <div class="box shadow-blur">blur</div>
                        </div>
                        <div class="panel-body">
                            <div class="box shadow-inset">inset</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            gradient liniowy
                        </div>
                        <div class="panel-body gradient-linear">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            gradient radialny
                        </div>
                        <div class="gradient-radial panel-body" >
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            background-image, background-origin, background-position, background-repeat
                        </div>
                        <div class="panel-body origin">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            border-image-source/slice/repeat
                        </div>
                        <div class="panel-body">
                            <div class="box borderimg1"></div>
                            <div class="box borderimg2"></div>
                            <div class="box borderimg3"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            animation/keyframes
                        </div>
                        <div class="animation panel-body">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            transform/transition
                        </div>
                        <div class="panel-body">
                            <div class="box transform"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            font face: Test
                        </div>
                        <div class="font-face panel-body">
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            flexible box layout
                        </div>
                        <div class="flex-container panel-body">
                            <div class="flex-item">flex item 1</div>
                            <div class="flex-item">flex item 2</div>
                            <div class="flex-item">flex item 3</div>
                            <div class="flex-item">flex item 4</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            column-count/gap
                        </div>
                        <div class="columns panel-body">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                        </div>
                    </div>
                </section>

            </article>
        </div>
    </div>
</div>
</body>
</html>
