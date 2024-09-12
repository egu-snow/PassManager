@extends('layout')

@section('content')  
    <h2>{{ $site_name }}</h2>

    <p>ログインID：{{ $login_id }}</p>
    <p>パスワード：{{ $password }}</p>
    <p>メールアドレス：{{ $mail_address }}</p>
    <p>メモ：{{ $memo }}</p>

    <p>
        <a href={{ route('acount.list') }}>一覧に戻る</a>
    </p>

@endsection