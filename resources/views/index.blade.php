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
    
   
    <div>
        <a href={{ route('acount.new') }} class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">新規作成</a>
    </div>

@endsection