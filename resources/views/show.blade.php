<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>詳細画面</title>
</head>
<body>
    
    <h2>{{ $site_name }}</h2>

    <p>ログインID：{{ $login_id }}</p>
    <p>パスワード：{{ $password }}</p>
    <p>メールアドレス：{{ $mail_address }}</p>
    <p>メモ：{{ $memo }}</p>

    <p>
        <a href={{ route('acount.list') }}>一覧に戻る</a>
    </p>

</body>
</html>