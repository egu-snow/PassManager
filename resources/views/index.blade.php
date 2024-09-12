@extends('layout')

@section('content')

    <h1>アカウント一覧</h1>

    @foreach ($acounts as $acount)
        <p>
            <a href="{{ route('acount.show',[ 'id'=> $acount-> id]) }}">
                {{ $acount['site_name'] }}
            </a>
        </p>
    @endforeach

@endsection