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

@endsection