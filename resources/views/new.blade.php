@extends('layout')

@section('content')
    <h2>新規作成</h2>
    
    <form action="{{ route('acount.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">サイト名</span>
            <input type="text" name="site_name" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">ログインID</span>
            <input type="text" name="login_id" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">パスワード</span>
            <input type="text" name="password" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">メールアドレス</span>
            <input type="text" name="mail_address" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">メモ</span>
            <input type="text" name="memo" class="form-control" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3">
            <label for="category_numb">カテゴリー</label>
            <select name="category_numb" class="form-select">
                <option selected>-- 選択してください --</option>
                <option value="1">金融サービス</option>
                <option value="2">ショッピングサイト</option>
                <option value="3">サブスクリプション</option>
                <option value="4">コミュニティサイト</option>
                <option value="5">その他</option>
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-outline-primary">作成する</button>
            <a href="{{ route('acount.list') }}">一覧に戻る</a>
        </div>
    </form>
@endsection
