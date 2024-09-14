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
    
    <div class="form-check mt-5">
        <input type="checkbox" class="form-check-input" id="deleteCheck">
        <label class="form-check-label" for="deleteCheck">←　削除するときチェック</label>
    </div>
    <form action="{{ route('acount.delete',[ 'id'=> $id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger mt-1" id="deleteButton" disabled>削除</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection