@extends('layouts.app')
@section('content')
<div id="js-loading-wait"></div>
<div class="js-loading-hidden" id="js-loading-contents">
@yield('kusocola')
    <div class="container">
        <div class="row justify-content-center">
            <!-- TODO: #15: ちゃんとレスポンシブ対応する -->
            <div class="col-md-8 justify-content-center text-center font-weight-bold">
                <p class="font-weight-bold mb-1">URLをシェア</p>
                <p class="font-weight-bold">{{ request()->fullUrl() }}</p>
                    <div class="row d-flex justify-content-center my-3">
                        <!-- TODO: クソコラをTwitterシェアするときの文言、ハッシュタグ、アカウントをちゃんと考えたい #23 -->
                        <button type="button" 
                            onclick="location.href='https://twitter.com/intent/tweet?text=クソコラメイカーでクソコラを作ったよ★&url={{ request()->fullUrl() }}&hashtags=gokigen&via=daisuke7924'"
                            class="col-md-5 btn btn-twitter btn-lg btn-block py-3 text-white d-flex justify-content-center align-content-center">
                            <i class="fab fa-twitter twitter-icon-size px-1"></i>Twitterでシェアする
                        </button>
                    </div>
                    <div class="row d-flex justify-content-center my-3">
                        <!-- TODO: クソコラをLINEシェアするときの文言、ハッシュタグ、アカウントをちゃんと考えたい #23 -->
                        <button type="button"
                            onclick="location.href='https://line.me/R/msg/text/?クソコラメイカーでクソコラを作ったよ★{{ request()->fullUrl() }}'"
                            class="col-md-5 btn btn-line btn-lg btn-block py-3 d-flex justify-content-center align-content-center">
                            <i class="fab fa-line line-icon-size px-1"></i>LINEでシェアする
                        </button>
                    </div>

                    <div class="row d-flex justify-content-center my-3">
                        <button type=“button” onclick="location.href='{{ url('/') }}'" class="col-md-5 btn btn-primary btn-lg btn-block py-3">
                            ＼新しいクソコラを作る／
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection