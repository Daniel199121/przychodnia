<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] == '') {
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
</head>
<body style="margin: 0; padding: 50px 0 0;">
<?php include "../nav.php" ?>

<?php
    $v1 = 'Witaj';
    $v2 = '#000';
    $v3 = '#fff';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie('welcome_text', $_POST['welcome_text'], time() + 60);
        setcookie('font_color', $_POST['font_color'], time() + 60);
        setcookie('bg_color', $_POST['bg_color'], time() + 60);
        header('location: /admin/index.php');
    }
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Panel administracyjny</h1>
            <form method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ustawienia
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Powitanie</label>
                        <input type="text" name="welcome_text" id="id_welcome_text" class="form-control" value="<?php if (isset($_COOKIE['welcome_text'])) { echo $_COOKIE['welcome_text']; } else { echo  "Witaj"; } ?> ">
                    </div>
                    <div class="form-group">
                        <label>Kolor czcionki</label>
                        <input type="color" name="font_color" id="id_font_color" class="form-control" value="<?php if (isset($_COOKIE['font_color'])) { echo $_COOKIE['font_color']; } else { echo "#000"; } ?>">
                    </div>
                    <div class="form-group">
                        <label>Kolor tła</label>
                        <input type="color" name="bg_color" id="id_font_color" class="form-control" value="<?php if (isset($_COOKIE['bg_color'])) { echo $_COOKIE['bg_color']; } else { echo "#fff"; } ?>">
                    </div>
                </div>
                <div class="panel-footer">
                    <input type="submit" value="Zapisz" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
