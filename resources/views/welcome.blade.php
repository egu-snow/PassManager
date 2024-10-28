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
.video-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90%; /* 必要に応じて高さを調整してください */
}

.video-container video {
    width: 90%;
    max-width: 800px; /* 最大幅を設定（必要に応じて調整） */
    height: auto;
} 
#caution {
    color: tomato;
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
            <h5 class="card-header">Objective</h5>
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

<div class="row justify-content-around flex-column flex-md-row">
    <div class="col-12 col-md-8 mt-3">
        <div class="card shadow mb-5 bg-body-tertiary rounded">
            <h5 class="card-header">Create</h5>
            <div class="card-body">
                <h5 class="card-title">計画</h5>
                <p class="card-text">Excelを使ってアプリの機能を整理し、画面遷移図やルーティングを作成した。</p>
                <h5 class="card-title">コーディング</h5>
                <p class="card-text">paizaラーニングで学んだ基本を軸に、laravelの解説ページを検索したり、エラーを解決しながら作成を進めていった。</p>
                <h5 class="card-title">デプロイ</h5>
                <p class="card-text">Gitを使って本番環境にpullすることで、アプリ作成と同時に進めていった。</p>
                <h5 class="card-title">movie</h5>
            </div>
            <div class="video-container mb-4">
                <video controls>
                    <source src="{{ asset('images/passmanager-exel.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3 mt-3">
        <div class="card shadow mb-5 bg-body-tertiary rounded">
            <h5 class="card-header">Technology</h5>
            <div class="card-body">
                <h5 class="card-title">フロント・クライアント技術</h5>
                <p class="card-text">HTML, CSS, Javascript<br>Bootstrap</p>
                <h5 class="card-title">サーバーサイド技術</h5>
                <p class="card-text">Laravel11.9, laravel/breeze2.1, XAMPP</p>
                <h5 class="card-title">DB・ミドルウェア技術</h5>
                <p class="card-text">MySQL, phpMyAdmin<br>Filezilla</p>
                <h5 class="card-title">バージョン管理ツール</h5>
                <p class="card-text">Git, GitHub</p>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-around flex-column flex-md-row">
    <div class="col-12 col-md-10 mt-3">
        <div class="card shadow mb-5 bg-body-tertiary rounded">
            <h5 class="card-header">Demonstration</h5>
            <div class="card-body">
                <div class="video-container mb-4">
                    <video controls>
                        <source src="{{ asset('images/passmanager-demo.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <h5 class="card-title">注意</h5>
                <p class="card-text" id="caution">本アプリは、作者の学習成果をPRする目的で作ったものです。そのため、実際の個人情報を登録することはお控え頂きますようお願いいたします。</p>
            
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-around flex-column flex-md-row">
    <div class="col-12 col-md-10 mt-3">
        <div class="card shadow mb-5 bg-body-tertiary rounded">
            <h5 class="card-header">Afterword</h5>
            <div class="card-body">
                <h5 class="card-title">後書き</h5>
                <p class="card-text">
                    PHPを学んだうえでLaravelを使ってみましたが、フレームワークの恩恵を感じられるのは
                    まだまだ修行を積んでからのようです。
                    <br>しかし、アプリ制作過程で多くのことを学べました。
                    <br>
                    <br>MVCモデルの使い方・Laravel 各ファイルの役割
                    <br>GitHub のリポジトリの考え方
                    <br>Git のバージョン管理、ブランチの考え方
                    <br>Git, GitHub を使ったデプロイ、SSH通信
                    <br>Breeze を使ったログイン機能の実装とカスタマイズ
                    <br>favicon アイコンの作成
                    <br>
                    <br>＜エラーから学んだこと＞
                    <br>Breeze で作成されたview をカスタマイズする場合、Bootstrap を使うとTailwind CSS と競合して反映されないことがある。
                    <br>Git を使ってデプロイする場合、開発環境と本番環境でインストールされているプログラミング言語・ミドルウェアのバージョンが一致していないと、競合エラーが発生する。
                    <br>-dev は開発環境でしか反映しない。本番環境では -buildを使う。
                </p>
            </div>
        </div>
    </div>
</div>
@endsection