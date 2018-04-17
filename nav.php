<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header" style="width: 150px;">
            <a href="/" class="navbar-brand">BLOG</a>
        </div>
        <ul class="main-navigation">
            <li><a href="#">Artykuły</a>
                <ul>
                    <li><a href="#">CSS</a>
                        <ul>
                            <li><a href="/articles/css1.php">CSS cz1</a></li>
                            <li><a href="/articles/css2.php">CSS cz2</a></li>
                        </ul>
                    </li>
                    <li><a href="/articles/javascript.php">javaScript</a></li>
                    <li><a href="/articles/dom.php">DOM</a></li>
                    <li><a href="/articles/add.php">+ Dodaj</a></li>
                </ul>
            </li>
        </ul>
        <ul class="navbar navbar-nav navbar-right">
            <?php
            if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
                echo '<li><a href="#" class="disabled">Witaj <strong>'.$_SESSION['user'].'</strong></a></li>';
                echo '<li><a href="/admin/index.php">Strona administratora</a></li>';
                echo '<li><a href="/logout.php">Wyloguj się</a></li>';
            }
            else {
                echo '<li><a href="/login.php">Zaloguj się</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>