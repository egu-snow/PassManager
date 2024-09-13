@extends('layout')

@section('content')
    <h2 class="mb-3">New account</h2>
    
    <form action="{{ route('acount.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">site name</span>
            <input type="text" name="site_name" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">login ID</span>
            <input type="text" name="login_id" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">password</span>
            <input type="text" name="password" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="text" name="mail_address" class="form-control" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">memo</span>
            <input type="text" name="memo" class="form-control" aria-describedby="basic-addon1">
        </div>
    
        <div class="mb-3">
            <label for="category_numb">Category</label>
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
            <button type="submit" class="btn btn-outline-primary me-3">作成する</button>
            <a href="{{ route('acount.list') }}">一覧に戻る</a>
        </div>
    </form>
    
@endsection
