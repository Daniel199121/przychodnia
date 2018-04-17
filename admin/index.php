<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user'] == null) {
        header('location: /login.php');
    }
?>

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
    <style>
<?php
    if (isset($_COOKIE['font_color']) && isset($_COOKIE['bg_color'])) {
        echo sprintf("body { background: %s  !important; color: %s !important;", $_COOKIE['bg_color'], $_COOKIE['font_color']);
    }
 ?>
    </style>
</head>
<body style="margin: 0; padding: 50px 0 0;">
<?php include "../nav.php" ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Panel administracyjny <?php if (isset($_COOKIE['welcome_text'])) { echo $_COOKIE['welcome_text']; } ?></h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                    <a class="pull-right" href="/admin/settings.php">Ustawienia</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <caption>Zmienne w ciasteczkach</caption>
                        <thead>
                        <tr>
                            <th>Zmienna</th>
                            <th>Wartość</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Powitanie</td>
                                <td>
                                    <?php
                                        if (isset($_COOKIE['welcome_text'])) { echo $_COOKIE['welcome_text']; } else { echo "Nie zdefiniowano"; }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kolor czcionki</td>
                                <td>
                                    <?php
                                        if (isset($_COOKIE['font_color'])) { echo $_COOKIE['font_color']; } else { echo "Nie zdefiniowano"; }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kolor tła</td>
                                <td>
                                    <?php
                                        if (isset($_COOKIE['bg_color'])) { echo $_COOKIE['bg_color']; } else { echo "Nie zdefiniowano"; }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Użytkownicy
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>nazwa użytkownika</th>
                            <th>email</th>
                            <th>imie</th>
                            <th>nazwisko</th>
                        </tr>
                        </thead>
                        <tbody>
<?php
    $con = mysqli_connect("localhost","root","","blog");
    $sql = "SELECT username, email, first_name, last_name FROM user";
    $result = mysqli_query($con, $sql);
    while ($row=mysqli_fetch_object($result)) {
        echo sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row->username, $row->email, $row->first_name, $row->last_name);
    }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
