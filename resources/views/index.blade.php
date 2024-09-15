@extends('layout')

@section('content')

    <h1>Index Page</h1>
    <h4>site name</h4>
    
    @php
        $groupedAcounts = $acounts->groupBy('category_numb');
    @endphp
    
    @foreach ($groupedAcounts as $category => $acounts)
        <h6 class="p-3 mb-2 bg-body-secondary">
            @switch($category)
                @case(1)
                    金融サービス
                    @break
                @case(2)
                    ショッピングサイト
                    @break
                @case(3)
                    サブスクリプション
                    @break
                @case(4)
                    コミュニティサイト
                    @break
                @case(5)
                    その他
                    @break
            @endswitch
        </h6>
        @foreach ($acounts as $acount)
            <p>
                <a href="{{ route('acount.show', ['id' => $acount->id]) }}" class="ms-5">
                    {{ $acount['site_name'] }}
                </a>
            </p>
        @endforeach
    @endforeach
    
   
    <div class="float-start">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M17.263 2.177a1.75 1.75 0 0 1 2.474 0l2.586 2.586a1.75 1.75 0 0 1 0 2.474L19.53 10.03l-.012.013L8.69 20.378a1.753 1.753 0 0 1-.699.409l-5.523 1.68a.748.748 0 0 1-.747-.188.748.748 0 0 1-.188-.747l1.673-5.5a1.75 1.75 0 0 1 .466-.756L14.476 4.963ZM4.708 16.361a.26.26 0 0 0-.067.108l-1.264 4.154 4.177-1.271a.253.253 0 0 0 .1-.059l10.273-9.806-2.94-2.939-10.279 9.813ZM19 8.44l2.263-2.262a.25.25 0 0 0 0-.354l-2.586-2.586a.25.25 0 0 0-.354 0L16.061 5.5Z"></path></svg>
        <a href={{ route('acount.new') }} class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">新規作成</a>
    </div>

@endsection