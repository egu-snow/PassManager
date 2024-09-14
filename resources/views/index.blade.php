@extends('layout')

@section('content')

    <h1>Index Page</h1>
    <h4>site name</h4>
    @foreach ($acounts as $acount)
        <p>
            <a href="{{ route('acount.show',[ 'id'=> $acount-> id]) }}">
                {{ $acount['site_name'] }}
            </a>
        </p>
    @endforeach
    <div>
        <a href={{ route('acount.new') }} class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">新規作成</a>
    </div>

@endsection