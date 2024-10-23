@extends('layout')

@section('styles')
<style>
    body{
        
        
    }
    .title-container{
        width: auto;
        height: 100vh;
        position: relative;
        
    }
    #title{
        height: calc(100% - 80px);
        inset: 0;
        display: grid;
        place-items: center;
    }
    #title h1 {
        font-size: 3rem;
    }
    #blue-screen{
        background-color: rgba(187, 239, 246, 0.463);
        position: fixed;
        inset: 0;
        transform:  translate(0, 100vh);
    }
    #gray-screen{
        background-color: rgba(0, 0, 0, 0.229);
        position: fixed;
        inset: 0;
        transform: translate(100vw, 0);
    }
    #background{
        background: 
        url('{{ asset('images/background1.jpg') }}') no-repeat;
        background-size: cover;
        position: fixed;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 1;
    }  
</style>
@endsection

@section('content')

<div class="row title-container">
    <div class="col-12">
        <div id="title">
            <h1>PassManager</h1>
        </div>
        <div id="blue-screen"></div>
        <div id="gray-screen"></div>
        <div id="background"></div>
    </div>
</div>


<div class="row justify-content-around flex-column flex-md-row">
    <div class="col-12 col-md-4 mt-3">
        <div class="card shadow mb-5 bg-body-tertiary rounded">
            <h5 class="card-header">objective</h5>
            <div class="card-body">
                <h5 class="card-title">アプリの目的</h5>
                <p class="card-text">昨今、webサービスを利用する機会が増加しており、サイトごとにログインIDやパスワードを設定、管理しなければならない。
                アカウント情報が保存される機能もあるが、そもそもどこに登録したか分からなくなることも多い。
                現在登録中のアカウントを視覚化し、一元管理できるアプリを作成する。</p>
            
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 mt-3">
        <div class="card shadow mb-5 bg-body-tertiary rounded">
            <h5 class="card-header">Features</h5>
            <div class="card-body">
                <h5 class="card-title">アプリの特徴</h5>
                <div class="mt-3">
                    <h6 class="card-title">1. 重要な情報を守る安全性</h6>
                    <p class="card-text">・ログイン機能により、ユーザーごとの登録情報が管理できる</p>
                    <p class="card-text">・詳細情報表示の際は、「秘密の質問」により二重認証を行う</p>
                    <p class="card-text">・登録情報は暗号化して保存される</p>
                    <p class="card-text">・誤って消さないよう、削除ボタンを非アクティブ化</p>
                </div>
                <div class="mt-3">
                    <h6 class="card-title">2. シンプルなデザイン</h6>
                    <p class="card-text">・集中力を高める寒色系の色づかい</p>
                    <p class="card-text">・必要な情報のみ、分かりやすく表示</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection