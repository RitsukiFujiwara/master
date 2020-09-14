<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" class="formArea">
        <div id="ajaxArea">
            <p>ここだけ入れ替わります。</p>
        </div>
        <p><?php echo date('Y/M/d H:i:s'); ?></p>
        名前
        <input type="text" name="name" class="inputText js-get-val-name" autocomplete="off">
        年齢
        <input type="text" name="name" class="inputText inputText--s js-get-val-age" autocomplete="off">
        <input type="submit" value="送信"　class="btn">
    </form>

    <script>
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"
    </script>
    <script src="app.js"></script>
</body>
</html>