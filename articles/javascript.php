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

    <script src="/static/js/functions/write.js"></script>
    <script src="/static/js/functions/prompt.js"></script>
    <script src="/static/js/functions/get.js"></script>

</head>
<body style="margin: 0; padding: 50px 0 0;">

<?php include "../nav.php" ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <article>
                <header class="article-header">
                    <h2 id="js-heading"></h2>
                </header>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Prompt i alert  podaną wartością, oraz funkcje sterujące if/else
                    </div>
                    <div class="panel-body">
                        <button class="prompt">
                            Naciśnij mnie
                        </button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Prosta gra matematyczna
                    </div>
                    <div class="panel-body">
                        <table width="400" border="1" align="center">
                            <tr>
                                <td><div id="number1">1</div></td>
                                <td><div>+</div></td>
                                <td><div id="number2">2</div></td>
                                <td><div>=</div></td>
                                <td><input id="myText" type="text"></input></td>
                                <td><input type="button" value="Check"></input></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        XHR request
                        <input type="text" name="url" id="url">
                        <button id="get">GET</button>
                    </div>
                    <div class="panel-body" id="content">
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<script>
document.addEventListener("click", function(){
    document.getElementById("js-heading").innerHTML = "Hello World!";
});
</script>

<script>
    writeTo('js-heading', "JavaScript");
    elementPrompt();

    var input = document.getElementById('url');
    var submit = document.getElementById('get');
    submit.addEventListener("click", function() {
        var url = input.value;
        get(url, function(response) {
            content.innerHTML = response;
        });
    });

    var number1;
    var number2;

    number1 = Math.floor((Math.random() * 10) + 1);
    number2 = Math.floor((Math.random() * 10) + 1);
    document.getElementById("number1").innerHTML=number1;
    document.getElementById("number2").innerHTML=number2;

    var answer = number1 + number2;

    var btn = document.querySelector('input[type=button][value=Check]');


    btn.onclick = function() {
        var checkAnswer = document.querySelector('input[type=text]');
        var value = checkAnswer.value;
        if (value == answer) {
              alert('Dobrze!');
        }
        else{
            alert('Źle, poprawna odpowiedź to ' + answer);
        }

     document.querySelector('input[type=text]').value = "";
     document.getElementById('number1').innerHTML = "";
     document.getElementById('number2').innerHTML = "";
     number1 = Math.floor((Math.random() * 10) + 1);
     number2 = Math.floor((Math.random() * 10) + 1);
     document.getElementById('number1').innerHTML = number1;
     document.getElementById('number2').innerHTML = number2;

     answer = number1 + number2
};
</script>

</body>
</html>
