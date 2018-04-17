<?php
    session_start();
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

<?php include "nav.php" ?>

<?php
    require "config.php";
    $username = "";
    $password = "";
    const max_length = 30;

    if (isset($_POST['login']) && !empty($_POST['username'])
       && !empty($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        try
	    {
		    $connection = new PDO($dsn, $db_user, $db_password, $options);
            $sql = "SELECT username FROM user WHERE username = :username AND password = :password";
		    $statement = $connection->prepare($sql);
		    $statement->bindParam(':username', $username, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->execute();
		    $result = $statement->fetch();

            if (isset($result) and $result[0] != '') {
                $_SESSION['user'] = $result[0];
                header('location: /admin/index.php');
            }
            else {
                $msg = "Nieprawidłowa nazwa użytkownika lub hasło!";
            }
	    }
        catch(PDOException $error)
	    {
		    echo $sql . "<br>" . $error->getMessage();
    	}
    }

    $empty_username = (isset($_POST['username']) && $username == '');
    $empty_password = (isset($_POST['password']) && $password == '');

    $field_max_len = max_length;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1>LOGIN</h1>
            <form  method="post">
                <?php
                    if(isset($msg)) {
                        echo '<p class="alert alert-danger">'.$msg.'</p>';
                    }
                ?>
                <div class="form-group">
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" class="form-control" id="username" name="username" maxlength="<?php echo $field_max_len ?>">
                    <?php
                        if ($empty_username)
                            echo '<p class="alert alert-danger">Nie podałeś loginu</p>';
                    ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Hasło:</label>
                    <input type="password" class="form-control" id="pwd" name="password" maxlength="<?php echo $field_max_len ?>">
                    <?php
                        if ($empty_password)
                            echo '<p class="alert alert-danger">Nie podałeś hasła</p>';
                    ?>
                </div>
                <button name="login" type="submit" class="btn btn-default">Zaloguj</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
