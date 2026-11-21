
<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$company = trim($_POST['company'] ?? '');
$email = trim($_POST['email'] ?? '');
$age = trim($_POST['age'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if ($name === '') {
    $errors[] = 'お名前を入力してください。';
}

if ($company === '') {
    $errors[] = '会社名を入力してください。';
}

if ($email === '') {
    $errors[] = 'メールアドレスを入力してください。';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = '正しいメールアドレスを入力してください。';
}

if ($age === '') {
    $errors[] = '年齢を入力してください。';
} elseif (filter_var($age, FILTER_VALIDATE_INT) === false || (int)$age < 0) {
    $errors[] = '年齢は0以上の整数で入力してください。';
}

if ($message === '') {
    $errors[] = 'お問い合わせ内容を入力してください。';
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム確認画面</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <header>
        <h2>お問い合わせフォーム確認画面</h2>
    </header>

    <aside>
        <h3>サイドバー</h3>
        <ul>
            <li><a href="https://www.google.com/" target="_blank">トップページ</a></li>
            <li><a href="https://qiita.com/" target="_blank">人気投稿</a></li>
            <li><a href="https://www.amazon.co.jp/" target="_blank">エンジニアおすすめ商品</a></li>
            <li><a href="https://zenn.dev/" target="_blank">エンジニアおすすめ記事</a></li>
            <li><a href="https://github.com/" target="_blank">投稿ページ</a></li>
        </ul>
    </aside>

    <main>

        <?php if (!empty($errors)): ?>

            <h3>入力内容にエラーがあります。</h3>

            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>

            <input type="button" value="入力画面に戻る" onclick="history.back()">

        <?php else: ?>

            <form action="send.php" method="POST">
                <table>
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

        <?php endif; ?>

    </main>

</body>
</html>
