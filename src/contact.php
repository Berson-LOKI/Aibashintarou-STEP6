<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>お問い合わせフォーム</h2>

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

    <form action="confirm.php" method="POST" id="contactForm" novalidate>
        <table border="3">
            <tr>
                <th>お名前</th>
                <td>
                    <input type="text" name="name" size="40">
                </td>
            </tr>

            <tr>
                <th>会社名</th>
                <td>
                    <input type="text" name="company" size="40">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="email" name="email" size="40">
                </td>
            </tr>

            <tr>
                <th>年齢</th>
                <td>
                    <input type="number" name="age" size="40">
                </td>
            </tr>

            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea name="message" rows="6" cols="40"></textarea>
                </td>
            </tr>
        </table>

        <input type="submit" value="送信">
    </form>

    <footer id="footer">
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <button type="button">押してみてね！</button>
    </footer>

    <script src="./style.js"></script>

</body>
</html>