<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>お問い合わせフォーム送信完了画面</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "お問い合わせが送信されました。ありがとうございます。";
        }
    ?>

    <br><br>

    <a href="contact.php">お問い合わせフォームに戻る</a>

</body>
</html>