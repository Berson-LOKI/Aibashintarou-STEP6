<?php
$name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars($_POST['company'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>お問い合わせフォーム確認画面</h2>
    </header>

    <main>
        <form action="send.php" method="POST">
            <table border="3">
                <tr>
                    <th>お名前</th>
                    <td>
                        <?php echo $name; ?>
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                    </td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td>
                        <?php echo $company; ?>
                        <input type="hidden" name="company" value="<?php echo $company; ?>">
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <?php echo $email; ?>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <?php echo $age; ?>
                        <input type="hidden" name="age" value="<?php echo $age; ?>">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <?php echo nl2br($message); ?>
                        <input type="hidden" name="message" value="<?php echo $message; ?>">
                    </td>
                </tr>
            </table>

            <br>
            <input type="submit" value="送信">
            <input type="button" value="戻る" onclick="history.back()">
        </form>
    </main>

    <aside>
        <h3>サイドバー</h3>
        <ul>
            <li>
                <a href="https://www.google.com/" target="_blank">トップページ</a>
            </li>
            <li>
                <a href="https://qiita.com/" target="_blank">人気投稿</a>
            </li>
            <li>
                <a href="https://www.amazon.co.jp/" target="_blank">エンジニアおすすめ商品</a>
            </li>
            <li>
                <a href="https://zenn.dev/" target="_blank">エンジニアおすすめ記事</a>
            </li>
            <li>
                <a href="https://github.com/" target="_blank">投稿ページ</a>
            </li>
        </ul>
    </aside>
</body>
</html>