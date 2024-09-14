@extends('layout')

@section('content')
    <h1 class="mb-5">New account</h1>
    <div class="d-flex flex-row">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M2 2.75A2.75 2.75 0 0 1 4.75 0h14.5a.75.75 0 0 1 .75.75v8a.75.75 0 0 1-1.5 0V1.5H4.75c-.69 0-1.25.56-1.25 1.25v12.651A2.987 2.987 0 0 1 5 15h6.25a.75.75 0 0 1 0 1.5H5A1.5 1.5 0 0 0 3.5 18v1.25c0 .69.56 1.25 1.25 1.25h6a.75.75 0 0 1 0 1.5h-6A2.75 2.75 0 0 1 2 19.25V2.75Z"></path><path d="M15 14.5a3.5 3.5 0 1 1 7 0V16h.25c.966 0 1.75.784 1.75 1.75v4.5A1.75 1.75 0 0 1 22.25 24h-7.5A1.75 1.75 0 0 1 13 22.25v-4.5c0-.966.784-1.75 1.75-1.75H15Zm3.5-2a2 2 0 0 0-2 2V16h4v-1.5a2 2 0 0 0-2-2Z"></path></svg>
        <p class="ms-1">入力値は暗号化して保存されます</p>
    </div>

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
    
        <div class="mb-5">
            <button type="submit" class="btn btn-outline-primary me-3">作成する</button>
            <a href="{{ route('acount.list') }}">一覧に戻る</a>
        </div>
    </form>
    
@endsection
