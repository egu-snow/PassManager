<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アカウント一覧</title>
</head>
<body>
    <h1>アカウント一覧</h1>

    @foreach ($acounts as $acount)
        <p>{{ $acount['site_name'] }}</p>
    @endforeach
</body>
</html>