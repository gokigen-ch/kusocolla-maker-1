@extends('layouts.app')

@section('content')
<div class="app-top">
    <div class="container">
        <div class="row justify-content-center">
            <!-- TODO: #15: ちゃんとレスポンシブ対応する -->
            <div class="col-md-5 justify-content-center text-center font-weight-bold">
                <div class="logo">
                    <img src="/logo-kusocolla-move.png" class="img-fluid py-5 hidariue-move-logo" alt="動く">
                    <img src="/logo-kusocolla.png" class="img-fluid py-5" alt="クソコラメーカー">
                </div>
                <p class="mb-0">あなたの顔が写っている写真をアップロードしてね！</p>
                <p>正面を向いている画像がおすすめだよ！</p>
                <div class="small font-weight-bold">
                    <p class="mb-0">顔が認識できなかったときは動物の写真が勝手に合成されるよ！</p>
                    <p>それはそれでおもしろいね！</p>
                </div>
                <form action="image" method="post" enctype="multipart/form-data" class="mb-5" id="image-form">
                    {{ csrf_field() }}
                    <div class="form-group text-center font-weight-bold row justify-content-center">
                        <label for="image" class="control-label btn btn-primary text-white btn-lg btn-block py-4">
                            ファイルを選択
                            <input type="file" accept="image/*" id="image" name="image">
                            <div class="preview"></div>
                        </label>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary text-white btn-lg btn-block py-4">クソコラを作成</button>
                    </div>
                </form>
                <div class="row d-flex justify-content-center">
                    <!-- TODO: #14 「遊び方」のフレームの下が途切れてる -->
                    <p class="col-md-7 bg-frame lead py-2">遊び方</p>
                </div>

                <div class="youtube">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kCMBrpfmnLI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection