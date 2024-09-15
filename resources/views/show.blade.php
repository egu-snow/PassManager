@extends('layout')

@section('content')  
    <div class="p-4 my-2 bg-primary-subtle text-emphasis-primary border border-primary-subtle rounded-3">
        <h2 class="mb-3">{{ $site_name }}</h2>
        <div>
            <p>login ID：{{ $login_id }}</p>
            <p>password：{{ $password }}</p>
            <p>Email：{{ $mail_address }}</p>
            <p>memo：{{ $memo }}</p>
        </div>
    </div>
    <div class="mt-2 ms-3">
        <div class="float-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M9.53 2.22a.75.75 0 0 0-1.06 0L2.22 8.47a.75.75 0 0 0 0 1.06l6.25 6.25a.75.75 0 0 0 1.06-1.06L4.56 9.75H16c.797 0 2.008.245 3 .959.952.686 1.75 1.835 1.75 3.791s-.798 3.105-1.75 3.791c-.992.714-2.203.959-3 .959h-3a.75.75 0 0 0 0 1.5h3c1.037 0 2.575-.305 3.876-1.241 1.339-.964 2.374-2.565 2.374-5.009 0-2.444-1.035-4.045-2.374-5.009C18.575 8.555 17.036 8.25 16 8.25H4.56l4.97-4.97a.75.75 0 0 0 0-1.06Z"></path></svg>
            <a href={{ route('acount.list') }} class="me-4 link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">一覧に戻る</a>
        </div>
        <div class="float-start">    
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M17.263 2.177a1.75 1.75 0 0 1 2.474 0l2.586 2.586a1.75 1.75 0 0 1 0 2.474L19.53 10.03l-.012.013L8.69 20.378a1.753 1.753 0 0 1-.699.409l-5.523 1.68a.748.748 0 0 1-.747-.188.748.748 0 0 1-.188-.747l1.673-5.5a1.75 1.75 0 0 1 .466-.756L14.476 4.963ZM4.708 16.361a.26.26 0 0 0-.067.108l-1.264 4.154 4.177-1.271a.253.253 0 0 0 .1-.059l10.273-9.806-2.94-2.939-10.279 9.813ZM19 8.44l2.263-2.262a.25.25 0 0 0 0-.354l-2.586-2.586a.25.25 0 0 0-.354 0L16.061 5.5Z"></path></svg>
            <a href={{ route('acount.edit',[ 'id'=> $id]) }} class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">編集する</a>
        </div>
    </div>

    <div class="form-check mt-5 ms-3">
        <input type="checkbox" class="form-check-input" id="deleteCheck">
        <label class="form-check-label" for="deleteCheck">←　削除するときチェック</label>
    </div>

    <form action="{{ route('acount.delete',[ 'id'=> $id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger mt-1 ms-3" id="deleteButton" disabled>削除</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection