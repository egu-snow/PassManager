<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規作成フォーム</title>
</head>
<body>
    <h2>新規作成</h2>
    {{ Form::open(['route'=>'acount.store']) }}
        <div class="">
            {{ Form::label('site_name','サイト名：')　}}
            {{ Form::text('site_name') }}
        </div>
        <div class="">
            {{ Form::label('login_id','ログインID：')　}}
            {{ Form::text('login_id',null) }}
        </div>
        <div class="">
            {{ Form::label('password','パスワード：')　}}
            {{ Form::text('password',null) }}
        </div>
        <div class="">
            {{ Form::label('mail_address','メールアドレス：')　}}
            {{ Form::text('mail_address',null) }}
        </div><div class="">
            {{ Form::label('memo','メモ：')　}}
            {{ Form::text('memo',null) }}
        </div>

        <div class="">
            {{ Form::submit('作成する') }}
            <a href={{ route('acount.list') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
</body>
</html>