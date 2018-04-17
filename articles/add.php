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
    $categories = array("JS", "PHP", "CSS", "HTML", "DOM");

    $data['ip'] = $_SERVER['REMOTE_ADDR'];

    function find_and_replace_naughty_words($text) {
        preg_match_all("/test/", $text, $bad_words);
        return preg_replace("/test/", "rdest", $text);
    }

    function get_data($key) {
        if (isset($_POST[$key])) {
            return find_and_replace_naughty_words($_POST[$key]);
        }
        return null;
    }

    if (isset($_POST)) {
        $data['caption'] = get_data('caption');
        $data['content'] = get_data('content');
        $data['category'] = get_data('category');
    }
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Dodaj artykuł</h1>
        </div>
        <div class="col-sm-12">
            <form class="form-horizontal" method="post">
                 <div class="form-group">
                     <label>Nagłówek</label>
                     <input type="text" name="caption" id="id_caption" class="form-control" value="<?php echo $data['caption'] ?>">
                 </div>
                <div class="form-group">
                    <label>Treść</label>
                    <textarea name="content" id="id_content" class="form-control" rows="10"><?php echo $data['content'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Kategoria</label>
                    <select name="category" id="id_category" class="form-control">
                        <?php
                            foreach ($categories as $cat)
                                if ($cat == $data['category']) {
                                    echo "<option value=".$cat." selected>".$cat."</option>";
                                }
                                else {
                                    echo "<option value=".$cat.">".$cat."</option>";
                                }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Zapisz">
                </div>
            </form>

            <?php
                foreach ($data as $key => $value) {
                    echo $key." = ".$value." <br/>";
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>

