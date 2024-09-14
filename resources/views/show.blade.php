@extends('layout')

@section('content')  
    <h2 class="mb-3">{{ $site_name }}</h2>

    <p>login ID：{{ $login_id }}</p>
    <p>password：{{ $password }}</p>
    <p>Email：{{ $mail_address }}</p>
    <p>memo：{{ $memo }}</p>

    <p>
        <a href={{ route('acount.list') }}>一覧に戻る</a>
    </p>
    <form action="{{ route('acount.delete')}}" method="DELETE">
        <button type="submit" class="btn btn-outline-primary">削除</button>
    </form>
        
@endsection