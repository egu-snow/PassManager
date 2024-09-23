<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>pass manager</title>
    @include('style-sheet')
</head>
<body>
    @include('nav')
    <div class="container">
        @yield('content') 
    </div>
    
</body>
</html>